<?php

test('navbar deve conter os menus principais', function () {
    visit('http://localhost:8000')
        ->assertSeeIn('.nav-link', ' Notícias')
        ->assertSeeIn('.nav-link', ' Jogos')
        ->assertSeeIn('.nav-link', ' Aplicativos')
        ->assertSeeIn('.nav-link', ' Livros')
        ->assertSeeIn('.nav-link', ' Cursos')
        ->assertSeeIn('.nav-link', ' Desenvolvedor')
        ->assertSeeIn('.nav-link', ' Contato');
});