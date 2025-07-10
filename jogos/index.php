<?php $APP_URL = '/jogos'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include('../g-tags.php'); ?>
  <?php include('../richads.php'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogos Online | n2oliver</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/n2.jpg"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../styles-index.css"/>
    <link rel="stylesheet" href="../sobre-mim.css"/>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8124594027670911"
     crossorigin="anonymous"></script>
     <meta name="google-adsense-account" content="ca-pub-8124594027670911">
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background: #f0f0f0;
      background-image: url(../jogos/img/quebracabecas.jpg);
    }
    header {
      text-align: center;
      padding: 2rem;
      font-weight: 700;
      font-family: 'Ubuntu';
      font-size: 2rem;
      background-image: linear-gradient(0deg, darkslategray, slategray, white);
      border-radius: 15px;
      height: 200px;
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
      margin: 2rem auto;
      display: grid;
      gap: 20px;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      background-color: transparent;
    }
    .game-card {
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: center;
      height: fit-content;
    }
    .game-card h2 {
      margin: 0.5rem 0;
      font-family: 'Ubuntu';
      -webkit-text-stroke: 1px #000;
      color: yellow;
      width: 50%;
      text-shadow: 3px 3px 3px darkslategray;
      background-image: linear-gradient(#fff, #ddd, #fff)
    }
    .game-card a {
      text-decoration: none;
      font-family: 'Ubuntu';
    }
    .game-card .link {
      text-align: center;
    }
    .game-card > a > div {
      padding: 10px;
      background-image: radial-gradient(white, darkslategray);
      align-items: end;
    }
    .game-card > a > div > span {
      background-image: radial-gradient(slategray, darkslategray);
      background-position: top;
      color: white;
      font-weight: bold;
      border: solid 1px white;
    }
    .intr-in {
      top: 60px!important;
    }
    .bootbox.modal {
      z-index: 9999;
    }
    .modal-body {
      text-align: center;
    }
  </style>
</head>
<body>
<!-- jQuery (sempre primeiro) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


  <!-- Bootstrap Bundle (JS + Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootbox 6 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js"></script>

    <?php include('../navbar.php'); ?>
    <script>
      const nav = document.querySelector('nav')
      nav.classList.add('col-md-8');
      nav.classList.add('m-auto');
      nav.classList.add('px-0');
    </script>
  <header class="mx-auto mt-3 col-md-8 text-center">
    <img src="<?=$APP_URL?>/img/logo.png" style="height: 100px; width: auto;"/>
    <p class="m-auto" style="max-width: 60%">Lugar de diversão com jogos simples e gratuitos direto no navegador!</p>
  </header>
  <div class="container m-auto p-1 col-md-8 bg-success-subtle shadow">
    <p><br>Se deseja contribuir com nossa plataforma, <a class="text-success bg-light rounded shadow p-1" id="contribuir" href="#" style="white-space: nowrap">clique aqui <i class="fa-solid fa-money-bill-wave"></i></a>!</p>
  </div>
  <main class="container m-auto col-md-8">
    <div class="game-card">
      <a href="<?= $APP_URL ?>/combo-memo">
        <div class="bg-white row mb-3 border border-light">
          <h2 class="rounded-left border border-warning border-right-0">Combo-Memo</h2>
          <img src="../img/combo-memo.png" class="p-0 w-50 border border-light"/>
          <span class="align-content-center px-3 pt-3 mb-0 rounded w-100 mt-2" onclick='window.location.href = "/jogos/combo-memo";'>
            <p>Um divertido jogo da memória com combinações!</p>
            <div class="link btn btn-danger my-2">Jogar
            </div>
          </span>
        </div>
      </a>
    </div>
    <div class="game-card">
      <a href="<?= $APP_URL ?>/linhaamarela">
      <div class="bg-white row mb-3 border border-light">
        <h2 class="rounded-left border border-warning border-right-0">Linha Amarela</h2> 
        <img src="../img/linhaamarela.jpg" class="p-0 w-50 border border-light"/>
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

    
    <!-- Adicione mais jogos aqui -->
  </main>

  <div class="container m-auto col-md-8">
    <div class="game-card">
      <div class="bg-white row mb-3 border border-light">
        <script async="async" data-cfasync="false" src="//pl27079464.profitableratecpm.com/297c1c3c46604eb55408b6261c6dd5b3/invoke.js"></script>
        <div id="container-297c1c3c46604eb55408b6261c6dd5b3"></div>
      </div>
    </div>
  </div>
  <?php include("../footer.php"); ?>
    <script>
      const footer = document.querySelector('footer')
      footer.classList.add('col-md-8');
      footer.classList.add('m-auto');
      footer.classList.add('px-0');
    </script>

    <!-- <a href="https://11745.xml.4armn.com/direct-link?pubid=978902&siteid=366028" target="_blank" rel="noopener noreferrer" style="display: none;" id="hidden-link-richads">.</a>
    <a href="https://diclotrans.com/redirect?id=52297&auth=c9f9eeacaee3c632d5c482193f6449149c04e73b" target="_blank" rel="noopener noreferrer" style="display: none;" id="hidden-link-adport">.</a>
    <a href="https://otieu.com/4/9386875" target="_blank" rel="noopener noreferrer" style="display: none;" id="hidden-link-monetag">.</a>
    <a href="https://www.profitableratecpm.com/gi0n4mh5a?key=3e3ee1063d73d79e7ad7093df4d2a530" target="_blank" rel="noopener noreferrer" style="display: none;" id="hidden-link-adsterra">.</a> -->
    <script>
      window.addEventListener('DOMContentLoaded', ()=>{
        /* bootbox.confirm({
          title: '<img width="100px" src="<?= $APP_URL ?>/img/logo.png"/><br>Aviso de anúncio!',
          buttons: {
            confirm: {
                label: 'Sim',
                className: 'btn-success'
            },
            cancel: {
                label: 'Não',
                className: 'btn-danger'
            }
          },
          message: 'Permite exibirmos anúncios de patrocínio?',
          callback: function (result){
            if(result) {
              // document.getElementById('hidden-link-richads').click();
              // document.getElementById('hidden-link-adport').click();
              document.getElementById('hidden-link-monetag').click();
              document.getElementById('hidden-link-adsterra').click();
            }
          }
        }); */
        $('#contribuir').click(()=>{
          bootbox.alert({
            title: 'Contribua!',
            message: 'Escaneie a chave-pix abaixo com seu celular ou envie BTC para o endereço abaixo:' +
              '<img class="w-100" id="qr-code" src="<?= $APP_URL ?>/linhaamarela/img/qrcode-pix.png"/><br>' +
              'Chave-pix: silva.liver@gmail.com<br>' +
              'BTC (segwit): bc1q69y8wuwm0xxwdtnuxttddha9nj460l6tc52vjn'
          })
        })
      });
    </script>
</body>
</html>