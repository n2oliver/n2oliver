<?php $APP_URL = '/jogos/palavras-cruzadas'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include('../../g-tags.php'); ?>
  <meta charset="UTF-8">
  <title>Palavras Cruzadas | n2oliver</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/n2.jpg"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>

  <style>
    body {
      font-family: 'Ubuntu', sans-serif;
      text-align: center;
      background-color: #e9ebee;
      padding: 2rem;
      background-image: url(../../img/web-design-technology-browsing-programming-concept.jpg);
      background-size: cover;
      backdrop-filter: brightness(.2);
    }
    .container {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.6);
    }
    h1 {
      color: #333;
    }
    p {
      color: #555;
      font-size: 1.1rem;
    }
    .btn {
      display: inline-block;
      padding: 12px 24px;
      margin-top: 1rem;
      background-color: #007bff;
      color: white;
      border-radius: 6px;
      text-decoration: none;
      font-size: 1.2rem;
      font-weight: bold;
    }
    .btn:hover {
        background-color: #0056b3;
    }
  </style>
  <link rel="stylesheet" href="/styles-index.css">
  <link rel="stylesheet" href="/css/footer.css">
  <link rel="stylesheet" href="/sobre-mim.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script type='text/javascript' src='//pl27371375.profitableratecpm.com/af/e7/3c/afe73c790e73cadb95ef255203cc5f61.js'></script>
  <script type="text/javascript" data-cfasync="false" src="/popads-monetization.js"></script>
</head>
<body style="backdrop-filter: brightness(.2)">
    <?php include('../../navbar.php'); ?>
    <script>
      const nav = document.querySelector('nav')
      nav.classList.add('col-md-8');
      nav.classList.add('m-auto');
      nav.classList.add('px-2');
      nav.style.fontSize = '12px';
    </script>
  <div class="container" style="margin: 0 auto; margin-top: 14px; margin-bottom: 14px;">
    <h1>Palavras Cruzadas</h1>
    <p>Preencha a grade com as palavras corretas usando as dicas.</p>
    <a href="<?= $APP_URL ?>/jogo.php" class="btn">Jogar Agora</a>
  </div>

  <div class="text-light mx-auto mt-3 col-md-8 text-center">
      Anúncios
  </div>
  <div class="container m-auto col-md-8 text-light">
      <script async="async" data-cfasync="false" src="//pl27079464.profitableratecpm.com/297c1c3c46604eb55408b6261c6dd5b3/invoke.js"></script>
      <div id="container-297c1c3c46604eb55408b6261c6dd5b3"></div>
  </div>
  <br>
  <?php include("../../footer.php"); ?>
    <script>
      const footer = document.querySelector('footer')
      footer.classList.add('col-md-8');
      footer.classList.add('m-auto');
      footer.classList.add('px-0');
    </script>
</body>
</html>