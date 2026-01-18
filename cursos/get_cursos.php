<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 3, 
        "name" => "Curso De Informática Básica", 
        "affiliate_link" => "https://go.hotmart.com/B93118595S", 
        "image_url" => "/lojavirtual/img/cursos/InfoBasica.jpg",
        "descricao" => "Domine o computador do zero! Este curso é ideal para iniciantes e ensina tudo o que você precisa saber sobre sistemas operacionais, internet e os principais programas para o dia a dia."
    ),
    array(
        "id" => 4, 
        "name" => "Cursos Online De Excel E Power BI", 
        "affiliate_link" => "https://go.hotmart.com/V93197043J?dp=1", 
        "image_url" => "/lojavirtual/img/cursos/Excel.jpg",
        "descricao" => "Transforme dados em decisões inteligentes. Aprenda a usar o Excel e o Power BI para criar planilhas dinâmicas, dashboards interativos e análises de dados que vão impulsionar sua carreira."
    ),
    array(
        "id" => 10, 
        "name" => "Português Para Passar", 
        "affiliate_link" => "https://go.hotmart.com/D93209221G?dp=1", 
        "image_url" => "/lojavirtual/img/cursos/portuguesparapassar.png",
        "descricao" => "Prepare-se para concursos e vestibulares com um curso de português focado em resultados. Aprenda gramática, redação e interpretação de texto de forma clara e objetiva."
    ),
    array(
        "id" => 11, 
        "name" => "Educação Financeira Na Prática", 
        "affiliate_link" => "https://go.hotmart.com/G93122238N", 
        "image_url" => "/lojavirtual/img/cursos/OrganizaoFinanceiranaPrtica.jpg",
        "descricao" => "Assuma o controle do seu dinheiro. Este curso ensina de forma prática como organizar suas finanças, investir e planejar seu futuro para alcançar a independência financeira."
    )

    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>