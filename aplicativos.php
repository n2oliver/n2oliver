<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $meta_title = 'Portfólio & Aplicativos | n2oliver';
    $meta_description = 'Conheça projetos, jogos e aplicativos desenvolvidos por Óliver. Portfólio com jogos, ferramentas e soluções web.';
    $meta_image = '/img/linhaamarela.jpg';
    $canonical = (isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : 'https://n2oliver.com/aplicativos.php');
    include("cabecalho.php"); ?>
    <script src="gtag_dispatcher.js" async></script>
</head>

<body class="oliver-dev">
  <script src="js/anuncios.js"></script>
<?php include("gtagmanager.php"); ?>
    <div class="row">
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-8 col-lg-8 px-0">
            <?php include("navbar.php"); ?>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>
    <div class="row">
        <div class="mx-auto col-md-8 col-lg-8 portifolio bg-dark bg-opacity-75 mt-2 mx-auto p-3 rounded shadow">
            <div class="row" style="height: fit-content">
                <div id="carouselControls" class="carousel slide carousel-fade d-flex align-items-center p-0" data-bs-ride="carousel">
                    
                    <div class="carousel-inner mt-2">
                        <div class="carousel-item active" style="overflow-x: hidden">
                            <div class="row">
                                <div class="px-0 carousel-item-content" style="overflow: clip; height: 100vh;">
                                    <img alt="inspetor-visual" class="title-image img-fluid" src="img/insp.png"/>
                                    <h2 class="title">
                                        <a href="https://chromewebstore.google.com/detail/inspetor-visual/kddpnplompfhboemlbfankhjpklalaoi" target="_blank" role="button" class="btn btn-custom">Inspetor Visual Extensão para Navegadores (Chrome)</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="overflow-x: hidden">
                            <div class="row" style="height: 100%">
                                <div class="px-0 carousel-item-content">
                                    <img alt="combo-memo" class="title-image img-fluid" src="img/combo-memo.png" />
                                    <h2 class="title">
                                        <a href="/jogos/combo-memo/" target="_blank" role="button" class="btn btn-custom">Combo-Memo</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row" style="height: 100%">
                                <div class="px-0 carousel-item-content" style="overflow: clip; height: 100vh;">
                                    <img alt="calculadoras-pediatricas" class="title-image img-fluid" src="img/calculadoras-pediatricas.jpg" />
                                    <h2 class="title">
                                        <a href="https://whitebook.pebmed.com.br/planos" target="_blank" role="button" class="btn btn-custom">Decisões Clínicas</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="px-0 carousel-item-content" style="overflow: clip; height: 100vh;">
                                <img alt="lojavirtual" class="title-image img-fluid" src="img/loja_virtual.jpg"/>
                                    <h2 class="title">
                                        <a href="/lojavirtual/" target="_blank" role="button" class="btn btn-custom">Loja Virtual</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="overflow-x: hidden">
                            <div class="row">
                                <div class="px-0 carousel-item-content" style="overflow: clip; height: 100vh;">
                                    <img alt="caca-palavras" class="title-image img-fluid" src="/jogos/img/a.jpg"/>
                                    <h2 class="title">
                                        <a href="/jogos/caca-palavras/" target="_blank" role="button" class="btn btn-custom">Caça-Palavras</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="overflow-x: hidden">
                            <div class="row">
                                <div class="px-0 carousel-item-content" style="overflow: clip; height: 100vh;">
                                    <img alt="palavras-cruzadas" class="title-image img-fluid" src="/jogos/img/flat-crosswords.png"/>
                                    <h2 class="title">
                                        <a href="/jogos/palavras-cruzadas/" target="_blank" role="button" class="btn btn-custom">Palavras-Cruzadas</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item" style="overflow-x: hidden">
                            <div class="row">
                                <div class="px-0 carousel-item-content" style="overflow: clip; height: 100vh;">
                                    <img alt="calculadoramateriais" class="title-image img-fluid" src="img/calc.jpg"/>
                                    <h2 class="title">
                                        <a href="/calculadora/" target="_blank" role="button" class="btn btn-custom">Calculadora</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item" style="overflow-x: hidden">
                            <div class="row" style="height: fit-content; align-content: center;">
                                <div class="px-0 carousel-item-content" style="height: fit-content">
                                    <img alt="linhaamarela" class="title-image img-fluid" src="img/linhaamarela.jpg" />
                                    <h2 class="title">
                                        <a href="/jogos/linhaamarela/" target="_blank" role="button" class="btn btn-custom">Linha Amarela</a>
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
                        <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    </div>
                </div>
                <div class="text-box p-0" data-content-index="0">
                    <div class="bg-light p-3 rounded my-2 mx-auto" style="font-family: Helvetica"><h1>Calculadora</h1>
                    <p>
                    Copie o HTML e o CSS de qualquer elemento de uma página com apenas um clique. Basta selecionar o componente desejado para obter rapidamente sua estrutura HTML e seus estilos CSS, facilitando estudos, prototipação, depuração e desenvolvimento web.
                    </p>
                    <p>
                    Ideal para desenvolvedores, designers e estudantes que desejam analisar interfaces, reutilizar componentes ou acelerar a criação de projetos.
                    </p>
                    <strong>Recursos</strong>
                    <ul>
                        <li>✔ Copiar HTML de qualquer elemento da página</li>
                        <li>✔ Copiar CSS automaticamente</li>
                        <li>✔ Seleção rápida e intuitiva</li>
                        <li>✔ Funciona diretamente no navegador</li>
                        <li>✔ Interface simples e leve</li>
                        <li>✔ Aumenta a produtividade no desenvolvimento web</li>
                    </ul>
                    <strong>Indicado para</strong>
                    Desenvolvedores Front-end<br>
                    Web Designers<br>
                    Estudantes de HTML, CSS e JavaScript<br>
                    Análise de interfaces<br>
                    Prototipação rápida<br>
                    Estudos de componentes e layouts<br>
                    <p>
                    Copie elementos, analise estilos e acelere seu fluxo de trabalho sem complicações.
                    </p>

                    <div class="text-center">
                        <a href="https://chromewebstore.google.com/detail/inspetor-visual/kddpnplompfhboemlbfankhjpklalaoi">
                            <button class="btn btn-primary">
                                <strong>Acessar</strong>
                            </button>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="text-box p-0" data-content-index="1" style="display: none">
                    <div class="bg-light p-3 rounded my-2 mx-auto" style="font-family: Helvetica">
                        <h1>Combo-Memo</h1>
                        <p>Um jogo da memória clássico, desenvolvido com JavaScript puro e CSS para ser leve e divertido. O projeto inclui animações dinâmicas, sistema de combos e comemorações, oferecendo uma experiência de jogo engajante e totalmente gratuita no navegador.</p>
                        
                        <div class="text-center">
                            <a href="/jogos/combo-memo/"><button class="btn btn-danger"><strong>Jogar agora</strong></button></a>
                        </div>
                    </div>
                </div>

                <div class="text-box p-0" data-content-index="2" style="display: none">
                    <div class="bg-light p-3 rounded my-2 mx-auto" style="font-family: Helvetica">
                        <h1>Whitebook</h1>
                        <p>O Whitebook é um sistema abrangente de conteúdo e calculadoras clínicas desenvolvido para fornecer suporte essencial aos profissionais de saúde. Com informações médicas atualizadas e ferramentas de cálculo específicas, o Whitebook é a solução ideal para médicos, enfermeiros e outros profissionais da área da saúde que buscam eficiência e precisão em seus atendimentos.</p>
                        <p>Com o Whitebook, os profissionais de saúde têm acesso rápido a informações essenciais e ferramentas práticas, otimizando o tempo e aprimorando a qualidade do atendimento. É uma ferramenta indispensável para a prática médica moderna.</p>
                        
                        <div class="text-center">
                            <a href="https://whitebook.pebmed.com.br/planos"><button class="btn btn-primary"><strong>Acessar</strong></button></a>
                        </div>
                    </div>
                </div>

                <div class="text-box p-0" data-content-index="3" style="display: none">
                    <div class="bg-light p-3 rounded my-2 mx-auto" style="font-family: Helvetica">
                        <h1>Oliv3r Store - Loja Virtual</h1>
                        <p>A Oliv3r Store é um espaço de afiliados onde apresento uma curadoria pessoal de produtos que uso e recomendo. O foco é oferecer valor real, com descrições originais e uma seleção cuidadosa de tecnologia, livros e cursos, alinhados aos temas de desenvolvimento e bem-estar do site.</p>
                        
                        <div class="text-center">
                            <a href="/lojavirtual/"><button class="btn btn-primary"><strong>Acessar</strong></button></a>
                        </div>
                    </div>
                </div>

                <div class="text-box p-0" data-content-index="4" style="display: none">
                    <div class="bg-light p-3 rounded my-2 mx-auto" style="font-family: Helvetica">
                        <h1>Caça-Palavras</h1>
                        <p>Venha jogar Caça-Palavras com a gente!
                        No Caça-Palavras, cada partida é uma nova descoberta.
                        As palavras estão escondidas entre as !letras e cabe a você encontrá-las.
                        <ul>
                            <li>Simples de jogar</li>

                            <li>Bom para treinar a atenção</li>

                            <li>Perfeito para passar o tempo</li>
                        </ul>
                        Jogue no seu ritmo e divirta-se encontrando cada palavra escondida.
                        Será que você consegue achar todas?</p>
                        <div class="text-center">
                            <a href="/jogos/caca-palavras/"><button class="btn btn-danger"><strong>Jogar agora</strong></button></a>
                        </div>
                    </div>
                </div>

                <div class="text-box p-0" data-content-index="5" style="display: none">
                    <div class="bg-light p-3 rounded my-2 mx-auto" style="font-family: Helvetica">
                        <h1>Desafie-se nas Palavras Cruzadas!</h1>
                        
                        <p>As <strong>Palavras Cruzadas</strong> são um clássico que exercita a mente e amplia o vocabulário — com um ritmo tranquilo e descomplicado.</p>

                            <ul>
                                <li>Teste seus conhecimentos</li>
                                <li>Aprenda palavras novas</li>
                                <li>Relaxe enquanto resolve</li>
                            </ul>

                            <p>Tem alguns minutos? Complete a grade no seu tempo e divirta-se descobrindo cada resposta.</p>
                        <div class="text-center">
                            <a href="/jogos/palavras-cruzadas/"><button class="btn btn-danger"><strong>Jogar agora</strong></button></a>
                        </div>
                    </div>
                </div>

                <div class="text-box p-0" data-content-index="6" style="display: none">
                    <div class="bg-light p-3 rounded my-2 mx-auto" style="font-family: Helvetica"><h1>Calculadora</h1>
                    <p>
                    A Calculadora é uma ferramenta desenvolvida para auxiliar na realização de cálculos matemáticos com rapidez e precisão. Ideal para tarefas do dia a dia, estudos e atividades profissionais, ela permite efetuar operações de forma prática, proporcionando mais agilidade e conveniência na resolução de contas e expressões numéricas.
                    </p>

                    <div class="text-center">
                        <a href="/calculadora/">
                            <button class="btn btn-primary">
                                <strong>Acessar</strong>
                            </button>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="text-box align-items-center p-0" data-content-index="7" style="display: none">
                    <div class="bg-light p-3 rounded my-2 mx-auto" style="font-family: Helvetica">
                        <h1>Linha Amarela</h1>
                        <p>🚨 Os monstros estão voltando. Você está pronto? 👾<br>
                            No dia 27 de junho de 2025, o jogo Linha Amarela retorna com novos desafios, visuais impactantes e uma jogabilidade viciante no estilo Arkanoid.<br>
                            🔥 Prepare-se para enfrentar ondas de criaturas brilhantes em um cenário distópico.<br>
                            🎮 Mostre sua habilidade, quebre as defesas e salve o que restou!<br>
                            💥 Totalmente gratuito e direto no navegador.<br>
                            🌐 Compatível com desktop e mobile.<br>
                            
                        <div class="text-center">
                            <a href="/jogos/linhaamarela/"><button class="btn btn-danger"><strong>Jogar agora</strong></button></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <button class="carousel-control-prev rounded-circle btn btn-lg" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                <div class="arrow-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="arrow back-arrow">
                        <path d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            <span class="visually-hidden">Previous</span>
        </button>
            <button class="carousel-control-next rounded-circle btn btn-lg" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                <div class="arrow-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="arrow">
                        <path d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
                <span class="visually-hidden">Next</span>
            </button>
    </div>
    <div class="row pt-3">
        
        <div class="col-md-8 col-lg-8 px-0" style="display: flex; justify-content: center;">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 px-0">
            <?php include("footer.php"); ?>
        </div>
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
            carouselElement.addEventListener('slid.bs.carousel', function (event) {
                const contentIndex = event.to; // Índice do slide que vai ser exibido
                const textBoxes = document.querySelectorAll('.text-box');
                if(contentIndex)
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
  <ins class="694a631a1ff44624521f1703" style="display:inline-block;width:1px;height:1px;"></ins>
  <script>
    ! function(e, n, c, t, o, r, d) {
      ! function e(n, c, t, o, r, m, d, s, a) {
        s = c.getElementsByTagName(t)[0], (a = c.createElement(t)).async = !0, a.src = "https://" + r[m] + "/js/" + o + ".js?v=" + d, a.onerror = function() {
          a.remove(), (m += 1) >= r.length || e(n, c, t, o, r, m)
        }, s.parentNode.insertBefore(a, s)
      }(window, document, "script", "694a631a1ff44624521f1703", ["cdn.bmcdn6.com"], 0, new Date().getTime())
    }();
  </script>
</body>
    <?php include("aads.php"); ?>

</html>