<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Smartphone Motorola Moto G24 8GB RAM Boost* 128GB Grafite", 
        "affiliate_link" => "https://amzn.to/3x0BJ6n",
        "image_url" => "/lojavirtual/img/smartphones/51PBH2nM83L._AC_SX522_.jpg",
        "descricao" => "<p>Para quem precisa de agilidade, o Moto G24 é a escolha certa. Com a função RAM Boost, ele otimiza a memória para que você possa usar vários apps ao mesmo tempo sem travamentos. A tela de 90Hz oferece navegação suave, e o modo Night Vision garante fotos claras mesmo com pouca luz.</p>"
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>