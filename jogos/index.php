<?php 
#include('/conversion.php');
$APP_URL = '/jogos'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include('../g-tags.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='admaven-placement' content=Bqja8pjw8>
  <meta name="pushsdk" content="322d99f94878aedd7de1ac412ba0561c">
  <meta name="af75eac4081069fbc72900cc9a43e129aefae092" content="af75eac4081069fbc72900cc9a43e129aefae092" />

  <title>Jogos Online | n2oliver</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/n2.jpg"/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../styles-index.css"/>
    <link rel="stylesheet" href="../sobre-mim.css"/>
    <link rel="preload" as="image" href="/jogos/linhaamarela/img/fundo.png" />
    <link rel="preload" as="image" href="<?=$APP_URL?>/img/logo.png" />
    <link rel="preload" as="image" href="../img/combo-memo.png" />
    <link rel="preload" as="image" href="/jogos/img/flat-crosswords.png" />
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
      background-color: rgba(207,226,255, .4);
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
  </style>
  <script defer
        data-site="e5e969e1-3c42-400f-ab17-83f62c295b9a"
        src="https://cdn.megapush.com.br/MegaPush.js">
    </script>
  <script src="/gtag_dispatcher.js"></script>
  <script type="text/javascript" data-cfasync="false" src="/js/abrir-janela.js"></script>
  <!-- Hotjar Tracking Code for n2oliver.com -->
  <script>
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:6543030,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>
</head>
<body>
<?php include("../gtagmanager.php"); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


  <!-- Bootstrap Bundle (JS + Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootbox@5.5.2/bootbox.min.js"></script>
  <div class="col-md-8 m-auto" style="position: sticky; top: 0">
    <?php include('../navbar.php'); ?>
  </div>
  <script>
    const nav = document.querySelector('nav')
    nav.classList.add('col-md-8');
    nav.classList.add('m-auto');
    nav.classList.add('px-0');
  </script>
    
  <header class="mx-auto col-md-8 text-center mt-1">
    <img alt="logo" src="<?=$APP_URL?>/img/logo.png" style="height: 60px; width: auto;"/>
    <p class="m-auto" style="max-width: 60%">Conecte-se ao seu próximo desafio.</p>
  </header>
  
  <div id="welcomeModal" class="alert alert-primary p-1 mx-auto col-md-8 mt-1 mb-0"
        role="region" aria-label="Boas-vindas"
        style="box-shadow:0 2px 6px rgba(255,255,255,.08);">
        <section class="container m-auto n2oliver-jogos d-flex flex-column justify-content-center bg-light" style="padding:32px 16px;color:#000;text-align:center; background-image: linear-gradient(45deg, #dedede, rgba(0,0,0, .3))">
          <div class="row">
            <div class="col-6" style="font-family: Ubuntu">
              <h2 style="font-size:2rem;margin-bottom:12px;"><strong><span style="">SEM LIMITES</strong>🎮</h2>
              <p style="max-width:680px;margin:0 auto 18px;color:#000;line-height:1.5;">
                No <strong>n2oliver</strong> você encontra jogos criados para desafiar sua mente, competir com amigos e se divertir a qualquer hora. Explore modos rápidos, partidas competitivas e novidades toda semana.
              </p>
            </div>
            <div class="col-6 border border-dark bg-secondary" style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center; background-image: url(/jogos/combo-memo/components/platform/wood.jpg); background-size: cover;">
              <img id="destaque-imagem" src="#" style="height: 240px; padding-right:4px; width: auto"/>
              <a id="destaque-link" href="#" style="height: fit-content; align-self: center; padding:12px 18px;border-radius:10px;background:deeppink;border:1px solid rgba(255,255,255,0.2);color:#dbeafc;font-weight:600;text-decoration:none;"><span id="destaque-titulo"></span></a>
            </div>
          </div>
        </section>
        <div class="d-flex flex-wrap align-items-start justify-content-center">
          <div class="flex-grow-1 text-start">
            <div class="row">
              <div class="col m-2 text-center">
                <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 99998;">
                  <iframe data-aa='2412101' src='//acceptable.a-ads.com/2412101/?size=Adaptive'
                                    style='border:0; padding:0; width:70%; height:auto; overflow:hidden;display: block;margin: auto'></iframe>
                </div>
              </div>
            </div>
          </div>
        
          <button type="button" class="btn-close btn bg-white" aria-label="Fechar"
              onclick="document.getElementById('welcomeModal')?.remove()"></button>
      </div>
  </div>
  <main class="container d-flex m-auto col-md-8 mt-1" style="background-image: linear-gradient(45deg, #dedede, rgba(0,0,0, .3))">
  </main>
  <div class="container m-auto col-md-8 p-0 mt-1">
    <div class="donation-section m-0">
      <h3>Gostou dos jogos?</h3>
      <p>Seu apoio ajuda a manter o site no ar e a desenvolver novos projetos. Considere fazer uma doação para nos ajudar a continuar criando conteúdo gratuito e divertido para todos!</p>
      <p><strong>Chave PIX:</strong> silva.liver@gmail.com</p>
    </div>
  </div>
  <?php include("../footer.php"); ?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      
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
                abrirJanela(game.url, 'https://playedsophomore.com/gi0n4mh5a?key=3e3ee1063d73d79e7ad7093df4d2a530');
              }, 200);
            };

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
        document.getElementById('destaque-imagem').src = gameLink.dataset.gameImagem;
        document.getElementById('destaque-link').onclick = function() {               
          abrirJanela(gameLink.dataset.gameUrl, 'https://playedsophomore.com/gi0n4mh5a?key=3e3ee1063d73d79e7ad7093df4d2a530');
        };
        document.getElementById('destaque-titulo').textContent = gameLink.dataset.gameTitle;
        document.getElementById('destaque-link').setAttribute('aria-label', `Conhecer ${gameLink.dataset.gameTitle}`);
        
        if(window.location.href.indexOf('utm_source=popads')>-1) {
          abrirJanela('https://playedsophomore.com/gi0n4mh5a?key=3e3ee1063d73d79e7ad7093df4d2a530');
        }
      });
    });
  </script>
</body>
  <?php include("../aads.php"); ?>
</html>