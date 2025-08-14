<?php
/**
 * postback_popads_s2s.php
 * Envia postback S2S (s2s=1) para PopAds no momento da conversão.
 * Chame internamente: https://n2oliver.com/postback_popads_s2s.php?AUTH_KEY=CHAVE&id=ABC&value=0.00005
 */

declare(strict_types=1);

/* ====== CONFIG ====== */
const POPADS_AID        = 'a2ccdec516d45807a9f39ca6ccaf42b7';
const POPADS_ENDPOINT   = 'http://serve.popads.net/cpixel.php';
const REQUEST_TIMEOUT   = 5;
const AUTH_KEY_EXPECTED = 'K(k2390kd9)K@)_k-02k-k'; // defina algo forte!
/* ==================== */

header('Content-Type: application/json; charset=utf-8');

// Auth simples
$auth = $_GET['AUTH_KEY'] ?? $_POST['AUTH_KEY'] ?? '';
if ($auth !== AUTH_KEY_EXPECTED) {
  http_response_code(401);
  echo json_encode(['ok'=>false,'error'=>'Não autorizado']);
  exit;
}

// Parâmetros
$impressionId = $_GET['IMPRESSIONID'] ?? $_POST['IMPRESSIONID'] ?? $_GET['id'] ?? $_POST['id'] ?? '';
$valueRaw     = $_GET['value'] ?? $_POST['value'] ?? '0';

// Validações
$impressionId = trim($impressionId);
if ($impressionId === '' || !preg_match('/^[a-zA-Z0-9._:-]{1,200}$/', $impressionId)) {
  http_response_code(400);
  echo json_encode(['ok'=>false,'error'=>'IMPRESSIONID ausente ou inválido']);
  exit;
}
$value = number_format((float)str_replace(',', '.', (string)$valueRaw), 5, '.', '');

// Monta URL S2S
$query = http_build_query([
  's2s'   => 1,
  'aid'   => POPADS_AID,
  'id'    => $impressionId,
  'value' => $value,
]);
$url = POPADS_ENDPOINT.'?'.$query;

// cURL
$ch = curl_init();
curl_setopt_array($ch, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_CONNECTTIMEOUT => REQUEST_TIMEOUT,
  CURLOPT_TIMEOUT => REQUEST_TIMEOUT,
  CURLOPT_USERAGENT => 'n2oliver-popads-s2s/1.0',
  CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
]);
$body = curl_exec($ch);
$err  = curl_error($ch);
$code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Resposta
if ($body === false) {
  http_response_code(502);
  echo json_encode(['ok'=>false,'error'=>'Falha ao contatar PopAds','details'=>$err,'http_code'=>$code]);
  exit;
}
http_response_code($code >= 200 && $code < 400 ? 200 : 502);
echo json_encode([
  'ok' => ($code >= 200 && $code < 400),
  'mode' => 's2s',
  'forwarded' => true,
  'http_code' => $code,
  'id' => $impressionId,
  'value' => $value,
  'popads_response' => $body,
]);
