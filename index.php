<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include("cabecalho.php"); ?>
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
            <header>
                <div class="row pb-3 oliver-dev-parent-wrapper main-content">
                    <div class="col-12 height-0">
                        <span class="oliver-dev-logo" style="font-size: 72px; position: relative">n2oliver</span><br>
                        <span class="desenvolvedor-de-software">
                            Desenvolvedor de Software 
                        </span>
                    </div>
                    <div class="proxima-linha-wrapper col-8 d-flex align-self-end flex-column">
                            <div class="proxima-linha text-white rounded-pill py-0 px-3 w-100 my-3">Óliver S. Castilho
                                <div class="nome-completo-osc" class="mt-4">Pronto para a próxima linha!
                                    <div class="d-flex align-content-end">
                                        <a class="libutton" href="https://www.linkedin.com/comm/mynetwork/discovery-see-all?usecase=PEOPLE_FOLLOWS&followMember=oliver-c-ab2748b9" target="_blank">Seguir no LinkedIn</a>
                                        <a style="font-size: 24px; color: white; background-image: linear-gradient(green, lightgreen, green)" class="px-1 rounded-circle mx-1 align-content-center" href="https://wa.me/5521986695629?text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es!" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                        <a style="font-size: 24px; color: white; background-image: linear-gradient(magenta, pink, magenta)" class="px-1 rounded-circle mx-1 align-content-center" href="https://www.instagram.com/n2oliver/" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a style="font-size: 24px; color: white; background-image: linear-gradient(black, gray, black)" class="px-1 rounded-circle mx-1 align-content-center" href="https://github.com/n2oliver" target="_blank" rel="noopener noreferrer">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>    
                        <div class="d-flex w-100 align-self-end justify-content-between" style="height: fit-content">
                            <div></div>
                            <div class="sob-demanda text-white rounded-pill py-0 px-3" >Software sob<br>demanda<div style="position: fixed; transform: translateY(-28px) scale(200%); right: 8px">⏎</div>
                            </div>
                        </div>
                    </div>
                    <div class="notebook col-4 bg-transparent">

                    </div>
                </div>
            </header>
                
            <?php include("navbar.php"); ?>
            <main>
                <div class="mx-auto col-md-8" style="text-align: center; font-size: 14px; color: #555; padding: 4px; border-radius: 8px;">
                    <script type="text/javascript">
                    atOptions = {
                        'key' : '29929d8720c37977a6ea64b1b7db2d02',
                        'format' : 'iframe',
                        'height' : 50,
                        'width' : 320,
                        'params' : {}
                    };
                    </script>
                    <script type="text/javascript" src="//playedsophomore.com/29929d8720c37977a6ea64b1b7db2d02/invoke.js"></script>
                </div>
                <div class="d-flex flex-column mb-0 p-0 shadow rounded quicksand" style="border-bottom-right-radius: 0px;">
                    <?php include('./noticias.php'); ?>
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
