<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Especialista Em Bentô Cake", 
        "affiliate_link" => "https://go.hotmart.com/D93217684L?dp=1", 
        "image_url" => "\\loja_virtual\\img\\cursos\\bento2.png", 
        "hightlight" => true
    ),
    array(
        "id" => 2, 
        "name" => "Curso De Extensão De Cílios - Escola Dos Cílios", 
        "affiliate_link" => "https://go.hotmart.com/P93202077I", 
        "image_url" => "\\loja_virtual\\img\\cursos\\alongamento-cilios.png", 
    ),
    array(
        "id" => 3, 
        "name" => "Curso De Informática Básica", 
        "affiliate_link" => "https://go.hotmart.com/B93118595S", 
        "image_url" => "\\loja_virtual\\img\\cursos\\InfoBasica.jpg", 
    ),
    array(
        "id" => 4, 
        "name" => "Cursos Online De Excel E Power BI", 
        "affiliate_link" => "https://go.hotmart.com/V93197043J?dp=1", 
        "image_url" => "\\loja_virtual\\img\\cursos\\Excel.jpg", 
    ),
    array(
        "id" => 5, 
        "name" => "Curso De Bolos Decorados - Boleira Academy", 
        "affiliate_link" => "https://go.hotmart.com/P93285964G", 
        "image_url" => "\\loja_virtual\\img\\cursos\\CapaHotmartBoleiraAcademy.jpg", 
    ),
    array(
        "id" => 6, 
        "name" => "Curso De Gestão De Salão De Beleza - Estratégias Vencedoras", 
        "affiliate_link" => "https://go.hotmart.com/W93287315I?dp=1", 
        "image_url" => "\\loja_virtual\\img\\cursos\\gestao-salao-beleza.jpg", 
    ),
    array(
        "id" => 7, 
        "name" => "Curso De Cabeleireira Profissional", 
        "affiliate_link" => "https://go.hotmart.com/C93287616C?dp=1", 
        "image_url" => "\\loja_virtual\\img\\cursos\\cabelereira-profissional.jpg", 
    ),
    array(
        "id" => 8, 
        "name" => "Curso Para Cabelos Cacheados, Crespos E Ondulados - Escola Do Cabelo", 
        "affiliate_link" => "https://go.hotmart.com/G93288530A", 
        "image_url" => "\\loja_virtual\\img\\cursos\\curso-escola-do-cabelo-cacheada.jpg", 
    ),
    array(
        "id" => 9, 
        "name" => "Curso De Trancista", 
        "affiliate_link" => "https://go.hotmart.com/W93294605P", 
        "image_url" => "\\loja_virtual\\img\\cursos\\curso-de-trancista.jpg", 
    ),
    array(
        "id" => 10, 
        "name" => "Português Para Passar", 
        "affiliate_link" => "https://go.hotmart.com/D93209221G?dp=1", 
        "image_url" => "\\loja_virtual\\img\\cursos\\portuguesparapassar.png", 
    ),
    array(
        "id" => 11, 
        "name" => "Educação Financeira Na Prática", 
        "affiliate_link" => "https://go.hotmart.com/G93122238N", 
        "image_url" => "\\loja_virtual\\img\\cursos\\OrganizaoFinanceiranaPrtica.jpg", 
    ),
    array(
        "id" => 12, 
        "name" => "Guia da Confeitaria", 
        "affiliate_link" => "https://go.hotmart.com/X90535566R", 
        "image_url" => "\\loja_virtual\\img\\cursos\\guia-da-confeitaria.jpg", 
    )

    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>