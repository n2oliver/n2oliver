<!DOCTYPE html>
<html lang="pt-br">
<?php include("cabecalho.php"); ?>
<body>
    <?php @include("video-background.php"); ?>
    <div class="col-md-10 col-sm-12 col-lg-10 row d-flex" style="margin: 0 auto">
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-12 col-lg-12 px-0">
            <img src="img/oliver-silva-software-developer-cover.png" width="100%"/>
            <?php include("navbar.php"); ?>

                
            <div class="mt-2 d-flex about-me" style="height: auto; flex-direction: row; overflow-x: scroll">  
                <div class="container d-flex mb-0" style="border-bottom-left-radius: 0px">
                    <h1 class="w-100 text-center">Sobre o Dev</h1>
                    <div class="row px-3">

                    <div class="bg-white mt-2 d-flex m-auto mb-4" style="background-image: url(img/YSnlRKp0.png); background-position: center; background-size: contain; width: 128px; height: 128px; justify-content: center; flex-direction: column">
                    </div>
                        <p>Se você precisa de um desenvolvedor experiente, e conhecedor de diversas técnicas de programação e marketing digital, Óliver Silva pode te ajudar. Com mais de 15 anos de experiência na área de desenvolvimento de software, ele demonstrou habilidades excepcionais em diversas linguagens de programação e frameworks, contribuindo para vários projetos de alta complexidade e excelentes benefícios aos seus usuários.</p>
                        <script type="text/javascript" src="https://cdn.diclotrans.com/sdk/v1/45303/996bcaef8b45091e9a620d396a8522e6c1eea3a0/lib.js"></script>
                    </div> 

                </div>
                <div class="container d-flex flex-column mb-0" style="border-bottom-right-radius: 0px">
                    <h1 class="w-100 text-center">Experiência e Habilidades</h1>
                    <p>Com uma vasta experiência no desenvolvimento de software, Óliver tem um profundo conhecimento em design de sistemas, desenvolvimento front-end e back-end, e é proficiente em várias tecnologias modernas. Sua dedicação e paixão pela tecnologia o impulsionam a se manter atualizado com as últimas tendências do mercado.</p>

                </div>
            </div>

            <div class="row px-3">
                <div class="d-flex about-me px-0 d-none" style="
                        width: 100%;
                        width: -moz-available;          /* For Mozzila */
                        width: -webkit-fill-available;  /* For Chrome */
                        width: stretch;
                        justify-content: center">  
                    <div class="container d-flex flex-column px-0 mx-0"  style="border-top-left-radius: 0px; border-top-right-radius: 0px">
                        <h1>Jogos - Em desenvolvimento</h1>
                        <p>Lugar para compra de jogos.</p>

                    </div>
                </div>
                <div class="row px-0">
                    <div class="icon-box">
                        <div class="icon-item" title="Especialista em desenvolvimento web com foco em performance, usabilidade e código limpo.">
                            <i class="fas fa-user-tie"></i>
                            <span>Desenvolvedor Experiente</span>
                        </div>
                        <div class="icon-item" title="Construção de sistemas, sites e ferramentas com foco em performance e usabilidade.">
                            <i class="fas fa-laptop-code"></i>
                            <span>Programação</span>
                        </div>
                        <div class="icon-item" title="Criatividade, dados e alcance: tudo para sua marca crescer no digital.">
                            <i class="fas fa-bullhorn"></i>
                            <span>Marketing Digital</span>
                        </div>
                        <div class="icon-item" title="Experiência sólida em desenvolvimento web, design e tecnologia.">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Mais de 15 Anos de Experiência</span>
                        </div>
                        <div class="icon-item" title="Domínio de tecnologias como HTML, CSS, JavaScript, PHP, React, Laravel e mais.">
                            <i class="fas fa-code-branch"></i>
                            <span>Linguagens & Frameworks</span>
                        </div>
                        
                        <div class="icon-item" title="Do front ao back, escrevo com as ferramentas certas para cada desafio.">
                            <i class="fas fa-cogs"></i>
                            <span>Design de Sistemas</span>
                        </div>
                        <div class="icon-item" title="Interfaces modernas, responsivas e centradas na experiência do usuário.">
                            <i class="fas fa-desktop"></i>
                            <span>Desenvolvimento Front-end</span>
                        </div>
                        <div class="icon-item" title="APIs robustas, integrações eficientes e bancos de dados bem estruturados.">
                            <i class="fas fa-server"></i>
                            <span>Desenvolvimento Back-end</span>
                        </div>
                        <div class="icon-item" title="Trabalho com ferramentas atuais para soluções rápidas, seguras e escaláveis.">
                            <i class="fas fa-laptop-code"></i>
                            <span>Tecnologias Modernas</span>
                        </div>
                        <div class="icon-item" title="Antenado nas tendências que movem o design, o código e a experiência digital.">
                            <i class="fas fa-chart-line"></i>
                            <span>Últimas Tendências</span>
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
