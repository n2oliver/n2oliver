<!DOCTYPE html>
<html lang="pt-br">
    <?php include("cabecalho.php"); ?>
    <body>
        <?php @include("video-background.php"); ?>
        
        <div class="row">
            <div class="col-lg-2 px-0"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 px-0">
                <?php include("navbar.php"); ?>
            </div>
            <div class="col-lg-2 px-0"></div>
        </div>
        <div id="carouselControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner mt-2">
    <div class="carousel-item active">
        <div class="row">
            <div class="col-lg-2 px-0"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 px-0">
                <img src="img/calculadoras-pediatricas.jpg" class="title-image" width="100%"/>
                <h2 class="title" style="height: 0px"><a href="https://whitebook.pebmed.com.br/voce-sabe-usar-o-whitebook/" role="button" class="btn btn-primary">Decisões Clínicas</a></h2>
                
            </div>
            <div class="col-lg-2 px-0"></div>
        </div>
    </div>
    <div class="carousel-item">
      <div class="row">
          <div class="col-lg-2 px-0"></div>
          <div class="col-sm-12 col-md-12 col-lg-8 px-0">
              <img src="img/linhaamarela.jpg" class="title-image" width="100%"/>
              <h2 class="title" style="height: 0px"><a href="/linhaamarela" role="button" class="btn btn-primary">Linha Amarela</a></h2>
          </div>
          <div class="col-lg-2 px-0"></div>
      </div>
    </div>
    <div class="carousel-item">
        <div class="row">
            <div class="col-lg-2 px-0"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 px-0">
                <img src="img/loja_virtual.jpg" class="title-image" width="100%"/>
                <h2 class="title" style="height: 0px"><a href="/loja_virtual" role="button" class="btn btn-primary">Loja Virtual</a></h2>
            </div>
            <div class="col-lg-2 px-0"></div>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
