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
            <div id="carouselControls" class="carousel slide col-sm-12 col-md-6 col-lg-6 d-flex align-items-center bg-dark bg-opacity-75" data-bs-ride="carousel">
                
                <div class="carousel-inner mt-2">
                    <div class="carousel-item active" style="overflow-x: hidden">
                        <div class="row" style="height: 100%">
                            <div class="px-0" style="overflow: clip; height: 100vh;">
                                <img class="title-image" class="title-image" src="" height="100%" />
                                <h2 class="title">
                                    <a href="/jogos/combo-memo" role="button" class="btn btn-custom">Combo-Memo</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="overflow-x: hidden">
                        <div class="row" style="height: 100%">
                            <div class="px-0" style="overflow: clip; height: 100vh;">
                                <img class="title-image" class="title-image" src="img/calculadoras-pediatricas.jpg" height="100%" />
                                <h2 class="title">
                                    <a href="https://whitebook.pebmed.com.br/voce-sabe-usar-o-whitebook/" role="button" class="btn btn-custom">Decisões Clínicas</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="overflow-x: hidden">
                        <div class="row">
                            <div class="px-0" style="overflow: clip; height: 100vh;">
                            <img class="title-image" class="title-image" src="img/linhaamarela.jpg" height="100%" />
                                <h2 class="title">
                                    <a href="/linhaamarela" role="button" class="btn btn-custom">Linha Amarela</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="overflow-x: hidden">
                        <div class="row">
                            <div class="px-0" style="overflow: clip; height: 100vh;">
                            <img class="title-image" class="title-image" src="img/loja_virtual.jpg" height="100%" />
                                <h2 class="title">
                                    <a href="/loja_virtual" role="button" class="btn btn-custom">Loja Virtual</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="overflow-x: hidden">
                        <div class="row">
                            <div class="px-0" style="overflow: clip; height: 100vh;">
                                <img class="title-image" class="title-image" src="img/calculadoramateriais.jpg" height="100%" />
                                <h2 class="title">
                                    <a href="/calculadora_material.php" role="button" class="btn btn-custom">Calculadora de Aplicação de Materiais</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-box col-sm-12 col-md-6 col-lg-6 p-0" data-content-index="0">
                <div class="bg-white mx-0" style="font-family: Helvetica; min-height: 100vh;">
                    <h1>Combo-Memo</h1>
                    <p>Jogo da memória totalmente open-source e gratuito online</p>
                </div>
            </div>

            <div class="text-box col-sm-12 col-md-6 col-lg-6 p-0" data-content-index="0">
                <div class="bg-white mx-0" style="font-family: Helvetica; min-height: 100vh;">
                    <h1>Whitebook</h1>
                    <p>O Whitebook é um sistema abrangente de conteúdo e calculadoras clínicas desenvolvido para fornecer suporte essencial aos profissionais de saúde. Com informações médicas atualizadas e ferramentas de cálculo específicas, o Whitebook é a solução ideal para médicos, enfermeiros e outros profissionais da área da saúde que buscam eficiência e precisão em seus atendimentos.</p>
                    <p>Com o Whitebook, os profissionais de saúde têm acesso rápido a informações essenciais e ferramentas práticas, otimizando o tempo e aprimorando a qualidade do atendimento. É uma ferramenta indispensável para a prática médica moderna.</p>
                </div>
            </div>

            <div class="text-box col-sm-12 col-md-6 col-lg-6 p-0" data-content-index="1" style="display: none">
                <div class="bg-white mx-0" style="font-family: Helvetica; min-height: 100vh;">
                    <h1>Linha Amarela</h1>
                    <p>Linha Amarela é um jogo empolgante do tipo Arkanoid que combina elementos clássicos com uma dinâmica moderna. No jogo, os jogadores enfrentam invasores que aparecem na parte superior da tela, enquanto controlam um sistema de defesa na parte inferior.</p>
                    <p>Com gráficos vibrantes e controles intuitivos, Linha Amarela desafia os jogadores a protegerem sua base e derrotarem os invasores, oferecendo horas de diversão e estratégia. É a escolha perfeita para quem ama jogos retrô com um toque contemporâneo.</p>
                </div>
            </div>

            <div class="text-box col-sm-12 col-md-6 col-lg-6 p-0" data-content-index="2" style="display: none">
                <div class="bg-white mx-0" style="font-family: Helvetica; min-height: 100vh;">
                    <h1>Oliv3r Store - Loja Virtual</h1>
                    <p>Oliv3r Store é uma loja virtual que oferece uma variedade de produtos, incluindo perfumes, livros, cursos e tecnologia. Navegue pela nossa seleção e descubra produtos que combinam com o seu estilo e interesse.</p>
                </div>
            </div>

            <div class="text-box col-sm-12 col-md-6 col-lg-6 p-0" data-content-index="3" style="display: none">
                <div class="bg-white mx-0" style="font-family: Helvetica; min-height: 100vh;">
                    <h1>Calculadora de Materiais com Perda</h1>
                    <p>A Calculadora de Materiais com Perda é uma ferramenta inovadora desenvolvida para simplificar o processo de cálculo e otimização de materiais em diversos projetos de construção e design. Nossa calculadora permite que profissionais e entusiastas estimem com precisão a quantidade de materiais necessários, considerando perdas inevitáveis durante o processo de corte, montagem e instalação.</p>
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
            <script type="text/javascript" src="https://cdn.diclotrans.com/sdk/v1/45303/996bcaef8b45091e9a620d396a8522e6c1eea3a0/lib.js"></script>
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