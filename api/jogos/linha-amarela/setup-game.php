<?php
session_start();
require('../../database/connectdb.php');
if (isset($_GET['partida_rapida']) && $_GET['partida_rapida'] == '1') {
    $_SESSION['partida_rapida'] = true;
}
require('./verifica-login.php');
require('./repositories/PontoRepository.php');

http_response_code(200);
echo verificaLogin();
session_abort();