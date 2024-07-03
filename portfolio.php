<!DOCTYPE html>
<html lang="pt-br">
    <?php include("cabecalho.php"); ?>
    <body>
        <div class="row">
            <div class="col-lg-2 px-0"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 px-0">
                <img src="img/calculadoras-pediatricas.jpg" class="title-image" width="100%"/>
                <h2 class="title">Portfólio</h2>
                <?php include("navbar.php"); ?>
                <?php include("footer.php"); ?>
            </div>
        </div>
        <script>
            $(document).ready(()=>{
                $('.nav-item').removeClass('active');
                $('.nav-item:contains("Portfólio")').addClass("active");
            });
        </script>
    </body>
</html>
