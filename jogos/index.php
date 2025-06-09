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
      background-image: linear-gradient(0deg, darkslategray, #343a40);
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
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: center;
      background-image: linear-gradient(0deg, darkslategray, #343a40)
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
  <script type="text/javascript" src="https://cdn.diclotrans.com/sdk/v1/51575/0913fc70523dbd6c3077ec92d155957cc8ac57e6/lib.js"></script>
</head>
<body>
  <header class="m-auto col-md-8 text-center">
    <h1 style="font-size: 3rem">Oliv3r Dev Jogos</h1>
    <p class="m-auto" style="max-width: 60%">Lugar de diversão com jogos simples e gratuitos direto no navegador!</p>
  </header>

  <main class="container m-auto col-md-8">
    <div class="game-card">
      <h2>Combo-Memo</h2>
      <div class="d-flex justify-content-around mb-3 border border-light">
        <img src="../img/combo-memo.png" class="p-0" style="width: 50%"/>
        <span class="bg-white align-content-center p-3 rounded-0" onclick='window.location.href = "/jogos/combo-memo";'>
          <p class="text-dark">Um divertido jogo da memória com combinações!</p>
        </span>
      </div>
      <div class="link">
        <a href="/jogos/combo-memo" class="btn btn-danger">Jogar agora</a>
      </div>
    </div>

    <div class="game-card">
      <h2>Linha Amarela</h2> 
      <div class="d-flex justify-content-around mb-3 border border-light">
        <img src="../img/linhaamarela.jpg" class="p-0" style="width: 50%"/>
        <span class="bg-white align-content-center p-3 rounded-0" onclick='window.location.href = "#";'>
          <p class="text-dark">Ataques alienígenas chegaram à Terra! É hora de lutar e defender!<br><small>Lançamento: 27/jun</small></p>
        </span>
      </div>

      <div class="link">
        <a href="#" class="btn btn-danger">Em breve...</a>
      </div>
    </div>
    
    <!-- Adicione mais jogos aqui -->
  </main>
  <?php include("../noads-footer.php"); ?>
</body>
</html>