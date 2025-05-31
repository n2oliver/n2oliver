<!DOCTYPE html>
<html lang="pt-br">
<?php include("cabecalho.php"); ?>

<body>
    <?php @include("video-background.php"); ?>

    <div class="row">
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-8 col-lg-8 px-0">
            <?php include("navbar.php"); ?>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>
    <div class="row">
        <div class="col-md-2 col-lg-2"></div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                <div class="arrow-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="arrow back-arrow">
                        <path d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            <span class="visually-hidden">Previous</span>
        </button>
        <div class="col-md-8 col-lg-8">
            <div class="row">
                <div id="carouselControls" class="carousel slide carousel-fade col-sm-12 col-md-6 col-lg-6 d-flex align-items-center bg-dark bg-opacity-75" data-bs-ride="carousel">
                    
                    <div class="carousel-inner mt-2">
                        <div class="carousel-item active" style="overflow-x: hidden">
                            <div class="row" style="height: 100%">
                                <div class="px-0 carousel-item-content">
                                    <img class="title-image img-fluid" class="title-image" src="img/combo-memo.png" />
                                    <h2 class="title">
                                        <a href="/jogos/combo-memo/" role="button" class="btn btn-custom">Combo-Memo</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row" style="height: 100%">
                                <div class="px-0 carousel-item-content" style="overflow: clip; height: 100vh;">
                                    <img class="title-image img-fluid" class="title-image" src="img/calculadoras-pediatricas.jpg" />
                                    <h2 class="title">
                                        <a href="https://whitebook.pebmed.com.br/voce-sabe-usar-o-whitebook/" role="button" class="btn btn-custom">Decisões Clínicas</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="px-0 carousel-item-content" style="overflow: clip; height: 100vh;">
                                <img class="title-image img-fluid" class="title-image" src="img/loja_virtual.jpg"/>
                                    <h2 class="title">
                                        <a href="/loja_virtual" role="button" class="btn btn-custom">Loja Virtual</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                </div>

                <div class="text-box col-sm-12 col-md-6 col-lg-6 p-0" data-content-index="0">
                    <div class="bg-white mx-0" style="font-family: Helvetica; min-height: 100vh;">
                        <h1>Combo-Memo</h1>
                        <p>Jogo da memória totalmente open-source e gratuito online</p>
                    </div>
                </div>

                <div class="text-box col-sm-12 col-md-6 col-lg-6 p-0" data-content-index="1" style="display: none">
                    <div class="bg-white mx-0" style="font-family: Helvetica; min-height: 100vh;">
                        <h1>Whitebook</h1>
                        <p>O Whitebook é um sistema abrangente de conteúdo e calculadoras clínicas desenvolvido para fornecer suporte essencial aos profissionais de saúde. Com informações médicas atualizadas e ferramentas de cálculo específicas, o Whitebook é a solução ideal para médicos, enfermeiros e outros profissionais da área da saúde que buscam eficiência e precisão em seus atendimentos.</p>
                        <p>Com o Whitebook, os profissionais de saúde têm acesso rápido a informações essenciais e ferramentas práticas, otimizando o tempo e aprimorando a qualidade do atendimento. É uma ferramenta indispensável para a prática médica moderna.</p>
                    </div>
                </div>

                <div class="text-box col-sm-12 col-md-6 col-lg-6 p-0" data-content-index="2" style="display: none">
                    <div class="bg-white mx-0" style="font-family: Helvetica; min-height: 100vh;">
                        <h1>Oliv3r Store - Loja Virtual</h1>
                        <p>Oliv3r Store é uma loja virtual que oferece uma variedade de produtos, incluindo perfumes, livros, cursos e tecnologia. Navegue pela nossa seleção e descubra produtos que combinam com o seu estilo e interesse.</p>
                    </div>
                </div>
            </div>
        </div>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                <div class="arrow-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="arrow">
                        <path d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
                <span class="visually-hidden">Next</span>
            </button>
        <div class="col-md-2 col-lg-2"></div>
    </div>
    <div class="row pt-3">
        
        <div class="col-md-8 col-lg-8 px-0" style="display: flex; justify-content: center;">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-8 col-lg-8 px-0">
            <?php include("footer.php"); ?>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carouselElement = document.querySelector('#carouselControls');
            const carousel = new bootstrap.Carousel(carouselElement, {
                interval: false, // Define se você quer que o carrossel rode automaticamente
                ride: false
            });

            // Controlar o botão 'prev'
            document.querySelector('.carousel-control-prev').addEventListener('click', function () {
                carousel.prev();
            });

            // Controlar o botão 'next'
            document.querySelector('.carousel-control-next').addEventListener('click', function () {
                carousel.next();
            });

            // Sincronizar o conteúdo de texto conforme o slide do carousel muda
            carouselElement.addEventListener('slide.bs.carousel', function (event) {
                const contentIndex = event.to; // Índice do slide que vai ser exibido
                const textBoxes = document.querySelectorAll('.text-box');
                
                textBoxes.forEach(function (textBox) {
                    if (parseInt(textBox.getAttribute('data-content-index')) === contentIndex) {
                        textBox.style.display = 'block'; // Mostra a caixa de texto correspondente
                    } else {
                        textBox.style.display = 'none'; // Esconde as outras caixas de texto
                    }
                });
            });
        });

    </script>
</body>

</html>