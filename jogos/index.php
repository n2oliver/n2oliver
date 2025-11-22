<?php 
#include('/conversion.php');
$APP_URL = '/jogos';
$aid = getenv('AID_POPADS'); // seu AID PopAds
$urlDestino = 'https://n2oliver.com/jogos/'; // página principal
$valorConversao = 0.0005; // valor simbólico da conversão
//-------------------------------------------------

$impressionid = $_GET['impressionid'] ?? null;

if ($impressionid) {
    // Testa se a página principal carrega com sucesso
    $ch = curl_init($urlDestino);
    curl_setopt_array($ch, [
        CURLOPT_NOBODY => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 5
    ]);
    curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Se a página respondeu com HTTP 200 → postback para o PopAds
    if ($status == 200) {
        $postbackUrl = "http://serve.popads.net/cpixel.php?s2s=1&aid={$aid}&id={$impressionid}&value={$valorConversao}";
        @file_get_contents($postbackUrl);

        // (opcional) registrar em log local
        file_put_contents(__DIR__.'/impressões_validas.log', date('Y-m-d H:i:s')." | {$impressionid} | HTTP {$status}\n", FILE_APPEND);
    } else {
        // (opcional) registrar falhas
        file_put_contents(__DIR__.'/falhas.log', date('Y-m-d H:i:s')." | {$impressionid} | HTTP {$status}\n", FILE_APPEND);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php
  // Per-page SEO meta for jogos index
  $meta_title = 'Jogos Online — n2oliver';
  $meta_description = 'Jogos online gratuitos: Linha Amarela, Combo-Memo e outros títulos desenvolvidos por n2oliver.';
  $meta_image = '/jogos/img/logo.png';
  $canonical = (isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : 'https://n2oliver.com/jogos/');
  include('../cabecalho.php');
  ?>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/n2-ico.jpg"/>

    <link rel="stylesheet" href="/css/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="../styles-index.css" />
    <link rel="stylesheet" href="../sobre-mim.css" />
    <link rel="preload" as="image" href="/jogos/linhaamarela/img/fundo.png" />
    <link rel="preload" as="image" href="<?=$APP_URL?>/img/logo.png" />
    <link rel="preload" as="image" href="../img/combo-memo.png" />
    <link rel="preload" as="image" href="/jogos/img/flat-crosswords.png" />
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0 !important;
      background: #f0f0f0;
      background-image: url(../jogos/img/quebracabecas.jpg);
      backdrop-filter: brightness(0.4);
      overflow: auto;
    }
    header {
      text-align: center;
      padding: .2rem;
      font-weight: 700;
      font-family: 'Ubuntu';
      font-size: 2rem;
      background-image: linear-gradient(0deg, black, gray);
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
      filter: drop-shadow(0 0 0.4rem white);
    }
    .container {
      display: grid;
      gap: .2rem;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      background-color: transparent;
    }
    .game-card {
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: center;
      overflow: auto;
      flex: 1 1 200px; 
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
      margin: 4px;
    }
    
    .game-card a div:hover {
      filter: brightness(1.5);
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
      overflow: auto;
      height: auto;
    }
    .success {
      background: linear-gradient(135deg,#54a554,#77f554);
    }
    .modal-content {
      background-color: #34343434 !important;
    }
    .bootbox {
      display: flex !important;
      justify-content: center !important;
    }
    .modal-dialog {
      overflow-y: scroll;
      height: 100vh;
      position: absolute;
    }
    .modal-body {
      text-align: end;
      margin: 0 auto;
    }
    .welcome-text-box {
      background: white;
      padding: 1rem;
      border-radius: 14px;
    }
    #adsterra-banner > div {
      background: rgba(255, 255, 255, .8);
      backdrop-filter: blur(1px);
    }
    main {
      gap: 0 !important;
      align-items: stretch;
      padding: 0;
    }
    #destaque-imagem {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      padding:32px 16px;color:#000;
      text-align:center;
      transition: 0.2s ease;
      border-top-left-radius: 0.375rem;
      border-top-right-radius: 0.375rem;
      height: 300px;
      min-height: fit-content;
    }
    #frame {
      margin-top: 2px !important;
    }
    #progressbar {
      background: #fff;
      height: .4rem;
      width: 100%;
      border-bottom-left-radius: 0.375rem;
      border-bottom-right-radius: 0.375rem;
    }
    .ui-progressbar-value {
      background: deeppink;
      height: .4rem;
    }
    #game-details {
      transition: 1s ease;
    }    
  </style>
  <script defer
        data-site="e5e969e1-3c42-400f-ab17-83f62c295b9a"
        src="/js/megapush/MegaPush.js">
    </script>
  <script data-cfasync="false" src="/popads-monetization.js"  defer></script>
  <script src="/gtag_dispatcher.js"  async></script>
  <script type="text/javascript" data-cfasync="false" src="/js/abrir-janela.js"></script>
  <script src="/js/jquery-ui/jquery-ui.min.js"  async></script>
  <script src="/js/autotranslate.js"  async></script>
</head>
<body>
<?php include("../gtagmanager.php"); ?>


  <!-- Bootstrap Bundle (JS + Popper) -->
  <script src="/js/bootbox/bootbox.min.js"  defer></script>
  <div class="col-md-10 m-auto" style="position: sticky; top: 0; z-index: 999;">
    <?php include('../navbar.php'); ?>
  </div>
    
  <header class="mx-auto col-md-10 text-center mt-1">
    <img alt="logo" src="<?=$APP_URL?>/img/logo.png" style="height: 60px; width: auto;"/>
    <p class="m-auto" style="max-width: 60%">Conecte-se ao seu próximo desafio.</p>
  </header>
  <main class="container d-flex m-auto col-md-10 mt-1" style="background-image: linear-gradient(45deg, #dedede, rgba(0,0,0, .3))">

  <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 1;">
    <iframe data-aa='2417696' src='//acceptable.a-ads.com/2417696/?size=Adaptive'
                      style='border:0; padding:0; width:70%; height:auto; overflow:hidden;display: block;margin: auto'></iframe>
    <div style="width: 70%;margin:auto;position: absolute;left: 0;right: 0">
      <a target="_blank" style="display:inline-block;font-size: 13px;color: #263238;padding: 4px 10px;background: #F8F8F9;text-decoration: none; border-radius: 0 0 4px 4px;" id="frame-link" href="https://aads.com/campaigns/new/?source_id=2417696&source_type=ad_unit&partner=2417696">Advertise here</a>
    </div>
  </div>
  <section  id="destaque-imagem" class="w-100 m-auto n2oliver-jogos d-flex flex-column justify-content-center bg-light"
        alt="">
    <div class="d-flex flex-wrap align-items-start justify-content-center">
      <div class="row">
        <div id="game-details" class="col-md-6 flex-column" style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center;">
          
          
          <div class="rounded" style="font-family: Ubuntu;
            background-color: rgba(0,0,0,.6); color: white !important; padding: 12px; text-align: center;">
            <h2 style="font-size:2rem;margin-bottom:12px;"><strong><span id="game-details-title">SEM LIMITES</span></strong>🎮</h2>
            <p id="game-details-content" style="max-width:680px;margin:0 auto 18px;color: white;line-height:1.5;">
              No <strong>n2oliver</strong> você encontra jogos criados para desafiar sua mente, competir com amigos e se divertir a qualquer hora. Explore modos rápidos, partidas competitivas e novidades toda semana.
            </p>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="m-3">
            <div><a id="destaque-link" href="#"
              style="height: fit-content; 
                align-self: center; 
                padding:12px 18px;
                border-radius:10px;
                background:deeppink;
                border:1px solid rgba(255,255,255,0.2);
                color:#dbeafc;
                font-weight:600;
                text-decoration:none;">
              <span id="destaque-titulo"></span></a>
            </div>
          </div>
          <div>
            <button class="btn btn-danger m-1" id="prev" >
              <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="btn btn-danger m-1" id="next" >
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        <div>
      </div>
    </section>

    <div id="progressbar"></div>
    <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 1;">
      <iframe data-aa='2410752' src='//acceptable.a-ads.com/2410752/?size=Adaptive'
                        style='border:0; padding:0; width:70%; height:auto; overflow:hidden;display: block;margin: auto'></iframe>
    </div>
    <div class="container m-auto p-0 mt-1">
      <div class="donation-section m-0 row">
        <div class="col-md-6">
          <h3>Gostou dos jogos?</h3>
          <p><i class="fas fa-donate"></i>&nbsp;Você pode contribuir nos ajudando a desenvolver novos projetos. Envie sua contribuição pelos seguintes canais!</p>
          <p>
            <small>
              <strong>Chave PIX:</strong> <span class="notranslate" translate="no"> suporte@n2oliver.com</span><br>
              <strong>Bitcoin (LN):</strong> <span class="notranslate" translate="no"> warybongo30@walletofsatoshi.com</span><br>
            </small>
          </p>
        </div>
        <div class="col-md-6">
          <p>
            <small>
              <strong>Global Account:</strong> 
              <span class="notranslate" translate="no"> 
                  <ul class="text-start" style="list-style-type: none; padding-left: 0;">
                    <b>OLIVER SILVA CASTILHO</b>
                    <li>Account number: 889213783-6</li>
                    <li>ACH Routing number: 026073150</li>
                    <li>WIRE Transfer Routing Number: 026073008</li>
                    <li>Bank name: Community Federal Savings Bank</li>
                    <li>Bank Address: 5 Penn Plaza, New York, NY 10001</li>
                  </ul>
                  
              </span><br>
            </small>
          </p>
        </div>
      </div>
    </div>
  </main>
  <div class="container m-auto col-md-10 p-0 mt-1">
    <a href="https://www.popads.net/users/refer/3587213"><img src="https://banners.popads.net/250x250.gif" alt="PopAds.net - The Best Popunder Adnetwork" /></a>
    <a href="https://aads.com/advertise/?partner=2414063"><img src="https://aads.com/a_ads_banners/gif/english/320x50/simple_v1.gif" alt="Advertise with Anonymous Ads" width="320px" height="50px" /></a>
  </div>
  <div class="container m-auto col-md-10 p-0 mt-1">
    <?php include("../footer.php"); ?>
  </div>
  <script>
    function showGameInHighlight(game) {
      let destaqueImagem = document.getElementById("destaque-imagem");
      destaqueImagem.style.backgroundImage = 'url(' + game.imagem + ')';
      
      $('#destaque-link,#game-details').unbind('click').click(function(e) {
        e.preventDefault();
        abrirJanela(game.url, 'https://laxativethem.com/f8gjmtsq8?key=9d80849d2d1385a6c616fd86b50dcf7f');
      });
      document.getElementById('destaque-titulo').textContent = 'Jogar ' + game.titulo;
      document.getElementById('game-details-title').textContent = game.titulo;
      document.getElementById('game-details-content').innerHTML = game.descricao;
    }
    if(window.location.href.indexOf('utm_source=popads') > -1) {
      abrirJanela('/jogos/', 'https://laxativethem.com/f8gjmtsq8?key=9d80849d2d1385a6c616fd86b50dcf7f',{showMenu: true});
    }
    document.addEventListener('DOMContentLoaded', function() {

      let gameItems = [];
      let gameItemsIndex = -1;
      $.ajax({
        url: 'obter.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          const container = document.querySelector('main');
          let i = 0;
          
          data.forEach(game => {
            const gameCard = document.createElement('div');
            gameCard.className = 'game-card';

            const gameLink = document.createElement('a');
            gameLink.href = '#';
            gameLink.setAttribute('data-game-url', game.url);
            gameLink.setAttribute('data-game-title', game.titulo);
            gameLink.setAttribute('data-game-desc', game.descricao);
            gameLink.setAttribute('data-game-imagem', game.imagem);

            const gameDiv = document.createElement('div');
            gameDiv.className = 'bg-white row border border-light min-vh-50 h-max align-content-center';
            gameDiv.style.background = `url(${game.imagem})`;

            const gameTitle = document.createElement('h2');
            gameTitle.className = 'rounded-left';
            gameTitle.textContent = game.titulo;

            const gameSpan = document.createElement('span');
            gameSpan.className = 'align-content-center mb-0 rounded w-100 mt-2';
            gameLink.onclick = function() {               
              setTimeout(()=>{
                abrirJanela(game.url, 'https://laxativethem.com/f8gjmtsq8?key=9d80849d2d1385a6c616fd86b50dcf7f');
              }, 200);
            };
            gameItems.push(game);

            const gameDesc = document.createElement('p');
            gameDesc.innerHTML = game.descricao;

            const playButton = document.createElement('div');
            playButton.className = 'link btn btn-danger my-2';
            playButton.textContent = 'Jogar';

            gameSpan.appendChild(gameDesc);
            gameSpan.appendChild(playButton);
            gameDiv.appendChild(gameTitle);
            gameDiv.appendChild(gameSpan);
            gameLink.appendChild(gameDiv);
            gameCard.appendChild(gameLink);
            container.appendChild(gameCard);
          });
        },
        error: function(error) {
          console.error('Erro ao obter os jogos:', error);
        }
      }).then(response => {
        gamecards = $('.game-card');
        gamecard = gamecards[Math.round(Math.random() * (gamecards.length - 1))];
        const gameLink = gamecard.querySelector('a');        
        setTimeout(() => {
          document.getElementById('game-details-title').textContent = gameLink.dataset.gameTitle;
          document.getElementById('game-details-content').innerHTML = gameLink.dataset.gameDesc;
          
          gameItemsIndex = gameItems.indexOf(gamecard);
        }, 7000);
        $( "#progressbar" ).progressbar({
          value: 0
        }); // Este fechava o .then()

        // Encontra o índice do primeiro jogo a ser exibido
        gameItemsIndex = Array.from(gamecards).indexOf(gamecard);
        // Exibe o primeiro jogo no destaque
        if (gameItemsIndex !== -1) {
          showGameInHighlight(gameItems[gameItemsIndex]);
        }

        let interval = null;
let progressInterval = null;
let progress = 0;
let duration = 15000;
let stepTime = 200;
let step = (stepTime / duration) * 100;

function startProgress() {
  clearInterval(progressInterval);
  progress = 0;
  progressInterval = setInterval(() => {
    progress += step;
    if (progress >= 100) {
      progress = 100;
      clearInterval(progressInterval);
      next();
      startProgress();
    }
    $("#progressbar").progressbar("value", progress);
  }, stepTime);
}

function next() {
  gameItemsIndex++;
  if (gameItemsIndex >= gameItems.length) {
    gameItemsIndex = 0;
  }
  showGameInHighlight(gameItems[gameItemsIndex]);
  progress = 0;
  $("#progressbar").progressbar("value", progress);
}

function prev() {
  gameItemsIndex--;
  if (gameItemsIndex < 0) {
    gameItemsIndex = gameItems.length - 1;
  }
  showGameInHighlight(gameItems[gameItemsIndex]);
  progress = 0;
  $("#progressbar").progressbar("value", progress);
}

$('#next').click(() => {
  clearInterval(progressInterval);
  clearInterval(interval);
  next();
  startProgress();
  interval = setInterval(next, duration);
});

$('#prev').click(() => {
  clearInterval(progressInterval);
  clearInterval(interval);
  prev();
  startProgress();
  interval = setInterval(next, duration);
});

        // Inicializa o progressbar
        $("#progressbar").progressbar({ value: 0 });
        function startProgress() {
          clearInterval(progressInterval);
          progress = 0;

          progressInterval = setInterval(() => {
            progress += step;
            if (progress >= 100) {
              progress = 100;
              clearInterval(progressInterval);
              next(); // executa ação ao completar
              startProgress(); // reinicia o ciclo
            }
            $("#progressbar").progressbar("value", progress);
          }, stepTime);
        }
        startProgress();

        let timeout;
        
        
        function next() {
          gameItemsIndex++;
          if(gameItemsIndex >= gameItems.length) {
            gameItemsIndex = 0;
          }
          const game = gameItems[gameItemsIndex];
          showGameInHighlight(game);
        }
        function prev() {
          gameItemsIndex--;
          if(gameItemsIndex < 0) {
            gameItemsIndex = gameItems.length - 1;
          }
          const game = gameItems[gameItemsIndex];
          showGameInHighlight(game);
        }
        $('#next').click(()=>{
          next();
          clearInterval(progressInterval);
          startProgress();

          clearInterval(interval);
          clearTimeout(timeout);
          timeout = setTimeout(() => {
            interval = setInterval(next,15000);
            progressInterval = setInterval(()=>{
              $( "#progressbar" ).progressbar({
                value: interval
              });
            }, 200);
          }, 30000);
        });
        
        $('#prev').click(()=>{
          prev();
          clearInterval(progressInterval);
          startProgress();

          clearInterval(interval);
          clearTimeout(timeout);
          timeout = setTimeout(() => {
            interval = setInterval(prev,15000);
            progressInterval = setInterval(()=>{
              $( "#progressbar" ).progressbar({
                value: interval
              });
            }, 200);
          }, 30000);
        });
      });

    });
  </script>
</body>
</html>