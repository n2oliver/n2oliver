<?php 
#include('/conversion.php');
$APP_URL = '/jogos'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include('../g-tags.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogos Online | n2oliver</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/n2.jpg"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../styles-index.css"/>
    <link rel="stylesheet" href="../sobre-mim.css"/>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background: #f0f0f0;
      background-image: url(../jogos/img/quebracabecas.jpg);
      overflow: auto;
    }
    header {
      text-align: center;
      padding: .2rem;
      font-weight: 700;
      font-family: 'Ubuntu';
      font-size: 2rem;
      background-image: linear-gradient(0deg, darkslategray, slategray, white);
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }
    header h1 {
      color: #fff !important;
    }
    header p {
        font-size: 12px;
        color: white !important;
    }
    header img {
      filter: drop-shadow(0 0 0.2rem rgb(255, 255, 255));
    }
    .container {
      display: grid;
      gap: .2rem;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      background-color: transparent;
    }
    .game-card {
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: center;
      height: auto;
      overflow: auto;
    }
    .game-card h2 {
      margin: 0.5rem 0;
      font-family: 'Ubuntu';
      -webkit-text-stroke: 1px #000;
      color: yellow;
      text-shadow: 3px 3px 3px darkslategray;
    }
    .game-card a {
      text-decoration: none;
      font-family: 'Ubuntu';
    }
    .game-card .link {
      text-align: center;
    }
    .game-card a div {
      padding: 10px;
      align-items: end;
      height: auto;
      background-position: center !important;
    }
    .game-card a div span {
      background-color: rgba(0.0,0,0,0.5);
      background-position: top;
      color: white;
      font-weight: bold;
    }
    .intr-in {
      top: 60px!important;
    }
    .bootbox.modal {
      z-index: 9999;
    }
    .donation-section {
      background-color: #e9ecef;
      border: 1px solid #dee2e6;
      border-radius: 8px;
      padding: 20px;
      margin-top: 2rem;
      text-align: center;
      color: #343a40;
    }
    .success {
      background: linear-gradient(135deg,#54a554,#77f554);
    }
    .modal-content {
      background-color: #34343434 !important;
    }
    .modal-header {
      background-color: white !important;
    }
    .modal-title {
      width: 100vw !important;
    }
    .welcome-text-box {
      background: white;
      padding: 1rem;
      border-radius: 14px;
    }
    #welcomeModal {
      position: relative;
      background-color: var(--bs-alert-bg);
    }
    #adsterra-banner > div {
      background: rgba(255, 255, 255, .8);
      backdrop-filter: blur(1px);
    }
  </style>
  <script defer
        data-site="e5e969e1-3c42-400f-ab17-83f62c295b9a"
        src="https://cdn.megapush.com.br/MegaPush.js">
    </script>
  <script src="/gtag_dispatcher.js"></script>
  <script src="/popads-monetization.js" data-cfasync="false"></script>
  <script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
  <script async src="https://ss.mrmnd.com/banner.js"></script>
</head>
<body>
  <?php include("../aads.php"); ?>
<?php include("../gtagmanager.php"); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


  <!-- Bootstrap Bundle (JS + Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootbox@5.5.2/bootbox.min.js"></script>

  <div class="m-auto p-1 col-md-8">
    <?php include('../navbar.php'); ?>
  </div>
    <script>
      const nav = document.querySelector('nav')
      nav.classList.add('col-md-8');
      nav.classList.add('m-auto');
      nav.classList.add('px-0');
    </script>
    

  <header class="mx-auto col-md-8 text-center">
    <img alt="logo" src="<?=$APP_URL?>/img/logo.png" style="height: 60px; width: auto;"/>
    <p class="m-auto" style="max-width: 60%">Lugar de diversão com jogos simples e gratuitos direto no navegador!</p>
  </header>
  
  <div id="welcomeModal" class="alert alert-primary p-1 mx-auto col-md-8"
        role="region" aria-label="Boas-vindas"
        style="box-shadow:0 2px 6px rgba(0,0,0,.08);">
    <div class="d-flex flex-wrap align-items-start justify-content-between">
      <div>
        <div>
            <script type="text/javascript">
                aclib.runBanner({
                    zoneId: '10445942',
                });
            </script>
        </div>

      </div>
      <script type="text/javascript">
        atOptions = {
          'key' : '29929d8720c37977a6ea64b1b7db2d02',
          'format' : 'iframe',
          'height' : 50,
          'width' : 320,
          'params' : {}
        };
      </script>
      <script type="text/javascript" src="//playedsophomore.com/29929d8720c37977a6ea64b1b7db2d02/invoke.js"></script>
      <div class="d-flex p-1" style="background: #cfe2ff">
        <div class="text-end">          
          <button type="button" class="btn-close" aria-label="Fechar"
              onclick="document.getElementById('welcomeModal')?.remove()"></button>
        </div>
      </div>
    </div>
    <div class="d-flex flex-column align-items-center justify-content-between">
      <div class="flex-grow-1 text-start">
        <div class="row">
          <div class="col m-2 text-center">
            <div data-mndbanid="d34bd492-9d50-4f0d-b8af-38606d771973"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="alert alert-primary m-auto col-md-8">
    <h5 class="mb-1">Oi, seja bem vindo!</h5>
    <p class="mb-2">Que bom que você chegou! Sinta-se à vontade para explorar nossos jogos gratuitos. 😄</p>
    <button type="button" class="btn btn-primary btn-sm">Começar a diversão!</button>            
  </div>
  <div id="main-game" class="game-card mx-auto mt-2 col-md-8 text-center">
    <div class="row">
      <div class="col-6">
        <script type="text/javascript">
          atOptions = {
            "key" : "b5463c03cd36f2b207d3e311906ba716",
            "format" : "iframe",
            "height" : 250,
            "width" : 300,
            "params" : {}
          };
        </script>
        <script type="text/javascript" src="//playedsophomore.com/b5463c03cd36f2b207d3e311906ba716/invoke.js"></script>
      </div>
      <div class="col-6">
        <a href="<?= $APP_URL ?>/linhaamarela/">
          <div class="bg-white row border border-light"
            style="background: url(<?=$APP_URL?>/linhaamarela/img/fundo.png)">
            <h2 class="rounded-left">Linha Amarela</h2> 
            <span class="align-content-center px-3 pt-3 mb-0 rounded w-100 mt-2" onclick='window.location.href = "#";'>
              <p>Divirta-se eliminando os invasores, antes que eles desçam e eliminem a terra!<br>
              <small>Um território, uma linha, um herói: você.</small></p>
              <div class="link btn btn-danger my-2">
                Jogar
              </div>
            </span>
          </div>
          </a>
      </div>
  </div>
  </div>
  <main class="container m-auto col-md-8">
    <div class="game-card">
      <a href="<?= $APP_URL ?>/combo-memo/">
        <div class="bg-white row mb-3 border border-light"
          style="background: url(../img/combo-memo.png)">
          <h2 class="rounded-left">Combo-Memo</h2>
          <span class="align-content-center px-3 pt-3 mb-0 rounded w-100 mt-2" onclick='window.location.href = "/jogos/combo-memo";'>
            <p>Um divertido jogo da memória com combinações!</p>
            <div class="link btn btn-danger my-2">Jogar
            </div>
          </span>
        </div>
      </a>
    </div>

    <div class="game-card">
      <a href="<?= $APP_URL ?>/caca-palavras/">
        <div class="bg-white row mb-3 border border-light"
          style="background: url(/jogos/img/a.jpg)">
          <h2 class="rounded-left">Caça-Palavras</h2>
          <span class="align-content-center px-3 pt-3 mb-0 rounded w-100 mt-2" onclick='window.location.href = "/jogos/caca-palavras";'>
            <p>Um clássico caça-palavras para testar sua atenção e vocabulário.</p>
            <div class="link btn btn-danger my-2">Jogar
            </div>
          </span>
        </div>
      </a>
    </div>

    <div class="game-card">
      <a href="<?= $APP_URL ?>/palavras-cruzadas/">
        <div class="bg-white row mb-3 border border-light"
          style="background: url(/jogos/img/flat-crosswords.png)">
          <h2 class="rounded-left">Palavras Cruzadas</h2>
          <span class="align-content-center px-3 pt-3 mb-0 rounded w-100 mt-2" onclick='window.location.href = "/jogos/palavras-cruzadas";'>
            <p>Desafie seu conhecimento com este quebra-cabeça de palavras.</p>
            <div class="link btn btn-danger my-2">Jogar
            </div>
          </span>
        </div>
      </a>
    </div>
    <!-- Adicione mais jogos aqui -->
  </main>
  <div class="container m-auto col-md-8 p-0">
    <div class="donation-section m-0">
      <h3>Gostou dos jogos?</h3>
      <p>Seu apoio ajuda a manter o site no ar e a desenvolver novos projetos. Considere fazer uma doação para nos ajudar a continuar criando conteúdo gratuito e divertido para todos!</p>
      <p><strong>Chave PIX:</strong> silva.liver@gmail.com</p>
    </div>
  </div>
  <?php include("../footer.php"); ?>
    <script>
  (function() {
    const p = new URLSearchParams(location.search);
    const impressionId = p.get('IMPRESSIONID') || p.get('id');
    if (!impressionId) return;

    // valor em ponto (o proxy também normaliza)
    const value = '0.00005';

    fetch(`/conversion.php?IMPRESSIONID=${encodeURIComponent(impressionId)}&value=${encodeURIComponent(value)}`)
      .then(r => r.json())
      .then(j => console.log('Postback PopAds (proxy):', j))
      .catch(e => console.error('Erro no postback (proxy):', e));
  })();
</script>
</body>
</html>