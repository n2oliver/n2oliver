<?php

test('navbar deve conter os menus principais', function () {
    $page = visit('http://localhost:8000');
    $page->assertSee(' Notícias')
        ->assertSee(' Jogos')
        ->assertSee(' Aplicativos')
        ->assertSee(' Livros')
        ->assertSee(' Cursos')
        ->assertSee(' Desenvolvedor')
        ->assertSee(' Contato');
});