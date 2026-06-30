<?php
#include('/conversion.php');
$APP_URL = '/jogos';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <?php
  // Per-page SEO meta for jogos index
  $meta_title = 'Jogos Online | n2oliver';
  $meta_description = 'Jogos online gratuitos: Linha Amarela, Combo-Memo e outros títulos desenvolvidos por n2oliver.';
  $meta_image = 'jogos/img/logo.png';
  $canonical = (isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : 'https://n2oliver.com/jogos/');
  include('cabecalho.php');
  ?>
  <link rel="icon" type="image/png" sizes="32x32" href="img/n2-ico.jpg" />

  <link rel="stylesheet" href="css/jquery-ui/jquery-ui.min.css" />
  <link rel="stylesheet" href="styles-index.css" />
  <link rel="stylesheet" href="sobre-mim.css" />
  <link rel="preload" as="image" href="jogos/linhaamarela/img/fundo.png" />
  <link rel="preload" as="image" href="<?= $APP_URL ?>/img/logo.png" />
  <link rel="preload" as="image" href="img/combo-memo.png" />
  <link rel="preload" as="image" href="jogos/img/flat-crosswords.png" />
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0 !important;
      background: #343a40;
      overflow: auto;
      background-position: center;
      background-attachment: fixed;
      background-size: cover;
      backdrop-filter: brightness(0.5);
    }

    header {
      text-align: center;
      padding: .2rem;
      font-weight: 700;
      font-family: 'Ubuntu';
      font-size: 2rem;
      background-image: linear-gradient(0deg, black, gray);
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
      overflow: hidden;
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
      color: #000;
      text-align: center;
      height: fit-content;
      backdrop-filter: brightness(0.4);
    }

    #destaque-imagem .container {
      max-width: 100%;
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
      width: auto;
    }

    .adsbygoogle {
      min-width: 250px !important;
    }

    #ads>div>iframe,
    #atContainer-b5463c03cd36f2b207d3e311906ba716 {
      width: fit-content !important;
    }

    #game-details-content,
    #game-details-title {
      cursor: pointer
    }

    #thumbnail h2 {
      margin-bottom: 0;
    }
    #game-noticias {
      display: -webkit-box;
      overflow-x: auto;
      scrollbar-width: auto !important;
    }
    #game-noticias .card {
      color: white;
      width: 150px;
      height: fit-content;
      background-color: darkslategray;
    }
    
    #game-noticias .card .img {
      width: 100%;
      height: 150px;
      background-size: cover;
      background-repeat: no-repeat;
      background-color: black;
    }
    #lista, #destaques {
      display: -webkit-box;
      overflow-x: auto;
    }
  </style>
  <link rel="stylesheet" href="css/games.css" />
  <script defer
    data-site="e5e969e1-3c42-400f-ab17-83f62c295b9a"
    src="js/megapush/MegaPush.js">
  </script>
  <script src="gtag_dispatcher.js" async></script>
  <script src="js/jquery-ui/jquery-ui.min.js"></script>
  <script src="js/bootbox/bootbox.min.js"></script>

  <style>
    .raster {
      position: fixed;
      width: 50px;
      height: 50px;
      background-image: url(/img/icons8-cursor-50.png);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      z-index: 999999;
    }
  </style>
</head>

<body>
  <script src="js/anuncios.js"></script>
  <?php include("gtagmanager.php"); ?>

  <div class="mx-auto col-md-12 text-center mt-0">
    <?php include('navbar.php'); ?>
  </div>
  <header class="mx-auto col-md-12 text-center">
    <img alt="logo" src="<?= $APP_URL ?>/img/logo.png" style="height: 60px; width: auto;" />
    <p class="m-auto" style="max-width: 60%">Conecte-se ao seu próximo desafio.</p>
  </header>
  <main class="w-100 m-auto col-md-12 p-0">
    <section id="destaque-imagem" class="w-100 m-auto n2oliver-jogos d-flex flex-column justify-content-center"
      alt="">

      <div class="container m-auto p-0" style="background-color: rgba(0, 0, 0, .4);">
        <div id="game-details" class="flex-row px-0 col-md-10" style="display:flex;flex-wrap:wrap; justify-content: start; font-family: Ubuntu;
              color: white !important; ">
          <div class="w-100">
            <div id="thumbnail" class="rounded align-content-end border border-light"
              style="
                text-align: center; 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat; 
                background-image: url(img/joined-games.png);
                width: 100vw;
                height: 77vh">
                <div id="click-to-action" style="height: 70%;"></div>
              <h2 style="font-size:2rem; background: rgba(0, 0, 0, .8);"><strong><span id="game-details-title">n2oliver</span></strong>🎮</h2>
              <div class="d-flex justify-content-around" style="background: rgba(0, 0, 0, .8);">
                <div class="col-md-10 m-auto d-inline-flex">
                  <p id="game-details-content" class="p-2 flex-column" style="max-width:680px; margin:0 auto; color: white;line-height:1.5;">
                    Carregando...
                  <div class="text-center">
                    <button class="btn btn-lg btn-danger m-1 h-0 text-nowrap" id="play-button" style="height: fit-content;" aria-label="Aria Right">
                      Jogar
                    </button>
                  </div>
                  </p>
                  <button class="btn btn-lg btn-success m-1 h-0 rounded-circle" style="height: fit-content;" id="prev" aria-label="Aria Left">
                    <i class="fa-solid fa-arrow-left"></i>
                  </button>
                  <button class="btn btn-lg btn-success m-1 h-0 rounded-circle" id="next" style="height: fit-content;" aria-label="Aria Right">
                    <i class="fa-solid fa-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
            <div id="progressbar" role="progressbar" title="progressbar"></div>
            
          <div class="row">
            <div id="jogos-recentes" class="d-flex justify-content-center col-md-5">
              <div class="w-100" style="font-family: Ubuntu">
                <div class="d-flex w-100 justify-content-between" style="transform: translateY(175px); pointer-events: none">
                  <button class="btn btn-lg btn-success m-1 h-0 rounded-circle" style="height: fit-content; pointer-events: auto;" id="prev" aria-label="Aria Left"
                    onclick="scrollDivX('lista', -175);">
                    <i class="fa-solid fa-arrow-left"></i>
                  </button>
                  <button class="btn btn-lg btn-success m-1 h-0 rounded-circle" id="next" style="height: fit-content; pointer-events: auto;" aria-label="Aria Right"
                    onclick="scrollDivX('lista', 175);">
                    <i class="fa-solid fa-arrow-right"></i>
                  </button>
                </div>
                <strong><h2 class="my-0">Jogos recentes</h2></strong>
                <div id="lista" class="my-0 py-0">
                </div>
                <div class="m-auto p-0 mt-1 mx-0 d-flex justify-content-end"><a href="/jogos.php"><button class="btn btn-primary">Ver todos</button></a></div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="row m-auto text-light" style="font-family: Ubuntu">
                <div class="d-flex w-100 justify-content-between" style="transform: translateY(175px); pointer-events: none">
                  <button class="btn btn-lg btn-success m-1 h-0 rounded-circle" style="display: none; height: fit-content; pointer-events: auto;" id="prev" aria-label="Aria Left"
                    onclick="scrollDivX('destaques', -175);">
                    <i class="fa-solid fa-arrow-left"></i>
                  </button>
                  <button class="btn btn-lg btn-success m-1 h-0 rounded-circle" id="next" style="display: none; height: fit-content; pointer-events: auto;" aria-label="Aria Right"
                    onclick="scrollDivX('destaques', 175);">
                    <i class="fa-solid fa-arrow-right"></i>
                  </button>
                </div>
                <strong><h2 class="my-0">Você também pode gostar de</h2></strong>
              </div>
              
              <div id="destaques" class="my-0 py-0"></div>
            </div>
            <div id="donation-section-wrapper" class="col-md-12 m-auto p-0 mt-1 w-100">
              <div class="donation-section col-md-10 row m-auto">
                <div class="col-md-5">
                  <h3>Aceitamos doações</h3>
                  <p><i class="fas fa-donate"></i>&nbsp;Você pode contribuir nos ajudando a desenvolver novos projetos. Envie sua contribuição pelos seguintes canais!</p>
                  <p>
                    <small>
                      <strong>Chave PIX:</strong> <span class="notranslate" translate="no"> suporte@n2oliver.com</span><br>
                      <strong>Bitcoin (LN):</strong> <span class="notranslate" translate="no"> warybongo30@walletofsatoshi.com</span><br>
                    </small>
                  </p>
                </div>
                <div class="col-md-5">
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
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
  </main>
  
  <div class="d-flex justify-content-start row col-md-10 m-auto text-light mt-2" style="font-family: Ubuntu">
    
    <div class="d-flex w-100 justify-content-between" style="transform: translateY(175px); z-index: 2; pointer-events: none">
      <button class="btn btn-lg btn-success m-1 h-0 rounded-circle" style="height: fit-content; pointer-events: auto;" id="prev" aria-label="Aria Left"
        onclick="scrollDivX('game-noticias', -175);">
        <i class="fa-solid fa-arrow-left"></i>
      </button>
      <button class="btn btn-lg btn-success m-1 h-0 rounded-circle" id="next" style="height: fit-content; pointer-events: auto;" aria-label="Aria Right"
        onclick="scrollDivX('game-noticias', 175);">
        <i class="fa-solid fa-arrow-right"></i>
      </button>
    </div>
    <strong>
      <h2>Notícias</h2>
    </strong>
  </div>
  <div id="game-noticias" class="container m-auto py-0 mt-1 col-md-10">
  </div>
  <div class="container m-auto p-0 mt-1 col-md-10 d-flex justify-content-end">
    <a href="/noticias.php"><button class="btn btn-primary">Ver todas as notícias</button></a>
  </div>
  <div class="container m-auto col-md-10 p-0 mt-1">
    <?php include("footer.php"); ?>
  </div>
  <script>
    (function(){
      const serverResponse = $.post('buscar-noticias.php', { page: 1, offset: 0, limit: 15}, function(response){
        if(serverResponse.status == 200) {
          const data = JSON.parse(response);
          for(let item of data.results){
            $("#game-noticias").append($(`
            <div class="card" onclick="window.location.href = '/noticias.php?id=${item.id}'">
              <div class="img" style="background-image: url(${item.imagem})"></div>
              <strong>${item.titulo}</strong>
            </div>`))
          }
        }
      })
    })()
    function scroll(element) {
      element.scrollIntoView({
        behavior: "smooth",
        block: "start"
      })
    }
    function scrollDivX(id, offset) {
      const div = document.getElementById(id);
      let scrollLeft = div.scrollLeft;
      div.scroll({left: scrollLeft + offset, behavior: 'smooth'});
    }

    function showGameInHighlight(game) {
      let destaqueImagem = document.querySelector("body");
      let thumbnail = document.getElementById("thumbnail");
      let playButton = document.getElementById("play-button");
      destaqueImagem.style.backgroundImage = 'url(' + game.imagem + ')';
      thumbnail.style.backgroundImage = 'url(' + game.imagem + ')';

      $('#game-details-content,#game-details-title,#play-button,#click-to-action').unbind('click').click(function(e) {
        e.preventDefault();
        setTimeout(() => {
          window.location.href = game.url;
        }, 200);
      });


      document.getElementById('game-details-title').textContent = game.titulo;
      document.getElementById('game-details-content').innerHTML = game.descricao +
        `<div class="text-center" style="display: none;">
          <button class="btn btn-danger m-1 h-0" id="next" style="display: none; height: fit-content;" aria-label="Aria Right">
            <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>`;
    }
    document.addEventListener('DOMContentLoaded', function() {
      window.onclick = () => {
        window.onclick = () => {
          abrirSmartlinkUmaVez();
          window.onclick = null;
        }
      }
      let gameItems = [];
      let gameItemsIndex = -1;
      $.ajax({
        url: 'jogos/obter.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          const recentesContainer = document.getElementById('jogos-recentes').querySelector('#lista');

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

            const gameTitle = document.createElement('h2');
            gameTitle.className = 'rounded-left bg-dark my-0 py-1 rounded';
            gameTitle.textContent = game.titulo;
            gameDiv.appendChild(gameTitle);

            const gameSubDiv = document.createElement('div');
            gameDiv.className = 'row min-vh-50 h-100 align-content-center';
            gameSubDiv.style.height = '150px';
            gameSubDiv.className = 'bg-dark border border-light';
            gameSubDiv.style.background = `url(${game.imagem})`;
            gameSubDiv.style.backgroundSize = `cover`;
            gameDiv.appendChild(gameSubDiv);

            gameLink.onclick = function() {
              setTimeout(() => {
                window.location.href = game.url;
              }, 200);
            };
            gameItems.push(game);

            const gameDesc = document.createElement('p');
            gameDesc.innerHTML = game.descricao;

            const playButton = document.createElement('div');
            playButton.className = 'link btn my-2';
            playButton.textContent = 'Jogar';
            gameLink.appendChild(gameDiv);
            gameCard.appendChild(gameLink);
            recentesContainer.appendChild(gameCard);
          });
        },
        error: function(error) {
          console.error('Erro ao obter os jogos:', error);
        }
      }).then(response => {
        gamecards = $('.game-card');
        // Encontra o índice do primeiro jogo a ser exibido
        gamecard = gamecards[0];
        gameItemsIndex = -1;
        const gameLink = gamecard.querySelector('a');
        document.getElementById('game-details-title').textContent = gameLink.dataset.gameTitle;
        document.getElementById('game-details-content').innerHTML = gameLink.dataset.gameDesc;

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
        $('#next,#prev').show();

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
        (() => {
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
        })();
      });
      $.ajax({
        url: './obter-destaques.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          let destaqueItems = [];
          const container = document.getElementById('destaques');

          data.forEach(destaque => {
            const card = document.createElement('div');
            card.className = 'game-card';
            
            const destaqueLink = document.createElement('a');
            destaqueLink.href = '#';
            destaqueLink.setAttribute('data-game-url', destaque.url);
            destaqueLink.setAttribute('data-game-title', destaque.titulo);
            destaqueLink.setAttribute('data-game-desc', destaque.descricao);
            destaqueLink.setAttribute('data-game-imagem', destaque.imagem);

            const destaqueDiv = document.createElement('div');
            const destaqueSubDiv = document.createElement('div');

            destaqueDiv.className = 'row min-vh-50 h-100 align-content-center';
            destaqueSubDiv.style.height = '150px';
            destaqueSubDiv.className = 'bg-dark border border-light';
            destaqueSubDiv.style.background = `url(${destaque.imagem})`;
            destaqueSubDiv.style.backgroundSize = `cover`;

            const destaqueTitle = document.createElement('h2');
            destaqueTitle.className = 'rounded-left bg-dark my-0 py-1 rounded';
            destaqueTitle.textContent = destaque.titulo;

            destaqueLink.onclick = function() {
              setTimeout(() => {
                window.location.href = destaque.url;
              }, 200);
            };
            destaqueItems.push(destaque);

            const destaqueDesc = document.createElement('p');
            destaqueDesc.innerHTML = destaque.descricao;

            const playButton = document.createElement('div');
            playButton.className = 'link btn my-2';
            playButton.textContent = 'Acessar';

            destaqueDiv.appendChild(destaqueTitle);
            destaqueLink.appendChild(destaqueDiv);
            destaqueDiv.appendChild(destaqueSubDiv);
            card.appendChild(destaqueLink);
            container.appendChild(card);
          });
        },
        error: function(error) {
          console.error('Erro ao obter os destaques:', error);
        }
      })
    });
  </script>
</body>
  <!-- BEGIN AADS AD UNIT 2421579 -->

  <div style="position: sticky; z-index: 99999; bottom: 0px">
        <input autocomplete="off" type="checkbox" id="aadsstickympwuknsr" hidden />
        <div style="padding-top: 0; padding-bottom: auto;">
          <div style="width:100%;height:auto;position: sticky;text-align:center;font-size:0;bottom:0;left:0;right:0;margin:auto">
            <label for="aadsstickympwuknsr" style="top: 50%;transform: translateY(-50%);right:24px;; position: absolute;border-radius: 4px; background: rgba(248, 248, 249, 0.70); padding: 4px;z-index: 99999;cursor:pointer">
              <svg fill="#000000" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490 490">
                <polygon points="456.851,0 245,212.564 33.149,0 0.708,32.337 212.669,245.004 0.708,457.678 33.149,490 245,277.443 456.851,490 489.292,457.678 277.331,245.004 489.292,32.337 "/>
              </svg>
            </label>
            <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 99998;"><iframe data-aa=2421579 src=//acceptable.a-ads.com/2421579/?size=Adaptive style='border:0; padding:0; width:70%; height:auto; overflow:hidden; margin: auto'></iframe></div>
          </div>
          <style>
        #aadsstickympwuknsr:checked + div {
          display: none;
        }
      </style>
      </div></div>

  <!-- END AADS AD UNIT 2421579 -->
</html>