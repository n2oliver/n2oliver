<?php

test('Aba Cursos deve ser aberta sem erros no console', function () {
    visit('http://localhost:8000/')
        ->click('Cursos')
        ->assertTitle('Oliv3r Store | n2oliver')
        ->assertNoJavaScriptErrors();
});