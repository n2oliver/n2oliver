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

    .success {
      background: linear-gradient(135deg, #54a554, #77f554);
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

    #lista {
      display: flex;
      width: 100vw;
      max-width: 100%;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
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

      <div class="container m-auto" style="background-color: rgba(0, 0, 0, .4);">
        <div id="jogos-recentes" class="d-flex justify-content-center">
          <div class="justify-content-start col-md-10 m-auto text-light mt-2" style="font-family: Ubuntu">
            <strong>
              <h2 class="my-0">Todos Os Jogos</h2>
            </strong>
            <div id="lista" class="d-flex my-0 py-0">
            </div>
            <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 1;">
              <!-- BEGIN AADS AD UNIT 2410752 -->

                <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 99998;">
                  <iframe data-aa='2410752' src='//acceptable.a-ads.com/2410752/?size=Adaptive'
                    style='border:0; padding:0; width:70%; height:auto; overflow:hidden;display: block;margin: auto'></iframe>
                </div>

              <!-- END AADS AD UNIT 2410752 -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <div class="container m-auto col-md-10 p-0 mt-1">
    <?php include("footer.php"); ?>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
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
            const gameSubDiv = document.createElement('div');

            gameDiv.className = 'row min-vh-50 h-100 align-content-center';
            gameSubDiv.style.height = '150px';
            gameSubDiv.className = 'bg-dark border border-light';
            gameSubDiv.style.background = `url(${game.imagem})`;
            gameSubDiv.style.backgroundSize = `cover`;
            gameDiv.appendChild(gameSubDiv);

            const gameTitle = document.createElement('h2');
            gameTitle.className = 'rounded-left bg-dark my-0 py-1 rounded';
            gameTitle.textContent = game.titulo;

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
            gameDiv.appendChild(gameTitle);
            gameLink.appendChild(gameDiv);
            gameCard.appendChild(gameLink);
            recentesContainer.appendChild(gameCard);
          });
        },
        error: function(error) {
          console.error('Erro ao obter os jogos:', error);
        }
      })
    });
  </script>
</body>
</html>