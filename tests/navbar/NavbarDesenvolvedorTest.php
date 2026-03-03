<?php

test('Aba Desenvolvedor deve ser aberta sem erros no console', function () {
    visit('http://localhost:8000/')
        ->click('Desenvolvedor')
        ->assertTitle('Dev | n2oliver')
        ->assertNoJavaScriptErrors();
});