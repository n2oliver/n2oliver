<?php

test('Aba Jogos deve ser aberta sem erros no console', function () {
    visit('http://localhost:8000/aplicativos.php')
        ->assertTitle('Portfólio & Aplicativos — n2oliver')
        ->assertNoJavaScriptErrors();
});