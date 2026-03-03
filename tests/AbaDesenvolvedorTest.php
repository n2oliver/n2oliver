<?php

test('Aba Desenvolvedor deve ser aberta sem erros no console', function () {
    visit('http://localhost:8000/dev.php')
        ->assertTitle('Dev | n2oliver')
        ->assertNoJavaScriptErrors();
});