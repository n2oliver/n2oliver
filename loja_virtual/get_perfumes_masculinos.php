<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Empire Icon Deo Parfum 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-icon-deo-parfum-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/159533-800-auto.png",
        "descricao" => "Para o homem moderno que deixa sua marca. Uma fragrância amadeirada e intensa, que combina notas de íris negra e couro, ideal para quem busca sofisticação e poder."
    ),
    array(
        "id" => 2, 
        "name" => "Empire Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158800-1600-auto.png",
        "descricao" => "Um clássico para o homem de sucesso. Com notas orientais e amadeiradas, é uma fragrância tradicional e sofisticada, perfeita para o ambiente de negócios e momentos decisivos."
    ),
    array(
        "id" => 3, 
        "name" => "Empire Legacy Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-legacy-deo-colonia/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158942-800-auto.png",
        "descricao" => "O legado de um homem de poder e elegância. Uma fragrância marcante com notas de especiarias e um fundo amadeirado, ideal para momentos memoráveis e celebrações."
    ),
    array(
        "id" => 4, 
        "name" => "Empire Sport Deo Colônia 100ml Sport", 
        "affiliate_link" => "https://www.hinode.com.br/empire-sport-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158801-800-auto.png",
        "descricao" => "Energia e frescor para o homem ativo. Uma fragrância vibrante com notas cítricas e aquosas, perfeita para acompanhar os desafios do dia a dia e a prática de esportes."
    ),
    array(
        "id" => 5, 
        "name" => "Empire Gold Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-gold-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158803-800-auto.png",
        "descricao" => "Luxo e sofisticação em forma de perfume. Uma fragrância oriental amadeirada com notas de pimenta preta e um toque frutado, para o homem que alcança seus objetivos."
    ),
    array(
        "id" => 6, 
        "name" => "Empire Intense Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-intense-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158804-800-auto.png",
        "descricao" => "Para o homem de personalidade intensa. Uma fragrância marcante e de longa duração, com notas de cardamomo e um fundo amadeirado que impõe presença."
    ),
    array(
        "id" => 7, 
        "name" => "Empire Absolut Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-absolut-deo-colonia-novo/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158802-800-auto.png",
        "descricao" => "A expressão absoluta do poder. Uma fragrância amadeirada com notas adocicadas de fava tonka, que revela a força e a imponência do homem moderno."
    ),
    array(
        "id" => 8, 
        "name" => "GL Embaixador Gusttavo Lima", 
        "affiliate_link" => "https://www.hinode.com.br/gl-embaixador-gustavo-lima/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/159585-800-auto.png",
        "descricao" => "O cheiro do sucesso. Uma fragrância moderna e marcante, com notas de especiarias e um fundo amadeirado, inspirada no carisma e na atitude do artista."
    ),
    array(
        "id" => 9, 
        "name" => "Lattitude Adventure Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-adventure-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157503-800-auto.png",
        "descricao" => "Para o homem aventureiro. Uma fragrância fresca e amadeirada, com notas de bergamota e musgo, que inspira novas descobertas e a busca por liberdade."
    ),
    array(
        "id" => 10, 
        "name" => "Lattitude Brave Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-brave-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/159465-800-auto.png",
        "descricao" => "Coragem e determinação. Uma fragrância marcante com notas de pimenta e um fundo ambarado, para o homem que enfrenta seus desafios com bravura."
    ),
    array(
        "id" => 11, 
        "name" => "Lattitude Expedition Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-expedition-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/156020-800-auto.jpg",
        "descricao" => "O espírito da exploração. Uma fragrância fresca e vibrante, com notas aquáticas e especiarias, para o homem que ama a natureza e a sensação de liberdade."
    ),
    array(
        "id" => 12, 
        "name" => "Lattitude Origini Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-origini-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157501-800-auto.png",
        "descricao" => "Um retorno às origens. Uma fragrância amadeirada e marcante, com notas de limão e vetiver, que celebra a autenticidade e a força do homem."
    ),
    array(
        "id" => 13, 
        "name" => "Lattitude Extreme Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-extreme-deo-colonia-100-ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/159071-800-auto.png",
        "descricao" => "Para o homem que vive no limite. Uma fragrância intensa e vibrante, com notas de pimenta e um fundo amadeirado, que inspira a superação."
    ),
    array(
        "id" => 14, 
        "name" => "Lattitude Stamina Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/lattitude-stamina-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/159076-800-auto.png",
        "descricao" => "Força e resistência. Uma fragrância refrescante com notas de vetiver e âmbar, que te acompanha em suas conquistas e te impulsiona a ir além."
    ),
    array(
        "id" => 15, 
        "name" => "Shower Gel Lattitude Stamina 200g", 
        "affiliate_link" => "https://www.hinode.com.br/shower-gel-lattitude-stamina-200g/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/159301-800-auto.png",
        "descricao" => "A energia de Lattitude Stamina agora no seu banho. Limpa e perfuma a pele com a mesma fragrância vibrante, proporcionando uma sensação de frescor e vitalidade."
    ),
    array(
        "id" => 16, 
        "name" => "Inebriante Eau de Parfum 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/inebriante-eau-de-parfum-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155469-800-auto.jpg",
        "unavailable" => true,
        "descricao" => "Sedutor e irresistível. Uma fragrância amadeirada oriental com notas de couro e âmbar, perfeita para noites inesquecíveis e para o homem que sabe o poder que tem."
    ),
    array(
        "id" => 17, 
        "name" => "Feelin For Him Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/feelin-for-him-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155445-800-auto.jpg",
        "descricao" => "Desperte seus sentidos. Uma fragrância quente e adocicada, com notas de açafrão e fava tonka, ideal para momentos a dois e para criar uma atmosfera de cumplicidade."
    ),
    array(
        "id" => 18, 
        "name" => "Feelin Sexy For Him Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/feelin-sexy-for-him-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155460-800-auto.jpg",
        "descricao" => "O cheiro da sedução. Uma fragrância chipre sensual com notas de couro e pimenta rosa, que resulta em um aroma provocante e inesquecível para o homem confiante."
    ),
    array(
        "id" => 19, 
        "name" => "Feelin Impulse For Him Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/feelin-impulse-for-him-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157199-800-auto.jpg",
        "descricao" => "Siga seus impulsos. Uma fragrância floral frutada, vibrante e cheia de vida, que combina a energia das frutas com a delicadeza das flores para o homem espontâneo."
    ),
    array(
        "id" => 20, 
        "name" => "Hype For Him Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/hype-for-him-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155479-800-auto.jpg",
        "descricao" => "Urbano e descolado. Uma fragrância versátil e cheia de frescor, com notas cítricas e um fundo amadeirado, ideal para o dia a dia do homem moderno."
    ),
    array(
        "id" => 21, 
        "name" => "Hype Ink Art For Him Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/hype-ink-art-for-him-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158038-800-auto.png",
        "descricao" => "Expresse sua arte. Uma fragrância moderna e marcante, com notas de sálvia e um fundo amadeirado, para o homem criativo e que deixa sua marca no mundo."
    ),
    array(
        "id" => 22, 
        "name" => "Spot For Him Deo Colonia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/spot-for-him-deo-colonia-75ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157204-800-auto.jpg",
        "descricao" => "A fragrância do homem que sabe se divertir. Um perfume floral amadeirado que combina notas vibrantes e um fundo cremoso, perfeito para a balada e para quem ama a noite."
    ),
    array(
        "id" => 23, 
        "name" => "Spot Sunset For Him Deo Colônia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/spot-sunset-for-him-deo-colonia-75ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157512-800-auto.png",
        "descricao" => "Inspirado no pôr do sol. Uma fragrância romântica e envolvente, com notas de rum e um fundo amadeirado, para momentos inesquecíveis e encontros especiais."
    ),
    array(
        "id" => 24, 
        "name" => "Enigma Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/enigma-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155482-800-auto.jpg",
        "descricao" => "Mistério e sofisticação. Uma fragrância oriental amadeirada com notas de couro e especiarias, para o homem enigmático e que desperta a curiosidade."
    ),
    array(
        "id" => 25, 
        "name" => "Grand Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/grand-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155429-800-auto.jpg",
        "descricao" => "Um clássico para o homem elegante. Uma fragrância amadeirada e especiada que nunca sai de moda, ideal para quem valoriza a tradição e a sofisticação."
    ),
    array(
        "id" => 26, 
        "name" => "Grand Reserva Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/grand-reserva-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/156342-800-auto.png",
        "descricao" => "A sofisticação de um bom vinho. Uma fragrância amadeirada única, com notas frutadas e um toque de uísque, para o homem que aprecia os prazeres da vida."
    ),
    array(
        "id" => 27, 
        "name" => "H Men Deo Colônia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/h-men-deo-colonia-75ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157500-800-auto.png",
        "descricao" => "Para o homem moderno. Uma fragrância fresca e versátil, com notas de gengibre e cardamomo, perfeita para todas as ocasiões, do trabalho ao lazer."
    ),
    array(
        "id" => 28, 
        "name" => "H Men Icy Deo Colônia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/h-men-icy-deo-colonia-75ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157511-800-auto.png",
        "descricao" => "Uma explosão de frescor. Com notas de menta e um fundo amadeirado, é uma fragrância extremamente refrescante, ideal para os dias quentes e para recarregar as energias."
    ),
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>