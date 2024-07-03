<?php
// Dados dos produtos (poderiam ser carregados de um banco de dados)
$products = array(
    array(
        "id" => 1, 
        "name" => "Smartphone Xiaomi Redmi Note 13 Pro", 
        "affiliate_link" => "https://amzn.to/4dWzWAc", 
        "image_url" => "loja_virtual\\img\\smartphones\\51pk5PzpzZL._AC_SX569_.jpg",
        "descricao" =>
            "&bull; SnapdragonPlataforma móvel 7s Gen 2, processo de fabricação 4nm, até 2,4 GHz<br>
            &bull; Tela CrystalRes AMOLED de 6,67\" 2712x1220 (resolução 1.5K), até 120Hz Taxa de atualização<br>
            &bull; 5100mAh (typ) bateria de ultra grande capacidade, 67W turbo carregamento<br>
            &bull; 200MP + 8MP + 2MP câmera tripla, 16MP câmera fronta<br>
            &bull; NFC, Wi-Fi, Bluetooth 5.2, GPS, 3.5mm Headphone Jack"
    ),
    array(
        "id" => 2, 
        "name" => "Smartphone Xiaomi Redmi 12 4G 256GB - 8GB Ram (Versao Global) (Polar Silver)", 
        "affiliate_link" => "https://amzn.to/3KcVzyu", 
        "image_url" => "loja_virtual\\img\\smartphones\\41hUnMEimkL._AC_SX522_.jpg",
        "descricao" =>
            "&bull; Connectivity technology : Wi-fi <br>
            &bull; Display.size : 6.79 inches <br>
            &bull; Memory storage capacity : 256.0 GB <br>
            &bull; Operating system : android <br>
            &bull; Wireless network technology : GSM <br>
            &bull; Wireless provider : all carriers <br>
            &bull; Ram memory.installed size : 8.0 GB"
    ),
    array(
        "id" => 3, 
        "name" => "POCO C65 8GB+256GB NFC MediaTek Helio G85 Octa Core", 
        "affiliate_link" => "https://amzn.to/450H4XX", 
        "image_url" => "loja_virtual\\img\\smartphones\\514hAJCEjRL._AC_SX569_.jpg",
        "descricao" =>
            "&bull; Smooth 6.74\" 90Hz display
            &bull; Massive 5000mAh (typ) battery
            &bull; 10W Type-C PD fast charging
            &bull; 50MP AI triple camera
            &bull; Dual SIM+microSD"
    )
    // Adicione mais produtos conforme necessário
);

header('Content-Type: application/json');
echo json_encode($products);
?>