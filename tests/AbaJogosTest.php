<?php

test('Aba Jogos deve ser aberta sem erros no console', function () {
    visit('http://localhost:8000/')
        ->assertTitle('Jogos Online — n2oliver')
        ->assertNoJavaScriptErrors();
});