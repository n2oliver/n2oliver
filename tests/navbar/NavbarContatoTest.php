<?php

test('Aba Contato deve ser aberta sem erros no console', function () {
    visit('http://localhost:8000/')
        ->click('Contato')
        ->assertTitle('Contato | n2oliver')
        ->assertNoJavaScriptErrors();
});