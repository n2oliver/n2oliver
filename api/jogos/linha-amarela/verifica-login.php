<?php
function verificaLogin() {
    if (!isset($_SESSION['usuario_id']) && !isset($_SESSION['partida_rapida'])) {
        // Redireciona para a página de login
        return '/jogos/linha-amarela/';
    }
}