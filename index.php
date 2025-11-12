<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $meta_title = 'Home — n2oliver';
    $meta_description = 'Notícias, jogos e recursos técnicos por Óliver S. Castilho. Confira novidades, jogos online e a Oliv3r Store.';
    $meta_image = '/img/n2.jpg';
    $canonical = (isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : 'https://n2oliver.com/');
    include("cabecalho.php"); ?>
    <meta name='admaven-placement' content=Bqja8pjw8>
    <meta name="pushsdk" content="322d99f94878aedd7de1ac412ba0561c">
    <meta name="af75eac4081069fbc72900cc9a43e129aefae092" content="af75eac4081069fbc72900cc9a43e129aefae092" />
    
</head>
<body class="oliver-dev">
<?php include("./gtagmanager.php"); ?>
    
    <?php include('./sobre-mim.php'); ?>
    
    <script>
        $(document).ready(()=>{
            $('.nav-item').removeClass('active');
            $('.nav-item:contains("Sobre mim")').addClass("active");
            $('.icon-item').on('touchstart', (event) => atualizarIconItens(event.target));
            $('.icon-item').on('click', (event) => atualizarIconItens(event.target));
            $('.icon-item').on('mouseover', (event) => atualizarIconItens(event.target));
        });
        function atualizarIconItens(target) {
            for(let iconItem of target.closest(".icon-box").querySelectorAll(".icon-item")) {
                iconItem.classList.remove("hover");
            }
            target.closest(".icon-item").classList.add("hover");
        }
    </script>
</body>
    <?php include("aads.php"); ?>
</html>
