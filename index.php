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
<?php include("../../gtagmanager.php"); ?>
    <style>
        .noticia-conteudo {
            transition: 1s ease;
            -moz-transition: 1s ease;
            -webkit-transition: 1s ease;
        }
    </style>
    
    <div id="sobre-mim" class="col-md-10 col-sm-12 col-lg-10 row d-flex" style="margin: 0 auto">
        <div class="col-sm-12 col-md-12 col-lg-12 px-0 m-auto">
            <?php include("navbar.php"); ?>
            <main>
                <div class="d-flex flex-column mb-0 p-0 shadow rounded quicksand" style="border-bottom-right-radius: 0px;">
                    <?php include('./noticias.php'); ?>
                </div>
                <div class="mx-auto col-md-8" style="text-align: center; font-size: 14px; color: #555; padding: 4px; border-radius: 8px;">                
                    <div class="px-3 text-center mb-3">
                        <a href="https://beta.publishers.adsterra.com/referral/JwWiKrYdak" rel="nofollow"><img alt="banner" src="/img/PNG-160x90-px.png" /></a>
                    </div>
                </div>
            </main>
            <?php include("footer.php"); ?>
        </div>
    </div>
    
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
