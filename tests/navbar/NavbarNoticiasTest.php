<?php

test('Aba Notícias deve ser aberta sem erros no console', function () {
    visit('http://localhost:8000/noticias.php')
        ->click('Notícias')
        ->assertTitle('Notícias | n2oliver')
        ->assertNoJavaScriptErrors();
});