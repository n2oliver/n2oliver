<?php

test('Aba Aplicativos deve ser aberta sem erros no console', function () {
    visit('http://localhost:8000/')
        ->click('Aplicativos')
        ->assertTitle('Portfólio & Aplicativos | n2oliver')
        ->assertNoJavaScriptErrors();
});