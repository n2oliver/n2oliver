<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Empire Icon Deo Parfum 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-icon-deo-parfum-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\159533-800-auto.png"
    ),
    array(
        "id" => 2, 
        "name" => "Empire Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\158800-1600-auto.png"
    ),
    array(
        "id" => 3, 
        "name" => "Empire Legacy Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-legacy-deo-colonia/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\158942-800-auto.png"
    ),
    array(
        "id" => 4, 
        "name" => "Empire Sport Deo Colônia 100ml Sport", 
        "affiliate_link" => "https://www.hinode.com.br/empire-sport-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\158801-800-auto.png"
    ),
    array(
        "id" => 5, 
        "name" => "Empire Gold Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-gold-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\158803-800-auto.png"
    ),
    array(
        "id" => 6, 
        "name" => "Empire Intense Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-intense-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\158804-800-auto.png"
    ),
    array(
        "id" => 7, 
        "name" => "Empire Absolut Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-absolut-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\158802-800-auto.png"
    ),
    array(
        "id" => 8, 
        "name" => "GL Embaixador Gusttavo Lima", 
        "affiliate_link" => "https://www.hinode.com.br/gl-embaixador-gustavo-lima/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\159585-800-auto.png"
    ),
    array(
        "id" => 9, 
        "name" => "Lattitude Adventure Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-adventure-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\157503-800-auto.png"
    ),
    array(
        "id" => 10, 
        "name" => "Lattitude Brave Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-brave-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\159465-800-auto.png"
    ),
    array(
        "id" => 11, 
        "name" => "Lattitude Expedition Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-expedition-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\156020-800-auto.jpg"
    ),
    array(
        "id" => 12, 
        "name" => "Lattitude Origini Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-origini-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\157501-800-auto.png"
    ),
    array(
        "id" => 13, 
        "name" => "Lattitude Extreme Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-extreme-deo-colonia-100-ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\159071-800-auto.png"
    ),
    array(
        "id" => 14, 
        "name" => "Lattitude Stamina Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-stamina-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\159076-800-auto.png"
    ),
    array(
        "id" => 15, 
        "name" => "Shower Gel Lattitude Stamina 200g", 
        "affiliate_link" => "https://www.hinode.com.br/shower-gel-lattitude-stamina-200g/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\159301-800-auto.png"
    ),
    array(
        "id" => 16, 
        "name" => "Inebriante Eau de Parfum 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/inebriante-eau-de-parfum-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\155469-800-auto.jpg",
        "unavailable" => true
    ),
    array(
        "id" => 17, 
        "name" => "Feelin For Him Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/feelin-for-him-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\155445-800-auto.jpg"
    ),
    array(
        "id" => 18, 
        "name" => "Feelin Sexy For Him Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/feelin-sexy-for-him-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\155460-800-auto.jpg"
    ),
    array(
        "id" => 19, 
        "name" => "Feelin Impulse For Him Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/feelin-impulse-for-him-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\157199-800-auto.jpg"
    ),
    array(
        "id" => 20, 
        "name" => "Hype For Him Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/hype-for-him-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\155479-800-auto.jpg"
    ),
    array(
        "id" => 21, 
        "name" => "Hype Ink Art For Him Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/hype-ink-art-for-him-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\158038-800-auto.png"
    ),
    array(
        "id" => 22, 
        "name" => "Spot For Him Deo Colonia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/spot-for-him-deo-colonia-75ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\157204-800-auto.jpg"
    ),
    array(
        "id" => 23, 
        "name" => "Spot Sunset For Him Deo Colônia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/spot-sunset-for-him-deo-colonia-75ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\157512-800-auto.png"
    ),
    array(
        "id" => 24, 
        "name" => "Enigma Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/enigma-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\155482-800-auto.jpg"
    ),
    array(
        "id" => 25, 
        "name" => "Grand Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/grand-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\155429-800-auto.jpg"
    ),
    array(
        "id" => 26, 
        "name" => "Grand Reserva Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/grand-reserva-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\156342-800-auto.png"
    ),
    array(
        "id" => 27, 
        "name" => "H Men Deo Colônia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/h-men-deo-colonia-75ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\157500-800-auto.png"
    ),
    array(
        "id" => 27, 
        "name" => "H Men Icy Deo Colônia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/h-men-icy-deo-colonia-75ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\157511-800-auto.png"
    ),
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>