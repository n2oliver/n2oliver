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
                <div class="col-lg-5 bg-white py-4" style="background-image: url(img/YSnlRKp0.png); background-position: center; background-size: cover; min-height: 320px">
                </div>
                <div class="col-lg-6 bg-white mt-2">
                    <h2>Sobre o Dev</h2>
                    <p>Se você precisa de um desenvolvedor experiente, 
                        e conhecedor de diversas técnicas de programação
                        e marketing digital,
                        Óliver Silva pode te ajudar.
                        Com 29 anos e mais de 15 anos de 
                        experiência na área de desenvolvimento de software, 
                        ao longo de sua carreira, ele 
                        demonstrou habilidades excepcionais 
                        em diversas linguagens de programação 
                        e frameworks, contribuindo para 
                        vários projetos de alta 
                        complexidade e excelentes benefícios aos seus usuários.</p>
                </div>
            </div>
            <div class="row px-3">    
                <div class="col-lg-6 bg-white">
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
                <div class="col-lg-5 bg-white">
                    <img src="img/web-design-technology-browsing-programming-concept.jpg" width="80%" style="border: gray solid 2px"/>
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
