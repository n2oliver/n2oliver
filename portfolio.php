<!DOCTYPE html>
<html lang="pt-br">
    <?php include("cabecalho.php"); ?>
    <body>
        <div class="row">
            <div class="col-lg-2 px-0"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 px-0">
                <?php include("navbar.php"); ?>
            </div>
            <div class="col-lg-2 px-0"></div>
        </div>
        <div class="row">
            <div class="col-lg-2 px-0"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 px-0">
                <img src="img/calculadoras-pediatricas.jpg" class="title-image" width="100%"/>
                <h2 class="title" style="height: 0px"><a href="https://whitebook.pebmed.com.br/voce-sabe-usar-o-whitebook/" role="button" class="btn btn-primary">Decisões Clínicas</a></h2>
                
            </div>
            
            <div class="col-lg-2 px-0"></div>
        </div>
        <div class="row">
            <div class="col-lg-2 px-0"></div>
            <div class="col-sm-12 col-md-12 col-lg-4 px-0">
                <img src="img/linhaamarela.jpg" class="title-image" width="100%" style="overflow: hidden; height: 212px"/>
                <h2 class="title" style="height: 0px"><a href="/linhaamarela" role="button" class="btn btn-primary">Linha Amarela</a></h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 px-0">
                <img src="img/loja_virtual.jpg" class="title-image" width="100%" style="overflow: hidden; height: 212px"/>
                <h2 class="title" style="height: 0px"><a href="/loja_virtual" role="button" class="btn btn-primary">Loja Virtual</a></h2>
            </div>
            <div class="col-sm-0 col-md-0 col-lg-2 px-0"></div>
        </div>
        <div class="row">
            <div class="col-lg-2 px-0"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 px-0">
                <?php include("footer.php"); ?>
            </div>
            <div class="col-lg-2 px-0"></div>
        </div>
        <script>
            $(document).ready(()=>{
                $('.nav-item').removeClass('active');
                $('.nav-item:contains("Portfólio")').addClass("active");
            });
        </script>
    </body>
</html>
