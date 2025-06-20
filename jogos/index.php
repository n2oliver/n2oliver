<?php $APP_URL = '/jogos'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>n2oliver Jogos Online</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/loja_virtual/img/logoOliverStore-live.jpg"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../styles-index.css"/>
    <link rel="stylesheet" href="../navbar.css"/>
    <link rel="stylesheet" href="sobre-mim.css"/>
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
  </style>
  <script type="text/javascript" src="https://cdn.diclotrans.com/sdk/v1/51575/0913fc70523dbd6c3077ec92d155957cc8ac57e6/lib.js"></script>
</head>
<body>
    <?php include('../navbar.php'); ?>
    <script>
      const nav = document.querySelector('nav')
      nav.classList.add('col-md-8');
      nav.classList.add('m-auto');
      nav.classList.add('px-0');
    </script>
  <header class="mx-auto mt-3 col-md-8 text-center">
    <img src="<?=$APP_URL?>/logo-frizzer-games.png" style="height: 100px; width: auto;"/>
    <p class="m-auto" style="max-width: 60%">Lugar de diversão com jogos simples e gratuitos direto no navegador!</p>
  </header>

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
      <a href="#">
      <div class="bg-white row mb-3 border border-light">
        <h2 class="rounded-left border border-warning border-right-0">Linha Amarela</h2> 
        <img src="../img/linhaamarela.jpg" class="p-0 w-50 border border-light"/>
        <span class="align-content-center px-3 pt-3 mb-0 rounded w-100 mt-2" onclick='window.location.href = "#";'>
          <p>Ataques alienígenas chegaram à Terra! É hora de lutar e defender!<br><small>Lançamento: 27/jun</small></p>
          <div class="link btn btn-danger my-2">
            Em breve...
          </div>
        </span>
      </div>
      </a>
    </div>
    
    <!-- Adicione mais jogos aqui -->
  </main>
  <?php include("../footer.php"); ?>
    <script>
      const footer = document.querySelector('footer')
      footer.classList.add('col-md-8');
      footer.classList.add('m-auto');
      footer.classList.add('px-0');
    </script>
</body>
</html>