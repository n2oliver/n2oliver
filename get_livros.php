<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Lucro no Instagram", 
        "affiliate_link" => "https://go.hotmart.com/F93196255C?dp=1", 
        "image_url" => "img\\livros\\INSTAGRAM2.jpg",
        "hightlight" => true
    ),
    array(
        "id" => 2, 
        "name" => "Sobre Autoestima e Amor Próprio", 
        "affiliate_link" => "https://go.hotmart.com/S93197534H", 
        "image_url" => "img\\livros\\SOBREAUTOESTIMA.png"
    ),
    array(
        "id" => 3, 
        "name" => "Delícias Caseiras - Receitas de Bolos", 
        "affiliate_link" => "https://go.hotmart.com/W93185488B", 
        "image_url" => "img\\livros\\capareceitadebolos.jpg"
    ),
    array(
        "id" => 4, 
        "name" => "120 Curiosidades Bíblicas", 
        "affiliate_link" => "https://go.hotmart.com/H93122326F?dp=1", 
        "image_url" => "img\\livros\\120curiosidades-biblicas.jpg"
    ),
    array(
        "id" => 5, 
        "name" => "Ano Novo, Contas em Dia", 
        "affiliate_link" => "https://go.hotmart.com/N89476028F?dp=1", 
        "image_url" => "img\\livros\\ano-novo-contas-em-dia.jpg"
    ),
    array(
        "id" => 6, 
        "name" => "Antiotário - Um Caminho Sem Volta", 
        "affiliate_link" => "https://go.hotmart.com/K93021937G", 
        "image_url" => "img\\livros\\livro-antiotario-pdf-download.jpg"
    ),
    array(
        "id" => 7, 
        "name" => "Bíblia de Estudo Cronológica Organizada em Ordem Consecutiva", 
        "affiliate_link" => "https://go.hotmart.com/K93185898N?dp=1", 
        "image_url" => "img\\livros\\Semtitulolivroraralivroraracpebcphtcpedcpht.jpg"
    ),
    array(
        "id" => 8, 
        "name" => "Aprenda a Lotar sua Agenda e Faturar Mais", 
        "affiliate_link" => "https://go.hotmart.com/X93286111Y?dp=1", 
        "image_url" => "img\\livros\\AgendaLotadaLashDesigner600600px1.jpg"
    ),
    array(
        "id" => 9, 
        "name" => "Destravada Mente ( O Poder Da Mente Destravada)", 
        "affiliate_link" => "https://go.hotmart.com/F93165052P?dp=1", 
        "image_url" => "img\\livros\\Designsemnome.jpg"
    ),
    array(
        "id" => 10, 
        "name" => "Beauty Master Pack - Documentos Editáveis para Beleza e Estética", 
        "affiliate_link" => "https://go.hotmart.com/H93286113P", 
        "image_url" => "img\\livros\\BeautyPack.png"
    ),
    array(
        "id" => 8, 
        "name" => "Como Atrair Clientes Online - Livro Digital", 
        "affiliate_link" => "https://go.hotmart.com/J93287617Q?dp=1", 
        "image_url" => "img\\livros\\como-atrair-cliente.jpg", 
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>