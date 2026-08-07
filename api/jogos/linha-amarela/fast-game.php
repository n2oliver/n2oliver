<?php
    include('../../database/connectdb.php');
    $_SESSION['partida_rapida'] = true;
    header("Location: /jogos/linha-amarela/jogo/?partida_rapida=1");
    exit;
?>