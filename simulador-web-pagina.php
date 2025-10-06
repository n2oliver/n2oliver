<body class="oliver-dev">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJNPSQS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <style>
        nav {
              margin-top: 1.5rem !important;
              margin-bottom: 1.5rem !important;
        }
    </style>
    <?php @include("video-background.php"); ?>
    <div class="col-md-10 col-sm-12 col-lg-10 row d-flex" style="margin: 0 auto">
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-12 col-lg-12 px-0">
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
                <div class="container mt-2 d-flex">  
                    <ul style="list-style-type: none" class="text-start"><strong>Tecnologias</strong>
                        <li><input id="html" type="checkbox"/> HTML</li>
                        <li><input id="css" type="checkbox" /> CSS</li>
                        <li><input id="js" type="checkbox" /> JS</li>
                    </ul>
                    <div>
                        <div class="border border-dark">
                            <iframe id="minibrowser"></iframe>
                        </div>
                    </div>
                </div>
            </main>
            <?php include("footer.php"); ?>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>
    <script>
        $(document).ready(()=>{
            const iframe = $('#minibrowser')[0];
            const minibrowser = iframe.contentDocument || iframe.contentWindow.document; 
            minibrowser.open();
            minibrowser.write('<html><body><div style="border: 1px solid #000; width: 100px; height: 60px">Olá, <span style="color:red">mundo</span>!</div></body></html>');
            minibrowser.close();
        });
    </script>
</body>
</html>
