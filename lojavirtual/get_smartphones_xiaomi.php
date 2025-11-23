<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Smartphone Xiaomi Redmi Note 13 Pro", 
        "affiliate_link" => "https://amzn.to/4dWzWAc",
        "image_url" => "/lojavirtual/img/smartphones/51pk5PzpzZL._AC_SX569_.jpg",
        "descricao" => "<p>O Redmi Note 13 Pro é um monstro da fotografia, com sua câmera principal de 200MP que captura detalhes incríveis. A tela CrystalRes AMOLED com 120Hz oferece cores vibrantes e fluidez, enquanto o carregamento turbo de 67W garante que você passe menos tempo na tomada. É o celular para quem não abre mão de performance e qualidade de imagem.</p>"
    ),
    array(
        "id" => 2, 
        "name" => "Smartphone Xiaomi POCO X6 Pro 5G 12 GB+512 GB Preto [2311DRK48G]",
        "affiliate_link" => "https://amzn.to/4pvHMpf",
        "image_url" => "/lojavirtual/img/smartphones/71AuNiKey2L._AC_SY879_.jpg",
        "descricao" => "<p>Sistema operacional	Android 14<br>
                            Memória RAM instalada	12 GB<br>
                            Modelo da CPU	Mediatek Dimensity 8000<br>
                            Velocidade da CPU	3,35 GHz<br>
                            Capacidade de armazenamento da memória	512 GB<br>
                            Contagem de slots do cartão SIM	Dual SIM<br>
                            Tipo de conector	USB tipo C<br>
                            Fator de forma	Barra</p>"
    ),
    array(
        "id" => 3, 
        "name" => "Smartphone Xiaomi Poco X7 Pro 5G NFC Black (Preto) 12GB RAM 512GB ROM [2412DPC0AG]",
        "affiliate_link" => "https://amzn.to/42lD7gx",
        "image_url" => "/lojavirtual/img/smartphones/61Dfzukq7KL._AC_SX679_.jpg",
        "descricao" => "<p>Marca	XIAOMI<br>
                            Sistema operacional	Android 14<br>
                            Tamanho instalado da memória RAM	12 GB<br>
                            Modelo da CPU	1.2GHz Cortex A8 Processor<br>
                            Velocidade da CPU	3 GHz</p>"
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>