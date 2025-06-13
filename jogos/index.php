<?php $APP_URL = '/jogos'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oliv3r Dev Jogos Online</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/loja_virtual/img/logoOliverStore-live.jpg"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles-index.css">
    <link rel="stylesheet" href="../navbar.css">
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
      font-family: 'Montserrat';
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
      filter: drop-shadow(0 0 0.1rem rgb(0, 0, 0));
    }
    .container {
      margin: 2rem auto;
      display: grid;
      gap: 20px;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      background-color: transparent;
    }
    .game-card {
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: center;
      background-image: linear-gradient(0deg, darkslategray, #343a40);
      height: fit-content;
    }
    .game-card h2 {
      margin: 0.5rem 0;
      font-family: 'Montserrat';
      -webkit-text-stroke: 1px #000;
      color: darkcyan
    }
    .game-card a {
      text-decoration: none;
      font-family: 'Montserrat';
    }
    .game-card .link {
      text-align: center;
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
      <h2>Combo-Memo</h2>
      <div class="bg-white row mb-3 border border-light">
        <img src="../img/combo-memo.png" class="p-0 w-100"/>
        <span class="align-content-center p-3 rounded-0" onclick='window.location.href = "/jogos/combo-memo";'>
          <p class="text-dark">Um divertido jogo da memória com combinações!</p>
        </span>
      </div>
      <div class="link">
        <a href="<?= $APP_URL ?>/combo-memo" class="btn btn-danger">Jogar agora</a>
      </div>
    </div>

    <div class="game-card">
      <h2>Linha Amarela</h2> 
      <div class="bg-white row mb-3 border border-light">
        <img src="../img/linhaamarela.jpg" class="p-0 w-100"/>
        <span class="align-content-center p-3 rounded-0" onclick='window.location.href = "#";'>
          <p class="text-dark">Ataques alienígenas chegaram à Terra! É hora de lutar e defender!<br><small>Lançamento: 27/jun</small></p>
        </span>
      </div>

      <div class="link">
        <a href="#" class="btn btn-danger">Em breve...</a>
      </div>
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