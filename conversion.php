/**
 * postback_popads_proxy.php
 * Repassa o postback para PopAds via servidor (evita CORS no navegador).
 * Chame do front-end: /postback_popads_proxy.php?IMPRESSIONID=...&value=0,00005
 */

declare(strict_types=1);

/* ====== CONFIG ====== */
const POPADS_AID = 'a2ccdec516d45807a9f39ca6ccaf42b7'; // seu AID
const POPADS_ENDPOINT = 'http://serve.popads.net/cpixel.php'; // mantém s2s=0
const REQUEST_TIMEOUT = 5; // s
/* ==================== */

// CORS para seu domínio (ajuste se usar subdomínios)
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: https://n2oliver.com');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: *');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { exit; }

// Parâmetros
$impressionId = $_GET['IMPRESSIONID'] ?? $_GET['id'] ?? '';
$valueRaw     = $_GET['value'] ?? '0';

// Validações
$impressionId = trim($impressionId);
if ($impressionId === '' || !preg_match('/^[a-zA-Z0-9._:-]{1,200}$/', $impressionId)) {
  http_response_code(400);
  echo json_encode(['ok'=>false,'error'=>'IMPRESSIONID ausente ou inválido']);
  exit;
}
$value = number_format((float)str_replace(',', '.', (string)$valueRaw), 5, '.', '');

// Monta URL (s2s=0)
$query = http_build_query([
  's2s'   => 0,
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
  CURLOPT_USERAGENT => 'n2oliver-popads-proxy/1.0',
  CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
]);
$body = curl_exec($ch);
$err  = curl_error($ch);
$code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($body === false) {
  http_response_code(502);
  echo json_encode(['ok'=>false,'error'=>'Falha ao contatar PopAds','details'=>$err,'http_code'=>$code]);
  exit;
}
// Capture o IMPRESSIONID de chegada e guarde por 7 dias
if (!headers_sent()) {
  $imp = $_GET['IMPRESSIONID'] ?? $_GET['id'] ?? '';
  if ($imp && preg_match('/^[a-zA-Z0-9._:-]{1,200}$/', $imp)) {
    setcookie('popads_impr', $imp, [
      'expires'  => time() + 7*24*3600,
      'path'     => '/',
      'secure'   => true,
      'httponly' => false, // se quiser ler no JS, deixe false
      'samesite' => 'Lax',
    ]);
    // Opcional: também salve em sessão/banco
    $_SESSION['popads_impr'] = $imp;
  }
}


http_response_code($code >= 200 && $code < 400 ? 200 : 502);
echo json_encode([
  'ok' => ($code >= 200 && $code < 400),
  'forwarded' => true,
  'http_code' => $code,
  'id' => $impressionId,
  'value' => $value,
  'popads_response' => $body,
]);