<!DOCTYPE html>
<html lang="pt-br">
<?php include("cabecalho.php"); ?>
<body>
    <div class="row">
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-12 col-lg-8 px-0">
            <img src="img/oliver-silva-software-developer.jpg" width="100%"/>
            
            <?php include("navbar.php"); ?>

            <div class="row px-3 mt-2">
                <div class="col-6 bg-white">
                    <img src="img/web-design-technology-browsing-programming-concept.jpg" width="80%"/>
                </div>
                <div class="col-6 bg-white mt-0">
                    <h2>Óliver Silva Castilho</h2>
                    <p>Óliver Silva Castilho é um 
                        desenvolvedor experiente com 29 
                        anos e mais de 15 anos de 
                        experiência na área de 
                        desenvolvimento de software. Ao 
                        longo de sua carreira, ele 
                        demonstrou habilidades excepcionais 
                        em várias linguagens de programação 
                        e frameworks, contribuindo para 
                        diversos projetos de alta 
                        complexidade e impacto.</p>
                </div>
            </div>
            <div class="row px-3">    
                <div class="col-6 bg-white">
                    <h2>Experiência e Habilidades</h2>
                    <p>Com uma vasta experiência no 
                        desenvolvimento de software, Óliver tem um profundo conhecimento em 
                        design de sistemas, desenvolvimento 
                        front-end e back-end, e é 
                        proficiente em várias tecnologias 
                        modernas. Sua dedicação e paixão 
                        pela tecnologia o impulsionam a se 
                        manter atualizado com as últimas 
                        tendências do mercado.</p>
                </div>
                <div class="col-6 bg-white">
                    <img src="img/calculadoras-pediatricas.jpg" width="80%" style="border: gray solid 2px"/>
                    <p class="my-2" style="text-align: center">Conheça o meu portifólio 
                        clicando no link abaixo:<br/><a class="btn btn-primary" href="portfolio.php">Conhecer portifólio</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 px-0"></div>
        
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-12 col-lg-8 px-0">
            <?php include("footer.php"); ?>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(()=>{
            $('.nav-item').removeClass('active');
            $('.nav-item:contains("Sobre mim")').addClass("active");
        });
    </script>
</body>
</html>
