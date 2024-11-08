<!DOCTYPE html>
<html lang="pt-br">
<?php include("cabecalho.php"); ?>
<body>
    <?php @include("video-background.php"); ?>
    <div class="col-md-10 col-sm-12 col-lg-10 row d-flex" style="margin: 0 auto">
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-12 col-lg-12 px-0">
            <img src="img/oliver-silva-software-developer.jpg" width="100%"/>
            <?php include("navbar.php"); ?>
            <div class="row px-3">
                <div class="bg-white py-4 mt-2 d-flex" style="background-image: url(img/YSnlRKp0.png); background-position: center; background-size: cover; min-height: 320px; height: auto; justify-content: center; flex-direction: column">
                </div>
                <div class="mt-2 d-flex" style="height: auto; flex-direction: row; overflow-x: scroll">  
                    <div class="container d-inline-flex flex-column">
                        <h1>Sobre o Dev</h1>
                        <p>Se você precisa de um desenvolvedor experiente, e conhecedor de diversas técnicas de programação e marketing digital, Óliver Silva pode te ajudar. Com mais de 15 anos de experiência na área de desenvolvimento de software, ele demonstrou habilidades excepcionais em diversas linguagens de programação e frameworks, contribuindo para vários projetos de alta complexidade e excelentes benefícios aos seus usuários.</p>

                        <div class="icon-box">
                            <div class="icon-item">
                                <i class="fas fa-user-tie"></i>
                                <span>Desenvolvedor Experiente</span>
                            </div>
                            <div class="icon-item">
                                <i class="fas fa-laptop-code"></i>
                                <span>Programação</span>
                            </div>
                            <div class="icon-item">
                                <i class="fas fa-bullhorn"></i>
                                <span>Marketing Digital</span>
                            </div>
                            <div class="icon-item">
                                <i class="fas fa-calendar-alt"></i>
                                <span>15 Anos de Experiência</span>
                            </div>
                            <div class="icon-item">
                                <i class="fas fa-code-branch"></i>
                                <span>Linguagens & Frameworks</span>
                            </div>
                        </div>
                    </div> 
                    <div class="container d-inline-flex flex-column">
                        <h1>Experiência e Habilidades</h1>
                        <p>Com uma vasta experiência no desenvolvimento de software, Óliver tem um profundo conhecimento em design de sistemas, desenvolvimento front-end e back-end, e é proficiente em várias tecnologias modernas. Sua dedicação e paixão pela tecnologia o impulsionam a se manter atualizado com as últimas tendências do mercado.</p>

                        <div class="icon-box">
                            <div class="icon-item">
                                <i class="fas fa-cogs"></i>
                                <span>Design de Sistemas</span>
                            </div>
                            <div class="icon-item">
                                <i class="fas fa-desktop"></i>
                                <span>Desenvolvimento Front-end</span>
                            </div>
                            <div class="icon-item">
                                <i class="fas fa-server"></i>
                                <span>Desenvolvimento Back-end</span>
                            </div>
                            <div class="icon-item">
                                <i class="fas fa-laptop-code"></i>
                                <span>Tecnologias Modernas</span>
                            </div>
                            <div class="icon-item">
                                <i class="fas fa-chart-line"></i>
                                <span>Últimas Tendências</span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="bg-white mt-2 d-inline-flex flex-column">
                    <div style="border: gray solid 2px; width: 100%; height: 200px; background-image: url(img/web-design-technology-browsing-programming-concept.jpg); background-size: cover; background-position: center"></div>
                    
                    <p class="my-2" style="text-align: center">Conheça o meu portfólio 
                    clicando no link abaixo:<br/><a class="btn btn-primary" href="portfolio.php">Conhecer portfólio</a></p>
                </div>
                <?php include("footer.php"); ?>
            </div>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>
    <script>
        $(document).ready(()=>{
            $('.nav-item').removeClass('active');
            $('.nav-item:contains("Sobre mim")').addClass("active");
        });
    </script>
</body>
</html>
