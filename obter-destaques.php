<?php
echo json_encode(
    array(
        0 => (object) [
            'id' => 1,
            'url' => '/aplicativos.php',
            'titulo' => 'Aplicativos',
            'descricao' => 'Conheça meu protifólio de aplicativos',
            'resumo' => '',
            'imagem' => '/img/n2.jpg'
        ],
        1 => (object) [
            'id' => 2,
            'url' => '/cursos/',
            'titulo' => 'Cursos',
            'descricao' => 'Aprenda de sem burocracia<br>',
            'resumo' => 'Queremos levar você ao próximo nível.',
            'imagem' => '/img/5920.jpg'
        ],
        2 => (object) [
            'id' => 3,
            'url' => '/livraria/',
            'titulo' => 'Livros',
            'descricao' => 'Aqui você encontra o livro ideal pra você<br>',
            'resumo' => '',
            'imagem' => '/img/c9a6afb2-7179-473b-8609-417a20e9b771.jpg'
        ],
        
    )
);