<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Ella Radiance Deo Colônia 100ml", 
        "affiliate_link" => "https://www.hinode.com.br/ella-radiance-deo-colonia-100ml/p?id_consultor=68286068", 
        "image_url" => "img\\perfumes\\157502-800-auto.png", 
        "descricao" => "<b>Ella Radiance Deo Colônia Hinode</b><br>
        Ella Radiance inspira-se na alegria contagiante que um dia ensolarado pode trazer. Para mulheres positivas e confiantes, esta fragrância encanta com uma saída vibrante formada pelas notas de maçã verde, frésia e a sensualidade das notas de chocolate. Depois de receber toda esta sensação de energia, é irresistível não se deixar envolver pela personalidade e pela singularidade dessa mulher cativante.</p>
        
        <p><b>FAMÍLIA OLFATIVA:</b> Floral Vibrante</p>
        
        <p><b>NOTAS OLFATIVAS:</b><br>
        <b>Saída:</b> Pêra, Bergamota e Maracujá<br>
        <b>Corpo:</b> Jasmim Sambac, Violeta e Orquídea<br>
        <b>Fundo:</b> Sândalo, Âmbar e Musk",
    ),
    
    array(
        "id" => 2, 
        "name" => "Lucro No Instagram", 
        "affiliate_link" => "https://go.hotmart.com/F93196255C?dp=1", 
        "image_url" => "img\\livros\\INSTAGRAM2.jpg",
        "descricao" => "Descubra como ganhar dinheiro de forma rápida e simples no Instagram. Aproveite a parceria com uma plataforma para divulgar vídeos e receber uma recompensa financeira.",
    ),
    array(
        "id" => 3, 
        "name" => "Especialista Em Bentô Cake", 
        "affiliate_link" => "https://go.hotmart.com/D93217684L", 
        "image_url" => "img\\cursos\\bento2.png", 
        "descricao" => "Desvende a magia que está por trás dos Bentô Cakes e transforme-se na ESTRELA da confeitaria que todos falam! 🌟 Descubra como cativar e encantar multidões com suas criações únicas e saborosas!",
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>