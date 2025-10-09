<?php $APP_URL = '/jogos/caca-palavras'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include('../../g-tags.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Caça-Palavras | n2oliver</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/n2.jpg"/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= $APP_URL ?>/style.css">
  <link rel="stylesheet" href="/styles-index.css">
  <link rel="stylesheet" href="/css/footer.css">
  <link rel="stylesheet" href="/sobre-mim.css">
  
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
        #word-list {
            display: flex;
            justify-content: start;
            flex-wrap: wrap;
        }
        #word-list li {
            margin: 5px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body>
<?php include("../../gtagmanager.php"); ?>
    <?php include('../../navbar.php'); ?>
    <?php
        $nav = "nav";
        echo "<script>const $nav = document.querySelector('$nav');</script>";
    ?> 
    <header class="col-md-10">
        <h1>Caça-Palavras</h1>
        <p>Arraste para selecionar as palavras.</p>
    </header>

    <main class="game-container col-md-10 notranslate" translate="no">
        <div class="sidebar col-md-6">
            <h2>Palavras para Encontrar</h2>
            <ul id="word-list">
                <!-- A lista de palavras será inserida aqui -->
            </ul>
            <button id="restart-button">Recomeçar</button>
        </div>
        <div id="word-search-grid" class="grid-container col-md-6">
            <!-- As letras serão inseridas aqui via JavaScript -->
        </div>
    </main>

    <div id="message-container" class="message"></div>

    <?php include("../../footer.php"); ?>
    <?php
        $footer2 = "footer";
        echo "<script>const $footer2 = document.querySelector('$footer2'); $footer2.classList.add('container');</script>";
    ?>
    <script src="<?= $APP_URL ?>/script.js"></script>
</body>
</html>
