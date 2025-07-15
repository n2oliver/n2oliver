<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Ella Radiance Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/ella-radiance-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157502-800-auto.png",
        "descricao" => "Uma fragrância vibrante e alegre, perfeita para o dia a dia. Suas notas de maçã verde e frésia trazem uma sensação de frescor e energia, ideal para a mulher confiante e cheia de vida."
    ),
    array(
        "id" => 2, 
        "name" => "Empire Woman Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/empire-woman-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/159410-800-auto.png",
        "descricao" => "Inspirado na mulher de atitude, este perfume combina notas florais com um toque amadeirado, criando uma fragrância sofisticada e marcante, ideal para ocasiões especiais."
    ),
    array(
        "id" => 3, 
        "name" => "Sérum Grace la Rose", 
        "affiliate_link" => "https://www.hinode.com.br/serum-grace-la-rose-new/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158698-800-auto.png",
        "descricao" => "Um toque de luxo e cuidado para a sua pele, com a delicadeza da rosa e uma hidratação profunda. Deixe sua pele radiante e aveludada com este sérum exclusivo."
    ),
    array(
        "id" => 4, 
        "name" => "Grace La Rose Sublime Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/grace-la-rose-sublime-deo-colonia-new/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158691-800-auto.png",
        "descricao" => "Elegância e feminilidade em um frasco. Este perfume floral amadeirado combina a rosa de Grasse com um toque cítrico, perfeito para mulheres que apreciam sofisticação e delicadeza."
    ),
    array(
        "id" => 5, 
        "name" => "Grace Midnight Hinode Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/grace-midnight-deo-colonia-new/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158692-800-auto.png",
        "descricao" => "Mistério e sensualidade para a noite. Com notas de cereja negra, framboesa e um toque adocicado, este perfume é ideal para mulheres que desejam deixar uma impressão marcante e envolvente."
    ),
    array(
        "id" => 6, 
        "name" => "Grace Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/grace-deo-colonia-new/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158690-800-auto.png",
        "descricao" => "Abrace sua beleza natural com esta fragrância floral frutada. Suas notas de frutas vermelhas, peônia e musk criam um aroma leve e refrescante, perfeito para mulheres que irradiam alegria e otimismo."
    ),
    array(
        "id" => 7, 
        "name" => "Ella Única Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/ella-unica-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/159203-800-auto.png",
        "descricao" => "Celebre sua individualidade com este perfume floral adocicado. A combinação de frésia, flor de laranjeira e um toque gourmand resulta em uma fragrância moderna e sofisticada, perfeita para mulheres que se destacam pela sua autenticidade."
    ),
    array(
        "id" => 8, 
        "name" => "Ella Pérolas Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/ella-perolas-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157504-800-auto.png",
        "descricao" => "Delicadeza e feminilidade em cada nota. Este perfume floral frutado combina a suavidade da flor de cerejeira com um toque cítrico e amadeirado, criando uma fragrância leve e encantadora, ideal para mulheres que apreciam a beleza nas pequenas coisas."
    ),
    array(
        "id" => 9, 
        "name" => "Ella Juicy Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/ella-juicy-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157208-800-auto.jpg",
        "descricao" => "Uma explosão de frescor e alegria para o seu dia. Este perfume floral frutado combina notas de frutas vermelhas, como morango e framboesa, com um toque floral e adocicado, resultando em uma fragrância vibrante e divertida."
    ),
    array(
        "id" => 10, 
        "name" => "Ella Aurora Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/ella-aurora-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/159389-800-auto.png",
        "descricao" => "A beleza do amanhecer em um frasco. Este perfume floral frutado combina a delicadeza da flor de íris com um toque cítrico e amadeirado, criando uma fragrância luminosa e inspiradora, perfeita para mulheres que buscam renovação e positividade."
    ),
    array(
        "id" => 11, 
        "name" => "Eterna Blue Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/eterna-blue-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155420-800-auto.jpg",
        "descricao" => "Um clássico atemporal para mulheres elegantes. Este perfume floral amadeirado combina a sofisticação da orquídea com notas amadeiradas e um toque de baunilha, resultando em uma fragrância marcante e inesquecível."
    ),
    array(
        "id" => 12, 
        "name" => "Eterna Nuit Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/eterna-nuit-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/156355-800-auto.png",
        "descricao" => "A magia da noite em um frasco. Este perfume oriental floral combina a intensidade do patchouli com a doçura da baunilha e um toque floral, criando uma fragrância envolvente e misteriosa, perfeita para ocasiões especiais."
    ),
    array(
        "id" => 13, 
        "name" => "Eterna Crystal Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/eterna-crystal-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155439-800-auto.jpg",
        "descricao" => "Brilhe como um cristal com esta fragrância floral frutada. A combinação de frutas vermelhas, rosa e musk resulta em um perfume delicado e luminoso, perfeito para mulheres que irradiam elegância e sofisticação."
    ),
    array(
        "id" => 14, 
        "name" => "Eterna Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/eterna-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155414-800-auto.jpg",
        "descricao" => "Uma fragrância clássica e atemporal para mulheres que apreciam a elegância. Este perfume floral combina a rosa damascena com um toque amadeirado e especiado, criando um aroma sofisticado e inesquecível."
    ),
    array(
        "id" => 15, 
        "name" => "Lesér Eau de Parfum 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/leser-eua-de-parfum-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155474-800-auto.jpg",
        "descricao" => "Uma fragrância luxuosa e envolvente para mulheres que desejam se destacar. Este perfume oriental floral combina a intensidade do jasmim com a doçura da baunilha e um toque amadeirado, criando um aroma sofisticado e marcante."
    ),
    array(
        "id" => 16, 
        "name" => "Inebriante For Her Eau de Parfum 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/inebriante-for-her-eau-de-parfum/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158822-800-auto.png",
        "descricao" => "Deixe-se envolver por esta fragrância sofisticada e sensual. Este perfume floral oriental combina a elegância da rosa com a intensidade do patchouli e um toque adocicado, criando um aroma marcante e inesquecível."
    ),
    array(
        "id" => 17, 
        "name" => "Hidratante Desodorante Corporal Inebriante For Her 200g", 
        "affiliate_link" => "https://www.hinode.com.br/hidratante-desodorante-corporal-inebriante-for-her-200g/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/159474-800-auto.png",
        "descricao" => "Prolongue a sensação do seu perfume Inebriante com este hidratante luxuoso. Sua fórmula exclusiva hidrata e perfuma a pele, deixando-a macia e aveludada, com a mesma fragrância sofisticada do seu perfume."
    ),
    array(
        "id" => 18, 
        "name" => "Dazzle Deo Colônia 60ml", 
        "affiliate_link" => "https://www.hinode.com.br/dazzle-deo-colonia-60ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157581-800-auto.png",
        "descricao" => "Uma fragrância moderna e vibrante para a mulher que ama brilhar. Combina notas florais e frutadas, ideal para quem quer deixar sua marca com um aroma inesquecível e cheio de atitude."
    ),
    array(
        "id" => 19, 
        "name" => "Dazzle Color Chámpagne Deo Colônia 60ml", 
        "affiliate_link" => "https://www.hinode.com.br/dazzle-color-champagne-deo-colonia-60ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157195-800-auto.jpg",
        "descricao" => "Celebre os melhores momentos com a sofisticação do Dazzle Champagne. Uma fragrância floral frutada que evoca a alegria e o glamour, perfeita para ocasiões especiais e para a mulher que é o centro das atenções."
    ),
    array(
        "id" => 20, 
        "name" => "Dazzle Color Fucsia Deo Colônia 60ml", 
        "affiliate_link" => "https://www.hinode.com.br/dazzle-color-fucsia-deo-colonia-60ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157197-800-auto.jpg",
        "descricao" => "Intenso e ousado, o Dazzle Fucsia é para a mulher que não tem medo de expressar sua personalidade. Com notas vibrantes e um fundo adocicado, é o perfume ideal para quem quer se sentir poderosa e confiante."
    ),
    array(
        "id" => 21, 
        "name" => "Dazzle Color Vermelho Deo Colônia 60ml", 
        "affiliate_link" => "https://www.hinode.com.br/dazzle-color-vermelho-deo-colonia-60ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157196-800-auto.jpg",
        "descricao" => "A cor da paixão em forma de fragrância. Dazzle Vermelho é um perfume oriental floral que combina notas quentes e sensuais, perfeito para noites marcantes e para a mulher que sabe o que quer."
    ),
    array(
        "id" => 22, 
        "name" => "Rebelle Deo Colônia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/rebelle-deo-colonia-75ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/156720-800-auto.png",
        "descricao" => "Expresse sua dualidade com Rebelle. Uma fragrância que mistura a doçura das frutas vermelhas com a intensidade das notas amadeiradas, criando um aroma único para a mulher que é ao mesmo tempo delicada e forte."
    ),
    array(
        "id" => 23, 
        "name" => "Rebelle Madness Deo Colônia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/rebelle-madness-deo-colonia/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/158488-800-auto.png",
        "descricao" => "Para a mulher que vive intensamente, Rebelle Madness é a escolha perfeita. Uma explosão de notas frutadas e florais com um toque gourmand, que resulta em uma fragrância viciante e cheia de energia."
    ),
    array(
        "id" => 24, 
        "name" => "Hype For Her Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/hype-for-her-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155480-800-auto.jpg",
        "descricao" => "Urbano e descolado, Hype For Her é a fragrância da mulher moderna. Com notas cítricas e um fundo amadeirado, é um perfume versátil e cheio de frescor, ideal para o dia a dia na cidade."
    ),
    array(
        "id" => 25, 
        "name" => "Spot Sunset For Her Deo Colônia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/spot-sunset-for-her-deo-colonia-75ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157513-800-auto.png",
        "descricao" => "Inspirado no pôr do sol, Spot Sunset é uma fragrância floral frutada que combina a doçura da cereja com a cremosidade do chocolate branco. Um perfume romântico e envolvente para momentos inesquecíveis."
    ),
    array(
        "id" => 26, 
        "name" => "Spot For Her Deo Colônia 75ml", 
        "affiliate_link" => "https://www.hinode.com.br/spot-sunset-for-her-deo-colonia-75ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157203-800-auto.jpg",
        "descricao" => "A fragrância da mulher que sabe se divertir. Spot For Her é um perfume floral amadeirado que combina notas vibrantes e um fundo cremoso, perfeito para a balada e para quem ama a noite."
    ),
    array(
        "id" => 27, 
        "name" => "Venyx Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/venyx-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155481-800-auto.jpg",
        "descricao" => "Sofisticação e poder em uma única fragrância. Venyx é um perfume chipre floral que combina notas amadeiradas com a delicadeza das flores, ideal para a mulher elegante e que está no controle."
    ),
    array(
        "id" => 28, 
        "name" => "Feelin For Her Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/feelin-for-her-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155448-800-auto.jpg",
        "descricao" => "Desperte seus sentidos com Feelin For Her. Uma fragrância oriental amadeirada que combina notas quentes e um toque adocicado, criando um aroma sedutor e irresistível."
    ),
    array(
        "id" => 29, 
        "name" => "Feelin Sexy For Her Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/feelin-sexy-for-her-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/155457-800-auto.jpg",
        "descricao" => "A arma da sedução. Feelin Sexy For Her é um perfume chipre sensual que combina notas de couro e pimenta rosa, resultando em uma fragrância provocante e inesquecível."
    ),
    array(
        "id" => 30, 
        "name" => "Feelin Impulse For Her Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/feelin-impulse-for-her-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "/loja_virtual/img/perfumes/157198-800-auto.jpg",
        "descricao" => "Siga seus impulsos com esta fragrância floral frutada. Feelin Impulse combina a energia das frutas com a delicadeza das flores, criando um aroma vibrante e cheio de vida."
    ),
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>