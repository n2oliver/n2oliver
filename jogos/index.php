<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oliv3r Dev Jogos Online</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles-index.css">
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
      -webkit-text-stroke: 1px #000;
      font-size: 2rem;
      background-color: darkslategray;
    }
    header h1 {
      color: #fff !important;
    }
    header p {
        font-size: 1.4rem;
        color: #fff !important;
    }
    .container {
      margin: 2rem auto;
      display: grid;
      gap: 20px;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      background-color: transparent;
    }
    .game-card {
      background: white;
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: center;
    }
    .game-card h2 {
      margin: 0.5rem 0;
      font-family: 'Montserrat';
      -webkit-text-stroke: 1px #000;
      color: yellow
    }
    .game-card a {
      text-decoration: none;
      font-family: 'Montserrat';
    }
    .game-card .link {
      text-align: center;
    }
  </style>
</head>
<body>
  <header class="m-auto col-md-8">
    <h1>Oliv3r Dev Jogos</h1>
    <p>Lugar de diversão com jogos simples <br> e gratuitos<br>direto no navegador!</p>
  </header>

  <main class="container m-auto col-md-8">
    <div class="game-card">
      <h2>Combo-Memo</h2>
      <div class="d-flex justify-content-around pb-3">
        <img src="../img/combo-memo.png" class="col-md-6 p-0"/>
        <p class="align-content-center col-md-6">Um divertido jogo da memória com tempo e combos!</p>
      </div>
      <div class="link">
        <a href="/jogos/combo-memo" class="btn btn-danger">Jogar agora</a>
      </div>
    </div>

    <div class="game-card">
      <h2>Linha Amarela</h2>
      <div class="d-flex justify-content-around pb-3">
        <img src="../img/linhaamarela.jpg" class="col-md-6 p-0"/>
        <p class="align-content-center col-md-6">Ataques alienígenas chegaram à Terra! É hora de lutar e defender!</p>
    </div>
      <a href="#" class="btn btn-danger">Em breve...</a>
    </div>
    
    <!-- Adicione mais jogos aqui -->
  </main>
  <?php include("../noads-footer.php"); ?>
</body>
</html>