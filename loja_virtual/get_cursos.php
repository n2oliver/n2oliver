<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Especialista Em Bentô Cake", 
        "affiliate_link" => "https://go.hotmart.com/D93217684L?dp=1", 
        "image_url" => "/loja_virtual/img/cursos/bento2.png",
        "descricao" => "Torne-se um expert em Bentô Cakes, a tendência do momento na confeitaria. Aprenda técnicas de decoração, massas e recheios para criar bolos irresistíveis e encantar seus clientes."
    ),
    array(
        "id" => 2, 
        "name" => "Curso De Extensão De Cílios - Escola Dos Cílios", 
        "affiliate_link" => "https://go.hotmart.com/P93202077I", 
        "image_url" => "/loja_virtual/img/cursos/alongamento-cilios.png",
        "descricao" => "Inicie sua carreira como lash designer ou aprimore suas técnicas. Este curso completo ensina desde o básico até as técnicas mais avançadas de extensão de cílios, com foco em segurança e resultados profissionais."
    ),
    array(
        "id" => 3, 
        "name" => "Curso De Informática Básica", 
        "affiliate_link" => "https://go.hotmart.com/B93118595S", 
        "image_url" => "/loja_virtual/img/cursos/InfoBasica.jpg",
        "descricao" => "Domine o computador do zero! Este curso é ideal para iniciantes e ensina tudo o que você precisa saber sobre sistemas operacionais, internet e os principais programas para o dia a dia."
    ),
    array(
        "id" => 4, 
        "name" => "Cursos Online De Excel E Power BI", 
        "affiliate_link" => "https://go.hotmart.com/V93197043J?dp=1", 
        "image_url" => "/loja_virtual/img/cursos/Excel.jpg",
        "descricao" => "Transforme dados em decisões inteligentes. Aprenda a usar o Excel e o Power BI para criar planilhas dinâmicas, dashboards interativos e análises de dados que vão impulsionar sua carreira."
    ),
    array(
        "id" => 5, 
        "name" => "Curso De Bolos Decorados - Boleira Academy", 
        "affiliate_link" => "https://go.hotmart.com/P93285964G", 
        "image_url" => "/loja_virtual/img/cursos/CapaHotmartBoleiraAcademy.jpg",
        "descricao" => "Aprenda a arte de decorar bolos com técnicas profissionais. Este curso aborda desde a preparação da massa até as decorações mais elaboradas, ideal para quem quer empreender na confeitaria."
    ),
    array(
        "id" => 6, 
        "name" => "Curso De Gestão De Salão De Beleza - Estratégias Vencedoras", 
        "affiliate_link" => "https://go.hotmart.com/W93287315I?dp=1", 
        "image_url" => "/loja_virtual/img/cursos/gestao-salao-beleza.jpg",
        "descricao" => "Aprenda a gerenciar seu salão de beleza de forma eficiente. Este curso ensina estratégias de marketing, finanças e gestão de equipe para aumentar seu lucro e fidelizar clientes."
    ),
    array(
        "id" => 7, 
        "name" => "Curso De Cabeleireira Profissional", 
        "affiliate_link" => "https://go.hotmart.com/C93287616C?dp=1", 
        "image_url" => "/loja_virtual/img/cursos/cabelereira-profissional.jpg",
        "descricao" => "Torne-se uma cabeleireira de sucesso. Este curso completo ensina cortes, coloração, penteados e tratamentos capilares, preparando você para o mercado de trabalho."
    ),
    array(
        "id" => 8, 
        "name" => "Curso Para Cabelos Cacheados, Crespos E Ondulados - Escola Do Cabelo", 
        "affiliate_link" => "https://go.hotmart.com/G93288530A", 
        "image_url" => "/loja_virtual/img/cursos/curso-escola-do-cabelo-cacheada.jpg",
        "descricao" => "Especialize-se em cabelos com curvatura. Aprenda técnicas de corte, finalização e tratamento para valorizar a beleza natural dos cabelos cacheados, crespos e ondulados."
    ),
    array(
        "id" => 9, 
        "name" => "Curso De Trancista", 
        "affiliate_link" => "https://go.hotmart.com/W93294605P", 
        "image_url" => "/loja_virtual/img/cursos/curso-de-trancista.jpg",
        "descricao" => "Domine a arte das tranças e transforme sua paixão em profissão. Aprenda diversos estilos de tranças, desde as mais simples até as mais complexas, e encante suas clientes."
    ),
    array(
        "id" => 10, 
        "name" => "Português Para Passar", 
        "affiliate_link" => "https://go.hotmart.com/D93209221G?dp=1", 
        "image_url" => "/loja_virtual/img/cursos/portuguesparapassar.png",
        "descricao" => "Prepare-se para concursos e vestibulares com um curso de português focado em resultados. Aprenda gramática, redação e interpretação de texto de forma clara e objetiva."
    ),
    array(
        "id" => 11, 
        "name" => "Educação Financeira Na Prática", 
        "affiliate_link" => "https://go.hotmart.com/G93122238N", 
        "image_url" => "/loja_virtual/img/cursos/OrganizaoFinanceiranaPrtica.jpg",
        "descricao" => "Assuma o controle do seu dinheiro. Este curso ensina de forma prática como organizar suas finanças, investir e planejar seu futuro para alcançar a independência financeira."
    ),
    array(
        "id" => 12, 
        "name" => "Guia da Confeitaria", 
        "affiliate_link" => "https://go.hotmart.com/X90535566R", 
        "image_url" => "/loja_virtual/img/cursos/guia-da-confeitaria.jpg",
        "descricao" => "O guia definitivo para quem ama confeitaria. Aprenda receitas, técnicas e segredos dos grandes mestres para criar doces e sobremesas incríveis."
    )

    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>