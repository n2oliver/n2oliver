<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include('../g-tags.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-adsense-account" content="ca-pub-8124594027670911">
    <title>Oliv3r Store | n2oliver</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/loja_virtual/img/logoOliverStore-live.jpg">
    <link rel="stylesheet" href="/styles-index.css">
    <link rel="stylesheet" href="/loja_virtual/styles.css">
    <link rel="stylesheet" href="../sobre-mim.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <style>
        .product-card {
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            color: #333;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
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
            font-size: 1.1rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .product-card .card-text {
            font-size: 0.9rem;
            color: #333;
            line-height: 1.5;
        }

        .product-card .card-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #eee;
            padding: 0.75rem 1rem;
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
            padding: 4rem 2rem;
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
    <script type='text/javascript' src='//pl27369832.profitableratecpm.com/f0/b1/79/f0b17922dcf7861be67a02cba8a9b7ee.js'></script>
</head>

<body>

    <div class="row">
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-8 col-lg-8 px-0">
            <?php include("../navbar.php"); ?>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 mt-2">
            <header class="store-header-new text-center mb-4">
                <h1 class="display-4">Oliv3r Store</h1>
                <p class="lead">Diversos itens para o seu dia a dia.</p>
                <a href="/loja_virtual/sobre-a-loja.php" class="btn btn-outline-light btn-sm">Saiba mais sobre a loja</a>
            </header>

            <main class="p-4 rounded" style="background-color: darkslategrey">
                <div class="mb-4 px-md-5">
                    <input type="search" id="search-input" class="form-control" placeholder="🔎 Buscar produtos por nome...">
                </div>
                <nav class="mb-4">
                    <ul class="nav nav-pills justify-content-center flex-wrap">
                        <li class="nav-item"><a class="nav-link active" href="#" data-category="todos">Todos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-category="destaques">Destaques</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-category="smartphones">Smartphones</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-category="perfumes">Perfumes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-category="livros">Livros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" data-category="cursos">Cursos</a></li>
                    </ul>
                </nav>

                <div id="product-grid" class="row g-4">
                    <!-- Products will be injected here by JavaScript -->
                    <div class="col-12 text-center">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Carregando...</span>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="col-lg-2"></div>
    </div>


    <div class="text-light mx-auto mt-3 col-md-8 text-center">
        Anúncios
    </div>
    <div class="container m-auto col-md-8 text-light">
        <script async="async" data-cfasync="false" src="//pl27079464.profitableratecpm.com/297c1c3c46604eb55408b6261c6dd5b3/invoke.js"></script>
        <div id="container-297c1c3c46604eb55408b6261c6dd5b3"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-8 col-lg-8 px-0">
            <?php include('../footer.php'); ?>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            let allProducts = [];
            let currentCategory = 'todos';
            let searchTerm = '';

            const endpoints = {
                'destaques': '/loja_virtual/get_destaques.php',
                'smartphones': [
                    '/loja_virtual/get_smartphones_apple.php',
                    '/loja_virtual/get_smartphones_samsung.php',
                    '/loja_virtual/get_smartphones_motorola.php',
                    '/loja_virtual/get_smartphones_xiaomi.php'
                ],
                'perfumes': [
                    '/loja_virtual/get_perfumes_masculinos.php',
                    '/loja_virtual/get_perfumes_femininos.php'
                ],
                'livros': '/loja_virtual/get_livros.php',
                'cursos': '/loja_virtual/get_cursos.php'
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
                    const buttonHtml = `<a href="${product.affiliate_link}" class="btn btn-primary" target="_blank" rel="noopener noreferrer">COMPRAR</a>`;

                    const productCard = `
                        <div class="col-12 col-md-6 col-lg-4 product-item" data-category="${product.category}">
                            <div class="card product-card h-100 shadow border">
                                <img src="${product.image_url}" class="card-img-top shadow border" alt="${product.name}">
                                <div class="card-body">
                                    <h5 class="card-title">${product.name}</h5>
                                    <div class="card-text">${product.descricao}</div>
                                </div>
                                <div class="card-footer text-center">
                                    ${buttonHtml}
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

</html>