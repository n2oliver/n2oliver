<?php
echo json_encode(
    array(
        0 => (object) [
            'id' => 0,
            'url' => '/jogos/linhaamarela/',
            'titulo' => 'Linha Amarela',
            'descricao' => 'Divirta-se eliminando os invasores, antes que eles desçam e eliminem a terra!<br>',
            'resumo' => 'Um território, uma linha, um herói: você.',
            'imagem' => '/jogos/linhaamarela/img/fundo.png'
        ],
        1 => (object) [
            'id' => 1,
            'url' => '/jogos/combo-memo/',
            'titulo' => 'Combo-Memo',
            'descricao' => 'Um divertido jogo da memória com combinações!<br>',
            'resumo' => '',
            'imagem' => '/img/combo-memo.png'
        ],
        2 => (object) [
            'id' => 2,
            'url' => '/jogos/caca-palavras/',
            'titulo' => 'Caça-Palavras',
            'descricao' => 'Um clássico caça-palavras para testar sua atenção e vocabulário.',
            'resumo' => '',
            'imagem' => '/jogos/img/a.jpg'
        ],
        3 => (object) [
            'id' => 3,
            'url' => '/jogos/palavras-cruzadas/',
            'titulo' => 'Palavras Cruzadas',
            'descricao' => 'Desafie seu conhecimento com este quebra-cabeça de palavras.',
            'resumo' => '',
            'imagem' => '/jogos/img/flat-crosswords.png'
        ]
    )
);