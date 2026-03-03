<?php

test('Aba Livros deve ser aberta sem erros no console', function () {
    visit('http://localhost:8000/livraria/index.php')
        ->assertTitle('Oliv3r Store | n2oliver')
        ->assertNoJavaScriptErrors();
});