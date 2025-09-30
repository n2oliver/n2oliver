<?php $APP_URL = '/jogos/palavras-cruzadas'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include('../../g-tags.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Palavras Cruzadas | n2oliver</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/n2.jpg"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= $APP_URL ?>/style.css">
    <link rel="stylesheet" href="/styles-index.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/sobre-mim.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script type="text/javascript" data-cfasync="false" src="/popads-monetization.js"></script>
</head>
<body>
<?php include("../../gtagmanager.php"); ?>
    <?php include('../../navbar.php'); ?>
    <header>
        <h1>Palavras Cruzadas</h1>
    </header>

    <main class="game-container notranslate" translate="no">
        <div id="crossword-grid" class="grid-container">
            <!-- A grade será gerada aqui via JS -->
        </div>
        <div class="clues-container">
            <div class="clues">
                <h2>Horizontais</h2>
                <ul id="clues-across"></ul>
            </div>
            <div class="clues">
                <h2>Verticais</h2>
                <ul id="clues-down"></ul>
            </div>
        </div>
    </main>
    <div class="actions-container">
        <button id="check-button">Verificar Respostas</button>
        <button id="restart-button">Novo Jogo</button>
    </div>
    <div id="message-container" class="message"></div>
    
    <?php include("../../footer.php"); ?>
    <script src="<?= $APP_URL ?>/script.js"></script>
</body>
</html>