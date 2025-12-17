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
    file_put_contents(__DIR__ . '/impressões_validas.log', date('Y-m-d H:i:s') . " | {$impressionid} | HTTP {$status}\n", FILE_APPEND);
  } else {
    // (opcional) registrar falhas
    file_put_contents(__DIR__ . '/falhas.log', date('Y-m-d H:i:s') . " | {$impressionid} | HTTP {$status}\n", FILE_APPEND);
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
  <link rel="icon" type="image/png" sizes="32x32" href="/img/n2-ico.jpg" />

  <link rel="stylesheet" href="/css/jquery-ui/jquery-ui.min.css" />
  <link rel="stylesheet" href="../styles-index.css" />
  <link rel="stylesheet" href="../sobre-mim.css" />
  <link rel="preload" as="image" href="/jogos/linhaamarela/img/fundo.png" />
  <link rel="preload" as="image" href="<?= $APP_URL ?>/img/logo.png" />
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
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
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
      background-color: #E70D65;
      font-weight: 700;
      color: #FFFFFF
    }

    .game-card .link:hover,
    #destaque-link:hover {
      background-color: #F11E52;
    }

    .game-card a div {
      padding: 10px;
      align-items: end;
      height: auto;
      background-position: center !important;
      margin: 4px;
    }

    .game-card a div:hover,
    #destaque-link:hover {
      filter: brightness(1.5);
    }

    .game-card a div span {
      background-color: rgba(0.0, 0, 0, 0.5);
      background-position: top;
      color: white;
      font-weight: bold;
    }

    .intr-in {
      top: 60px !important;
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
      background: linear-gradient(135deg, #54a554, #77f554);
    }

    .welcome-text-box {
      background: white;
      padding: 1rem;
      border-radius: 14px;
    }

    #adsterra-banner>div {
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
      padding: 32px 16px;
      color: #000;
      text-align: center;
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

    #destaque-link {
      height: fit-content;
      align-self: center;
      padding: 12px 18px;
      border-radius: 10px;
      background: #9E0040;
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #FFFFFF;
      font-weight: 600;
      text-decoration: none;
    }

    .adsbygoogle {
      min-width: 250px !important;
    }
  </style>
  <script defer
    data-site="e5e969e1-3c42-400f-ab17-83f62c295b9a"
    src="/js/megapush/MegaPush.js">
  </script>
  <!--<script data-cfasync="false" src="/popads-monetization.js"  defer></script>-->
  <script src="/gtag_dispatcher.js" async></script>
  <script type="text/javascript" data-cfasync="false" src="/js/abrir-janela.js"></script>
  <script src="/js/jquery-ui/jquery-ui.min.js" async></script>
</head>

<body>
  <script async src="https://appsha-pnd.ctengine.io/js/script.js?wkey=97NjKiTr7b"></script>
  <?php include("../gtagmanager.php"); ?>

  <div class="col-md-10 m-auto" style="position: sticky; top: 0; z-index: 999;">
    <?php include('../navbar.php'); ?>
    <div style="position: absolute; z-index: 99999">
      <input autocomplete="off" type="checkbox" id="aadsstickymiu7jvco" hidden />
      <div style="padding-top: 0; padding-bottom: 0;">
        <div style="width:15%;height: 100vh;position:fixed;text-align:center;font-size:0;top:0px;right:0;min-width:100px">
          <label for="aadsstickymiu7jvco" style="bottom: 24px;margin:0 auto;right:0;left:0;max-width:24px; position: absolute;border-radius: 4px; background: rgba(248, 248, 249, 0.70); padding: 4px;z-index: 99999;cursor:pointer">
            <svg fill="#000000" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490 490">
              <polygon points="456.851,0 245,212.564 33.149,0 0.708,32.337 212.669,245.004 0.708,457.678 33.149,490 245,277.443 456.851,490 489.292,457.678 277.331,245.004 489.292,32.337 " />
            </svg>
          </label>
          <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 99998;height:100%; display: flex;flex-direction: column; justify-content: center">
            <iframe title="aads-2417696" data-aa=2417696 src=//acceptable.a-ads.com/2417696/?size=Adaptive style='border:0; padding:0; width:70%; height:70%; overflow:hidden; margin: 0 auto'></iframe>
          </div>
        </div>
        <style>
          #aadsstickymiu7jvco:checked+div {
            display: none;
          }
        </style>
      </div>
    </div>
  </div>

  <header class="mx-auto col-md-10 text-center mt-1">
    <img alt="logo" src="<?= $APP_URL ?>/img/logo.png" style="height: 60px; width: auto;" />
    <p class="m-auto" style="max-width: 60%">Conecte-se ao seu próximo desafio.</p>
  </header>

  <div id="aviso" style="display: none;" class="alert alert-warning bg-light mx-auto col-8 mt-1 rounded p-3" role="alert">
    <h5 class="h5"><span class="text-danger"><i class="fa fa-exclamation-triangle"></i></span> Este site contém anúncios</h5>
    <p class="h6">Para uma melhor experiência, você precisa <strong>permitir</strong> pop-ups e
      redirecionamentos nas configurações do site
      (geralmente na barra de endereço). <strong>Clique em <span class="text-danger">OK</span></strong> antes que o tempo para o <strong><span class="text-danger">redirecionamento</span></strong> acabe: <b id='tempo'>15</b></p>
    <div class="form-group">
      <button id="cancelar" class="btn btn-secondary">Cancelar</button>
      <button id="ok" class="btn btn-primary">OK</button>
    </div>
  </div>
  <main class="container d-flex m-auto col-md-10 mt-1" style="background-image: linear-gradient(45deg, #dedede, rgba(0,0,0, .3))">

    <section id="destaque-imagem" class="w-100 m-auto n2oliver-jogos d-flex flex-column justify-content-center bg-light"
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
              <div><a id="destaque-link" href="#" style="display: none">
                  <span id="destaque-titulo"></span></a>
              </div>
            </div>
            <div>
              <button class="btn btn-danger m-1" style="display: none" id="prev" aria-label="Aria Left">
                <i class="fa-solid fa-arrow-left"></i>
              </button>
              <button class="btn btn-danger m-1" id="next" style="display: none" aria-label="Aria Right">
                <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
            <div>
            </div>

            <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 1;">
              <iframe title="aads-2410752" data-aa='2410752' src='//acceptable.a-ads.com/2410752/?size=Adaptive'
                style='border:0; padding:0; width:70%; height:auto; overflow:hidden;display: block;margin: auto'></iframe>
            </div>

    </section>


    <div id="progressbar" role="progressbar" title="progressbar"></div>
  </main>
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

          <strong>Global Account:</strong>
          <span class="notranslate" translate="no">
            <p><small><b>OLIVER SILVA CASTILHO</b></small></p>
            <ul class="text-start" style="list-style-type: none; padding-left: 0;">
              <li><small>Account number: 889213783-6</small></li>
              <li><small>ACH Routing number: 026073150</small></li>
              <li><small>WIRE Transfer Routing Number: 026073008</small></li>
              <li><small>Bank name: Community Federal Savings Bank</small></li>
              <li><small>Bank Address: 5 Penn Plaza, New York, NY 10001</small></li>
            </ul>

          </span><br>

        </p>
      </div>
      <div class="container col-md-12 m-auto p-0 mt-1">
        <a href="https://www.popads.net/users/refer/3587213"><img src="https://banners.popads.net/250x250.gif" alt="PopAds.net - The Best Popunder Adnetwork" /></a>
        <a href="https://aads.com/advertise/?partner=2414063"><img src="https://aads.com/a_ads_banners/gif/english/320x50/simple_v1.gif" alt="Advertise with Anonymous Ads" width="320px" height="50px" /></a>
      </div>
    </div>
  </div>
  <div class="container m-auto col-md-10 p-0 mt-1">
    <?php include("../footer.php"); ?>
  </div>
  <script src="/js/anuncios.js"></script>
  <script>
    function showGameInHighlight(game) {
      let destaqueImagem = document.getElementById("destaque-imagem");
      destaqueImagem.style.backgroundImage = 'url(' + game.imagem + ')';

      $('#destaque-link,#game-details').unbind('click').click(function(e) {
        e.preventDefault();
        window.open('https://directads.adclickppc.com/dl/?16925b62-e818-4353-8bb6-0fe491d50746', '_blank');
        
        setTimeout(()=>{          
          gtag("event", "close_convert_lead", {
            currency: "USD",
            value: 0.0004
          });
          abrirJanela(game.url, 'https://laxativethem.com/ffga4c7z4?key=9b0193dfd0a136a88071da78968c41eb');
        }, 200);
      });


      document.getElementById('destaque-titulo').textContent = 'Jogar ' + game.titulo;
      document.getElementById('game-details-title').textContent = game.titulo;
      document.getElementById('game-details-content').innerHTML = game.descricao;


    }
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(() => {
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
                window.open('https://directads.adclickppc.com/dl/?16925b62-e818-4353-8bb6-0fe491d50746', '_blank');
                setTimeout(() => {
                  gtag("event", "close_convert_lead", {
                    currency: "USD",
                    value: 0.0004
                  });
                  abrirJanela(game.url, 'https://laxativethem.com/ffga4c7z4?key=9b0193dfd0a136a88071da78968c41eb');
                }, 200);
              };
              gameItems.push(game);

              const gameDesc = document.createElement('p');
              gameDesc.innerHTML = game.descricao;

              const playButton = document.createElement('div');
              playButton.className = 'link btn my-2';
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
          if ($("#progressbar").progressbar) {
            $("#progressbar").progressbar({
              value: 0
            }); // Este fechava o .then()
          }

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
          $('#next,#prev,#destaque-link').show();

          if ($("#progressbar").progressbar) {
            // Inicializa o progressbar
            $("#progressbar").progressbar({
              value: 0
            });
          }

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

          if ($("#progressbar").progressbar) {
            startProgress();
          }
          let timeout;


          function next() {
            gameItemsIndex++;
            if (gameItemsIndex >= gameItems.length) {
              gameItemsIndex = 0;
            }
            const game = gameItems[gameItemsIndex];
            showGameInHighlight(game);
          }

          function prev() {
            gameItemsIndex--;
            if (gameItemsIndex < 0) {
              gameItemsIndex = gameItems.length - 1;
            }
            const game = gameItems[gameItemsIndex];
            showGameInHighlight(game);
          }
          $('#next').click(() => {
            next();
            clearInterval(progressInterval);
            startProgress();

            clearInterval(interval);
            clearTimeout(timeout);
            timeout = setTimeout(() => {
              interval = setInterval(next, 15000);
              progressInterval = setInterval(() => {
                $("#progressbar").progressbar({
                  value: interval
                });
              }, 200);
            }, 30000);
          });

          $('#prev').click(() => {
            prev();
            clearInterval(progressInterval);
            startProgress();

            clearInterval(interval);
            clearTimeout(timeout);
            timeout = setTimeout(() => {
              interval = setInterval(prev, 15000);
              progressInterval = setInterval(() => {
                $("#progressbar").progressbar({
                  value: interval
                });
              }, 200);
            }, 30000);
          });
        });

      }, 1000)
    });
  </script>
</body>

</html>