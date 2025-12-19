<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include('../g-tags.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-adsense-account" content="ca-pub-8124594027670911">
    <title>Oliv3r Store | n2oliver</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/lojavirtual/img/logoOliverStore-live.jpg">
    <link rel="stylesheet" href="/styles-index.css">
    <link rel="stylesheet" href="/lojavirtual/styles.css">
    <link rel="stylesheet" href="../sobre-mim.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <style>
        .product-card {
            border: 1px solid #eee;
            border-radius: 0px !important;
            overflow: hidden;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            color: #333;
        }

        .product-card .card-img-top {
            width: 100%;
            height: 220px;
            object-fit: contain;
            padding: 15px;
            background-color: #fff;
        }

        .product-card .card-body {
            padding: 1rem;
            flex-grow: 1;
            text-align: left;
        }

        .product-card .card-title {
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .product-card .card-text {
            font-size: 0.8rem;
            color: #333;
            line-height: 1.5;
            text-align: justify;
        }

        .product-card .card-footer {
            background-color: transparent;
            border-top: 1px solid #eee;
            padding: 0.75rem 1rem;
        }

        .product-item {
            width: 250px;
        }

        .section-title {
            font-weight: 500;
        }

        nav>ul>li>a {
            transition: all 0.2s ease-in-out;
        }

        nav>ul>li>a.active {
            background-color: #0d6efd;
            color: white !important;
            border-radius: 5px;
            transform: scale(1.05);
        }

        .store-header nav ul {
            justify-content: center;
        }

        .store-title-h1 {
            font-family: 'Ubuntu', sans-serif;
            font-weight: 700;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Custom styles for nav-pills on dark background */
        .nav-pills .nav-link {
            color: #f8f9fa;
            /* Light color for text */
        }

        .nav-pills .nav-link:not(.active):hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .store-header-new {
            color: white;
            padding: .4rem .2rem;
            border-radius: .25rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .store-header-new h1 {
            font-weight: 700;
        }

        #search-input.form-control::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #ccc;
            opacity: 1;
            /* Firefox */
        }

        #search-input.form-control:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #ccc;
        }
    </style>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script defer
        data-site="e5e969e1-3c42-400f-ab17-83f62c295b9a"
        src="https://cdn.megapush.com.br/MegaPush.js">
    </script>

  <script src="/gtag_dispatcher.js"></script>
  <script type="text/javascript" src="/js/abrir-janela.js"></script>
  <!-- Hotjar Tracking Code for n2oliver.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:6543030,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
</head>

<body class="m-auto">
    <script async src="https://appsha-pnd.ctengine.io/js/script.js?wkey=97NjKiTr7b"></script>
<?php include("../gtagmanager.php"); ?>
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-10 px-0">
            <?php include("../navbar.php"); ?>
        </div>
    </div>

    <div class="row">
        
            
        <div class="col-lg-10 mt-2">
            <header class="store-header-new text-center">
                <h1 class="display-4">Oliv3r Store</h1>
                <p class="lead">Diversos itens para o seu dia a dia.</p>
                <a href="/lojavirtual/sobre-a-loja.php" class="btn btn-outline-light btn-sm">Saiba mais sobre a loja</a>
            </header>
            <div class="mx-auto w-100 text-center" style="font-size: 14px; color: #555; padding: 4px; border-radius: 8px;">
                <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 1;">
                    <iframe title="aads-2417696" data-aa='2417696' src='//acceptable.a-ads.com/2417696/?size=Adaptive'
                                    style='border:0; padding:0; width:70%; height:auto; overflow:hidden;display: block;margin: auto'></iframe>
                    <div style="width: 70%;margin:auto;position: absolute;left: 0;right: 0">
                    <a target="_blank" style="display:inline-block;font-size: 13px;color: #263238;padding: 4px 10px;background: #F8F8F9;text-decoration: none; border-radius: 0 0 4px 4px;" id="frame-link" href="https://aads.com/campaigns/new/?source_id=2417696&source_type=ad_unit&partner=2417696">Advertise here</a>
                    </div>
                </div>
            </div>
            <div class="w-100 p-4" style="
                height: 80vh; 
                background-image: url(/lojavirtual/img/ai-loja.png); 
                background-size: 100% auto; 
                background-position: center; 
                background-repeat: no-repeat;
                background-color: white;
                text-align: right;
                color: #fff;
                -webkit-text-stroke: 2px #000;
                font-family: Ubuntu;
                font-size: 3rem;
                align-content: end;"
                onclick="abrirJanela('https://go.hotmart.com/W101392320U')">
                Encontre aquilo que você precisa
            </div>
            <main class="p-1 rounded" style="background-color: #343a4069;">
                <div style="position: sticky; top: 0; z-index: 9999; background-color: rgba(0,0,0,0.8)" class="m-auto p-1">
                    <nav class="mb-1">
                        <ul class="nav nav-pills justify-content-center flex-wrap">
                            <li class="nav-item"><a class="nav-link active" href="#" data-category="todos">Todos</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" data-category="smartphones">Smartphones</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" data-category="livros">Livros</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" data-category="cursos">Cursos</a></li>
                        </ul>
                    </nav>
                    <div class="mb-1 px-md-5">
                        <input type="search" id="search-input" class="form-control" placeholder="🔎 Buscar produtos por nome...">
                    </div>
                </div>
                <div id="product-grid" class="row g-0" style="align-items: stretch">
                    <!-- Products will be injected here by JavaScript -->
                    <div class="col-12 text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Carregando...</span>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 px-0">
            <?php include('../footer.php'); ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            let allProducts = [];
            let currentCategory = 'todos';
            let searchTerm = '';

            const endpoints = {
                'smartphones': [
                    '/lojavirtual/get_smartphones_apple.php',
                    '/lojavirtual/get_smartphones_samsung.php',
                    '/lojavirtual/get_smartphones_motorola.php',
                    '/lojavirtual/get_smartphones_xiaomi.php'
                ],
                'livros': '/lojavirtual/get_livros.php',
                'cursos': '/lojavirtual/get_cursos.php'
            };

            function fetchProducts(url) {
                return $.ajax({
                    url: url,
                    dataType: 'json'
                });
            }

            function renderProducts(productsToRender) {
                const grid = $('#product-grid');
                grid.empty(); // Limpa o grid antes de adicionar novos produtos

                const availableProducts = productsToRender.filter(p => p.unavailable !== true);

                if (availableProducts.length === 0) {
                    grid.html('<div class="col-12"><p class="text-center text-light">Nenhum produto encontrado com estes critérios.</p></div>');
                    return;
                }

                availableProducts.forEach(product => {
                    const buttonHtml = `<a href="#" onclick="event.preventDefault()" class="btn btn-primary">Ver Produto</a>`;

                    const productCard = `
                        <div class="product-item" data-category="${product.category}" onclick="abrirJanela('${product.affiliate_link}')">
                            <div class="card product-card h-100 border">
                                <img src="${product.image_url}" class="card-img-top shadow border" alt="${product.name}" loading="lazy">
                                <div class="card-body">
                                    <h5 class="card-title">${product.name}</h5>
                                    <div class="card-text">${product.descricao}</div>
                                    <div class="card-footer text-center">
                                        ${buttonHtml}
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    grid.append(productCard);
                });
            }

            // Carrega todos os produtos
            const promises = [];
            for (const category in endpoints) {
                const urls = Array.isArray(endpoints[category]) ? endpoints[category] : [endpoints[category]];
                urls.forEach(url => {
                    promises.push(
                        fetchProducts(url).then(products => {
                            return products.map(p => ({ ...p, category }));
                        })
                    );
                });
            }

            Promise.all(promises)
                .then(results => {
                    allProducts = results.flat(); // Achata o array de arrays
                    applyFiltersAndRender();
                })
                .catch(error => {
                    console.error("Erro ao carregar produtos:", error);
                    $('#product-grid').html('<div class="col-12"><p class="text-center text-danger">Ocorreu um erro ao carregar os produtos. Tente novamente mais tarde.</p></div>');
                });

            function applyFiltersAndRender() {
                let productsToDisplay = [...allProducts].sort(() => 0.5 - Math.random());

                // Filtrar por categoria
                if (currentCategory !== 'todos') {
                    productsToDisplay = productsToDisplay.filter(product => product.category === currentCategory);
                }

                // Filtrar por termo de busca
                if (searchTerm) {
                    productsToDisplay = productsToDisplay.filter(product => product.name.toLowerCase().includes(searchTerm.toLowerCase()));
                }

                renderProducts(productsToDisplay);
            }

            // Evento de clique nas categorias
            $('.nav-pills .nav-link').on('click', function(e) {
                e.preventDefault();
                $('.nav-pills .nav-link').removeClass('active');
                $(this).addClass('active');
                currentCategory = $(this).data('category');
                applyFiltersAndRender();
            });

            // Evento de digitação na busca
            $('#search-input').on('input', function() {
                searchTerm = $(this).val();
                applyFiltersAndRender();
            });
        });
    </script>
</body>
    <?php include("../aads.php"); ?>

</html>