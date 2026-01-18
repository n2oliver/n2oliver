<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Lucro No Instagram", 
        "affiliate_link" => "https://go.hotmart.com/F93196255C?dp=1", 
        "image_url" => "/lojavirtual/img/livros/INSTAGRAM2.jpg",
        "descricao" => "Aprenda estratégias práticas para transformar seu perfil do Instagram em uma fonte de renda. Este guia ensina como monetizar seu conteúdo e alcançar o sucesso financeiro na plataforma."
    ),
    array(
        "id" => 2, 
        "name" => "120 Curiosidades Bíblicas", 
        "affiliate_link" => "https://go.hotmart.com/H93122326F?dp=1", 
        "image_url" => "/lojavirtual/img/livros/120curiosidades-biblicas.jpg",
        "descricao" => "Mergulhe em fatos fascinantes e pouco conhecidos da Bíblia. Este livro é perfeito para estudiosos e curiosos que desejam aprofundar seu conhecimento nas escrituras sagradas."
    ),
    array(
        "id" => 3, 
        "name" => "Ano Novo, Contas Em Dia", 
        "affiliate_link" => "https://go.hotmart.com/N89476028F?dp=1", 
        "image_url" => "/lojavirtual/img/livros/ano-novo-contas-em-dia.jpg",
        "descricao" => "Comece o ano com o pé direito! Este guia prático oferece dicas valiosas para organizar suas finanças, sair das dívidas e planejar um futuro financeiro mais tranquilo."
    ),
    array(
        "id" => 4, 
        "name" => "Antiotário - Um Caminho Sem Volta", 
        "affiliate_link" => "https://go.hotmart.com/K93021937G", 
        "image_url" => "/lojavirtual/img/livros/livro-antiotario-pdf-download.jpg",
        "descricao" => "Desenvolva uma mentalidade mais forte e assertiva. Este livro oferece insights para você se posicionar melhor em diversas situações da vida, evitando armadilhas e alcançando seus objetivos."
    ),
    array(
        "id" => 6, 
        "name" => "Destravada Mente (O Poder Da Mente Destravada)", 
        "affiliate_link" => "https://go.hotmart.com/F93165052P?dp=1", 
        "image_url" => "/lojavirtual/img/livros/Designsemnome.jpg",
        "descricao" => "Liberte seu potencial máximo destravando o poder da sua mente. Aprenda técnicas para superar bloqueios mentais, aumentar sua produtividade e alcançar uma mentalidade de sucesso."
    ),
    array(
        "id" => 9, 
        "name" => "Modelos Prontos De Planilhas, Arquivos E Apresentações Para Diferentes Fins", 
        "affiliate_link" => "https://go.hotmart.com/J93285890A",
        "image_url" => "/lojavirtual/img/livros/modelos-prontos.jpg", 
        "descricao" => "Economize tempo e aumente sua produtividade com este pacote de modelos prontos. Planilhas, apresentações e documentos para diversas finalidades, fáceis de usar e personalizar."
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>