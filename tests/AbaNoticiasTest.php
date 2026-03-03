<?php

test('Aba Notícias deve ser aberta sem erros no console', function () {
    visit('http://localhost:8000/noticias.php')
        ->assertTitle('Notícias — n2oliver')
        ->assertNoJavaScriptErrors();
});