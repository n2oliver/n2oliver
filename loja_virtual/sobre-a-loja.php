<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include("../cabecalho.php"); ?>
    <link rel="stylesheet" href="../styles-index.css">
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="../sobre-mim.css">
    <style>
        .store-header-new {
            background-size: cover;
            color: white;
            padding: 4rem 2rem;
            border-radius: .25rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .store-header-new h1 {
            font-weight: 700;
        }
    </style>
</head>

<body class="oliver-dev">
<?php include("gtagmanager.php"); ?>
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
                <h1 class="display-4">Sobre a Oliv3r Store</h1>
                <p class="lead">Entenda o propósito da nossa curadoria de produtos.</p>
                <a href="/loja_virtual/" class="btn btn-outline-light btn-sm">Voltar para a Loja</a>
            </header>

            <main class="p-4 rounded bg-light">
                <p>
                    Você pode estar se perguntando: o que uma loja de produtos variados está fazendo no site de um desenvolvedor de software?
                </p>
                <p>
                    A resposta é simples: a Oliv3r Store é uma extensão das minhas paixões e do meu dia a dia. Como profissional de tecnologia e um eterno curioso, estou sempre em busca de ferramentas, livros e gadgets que otimizem meu trabalho e melhorem minha qualidade de vida. Os produtos que você encontra aqui não são apenas uma lista aleatória; são uma <strong>curadoria pessoal</strong> de itens que eu uso, confio e recomendo.
                </p>
                <hr>
                <h3>Nossas Categorias</h3>
                <ul>
                    <li><strong>Tecnologia:</strong> Aparelhos e acessórios que passaram no meu teste de performance e usabilidade.</li>
                    <li><strong>Livros e Cursos:</strong> Materiais que me ajudaram a crescer profissionalmente e pessoalmente.</li>
                    <li><strong>Perfumes e Bem-estar:</strong> Porque equilíbrio é fundamental, e cuidar de si mesmo vai além das telas.</li>
                </ul>
                <p>
                    Ao comprar através dos links de afiliado, você não apenas adquire um produto de qualidade, mas também apoia meu trabalho de criação de conteúdo, jogos e ferramentas gratuitas aqui no n2oliver.com. Obrigado pela confiança!
                </p>
            </main>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-8 col-lg-8 px-0">
            <?php include("../footer.php"); ?>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>
</body>
</html>