<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include('../g-tags.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8124594027670911"
     crossorigin="anonymous"></script>
     <meta name="google-adsense-account" content="ca-pub-8124594027670911">
    <title>Oliv3r Store | n2oliver</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/loja_virtual/img/logoOliverStore-live.jpg">
    <link rel="stylesheet" href="/styles-index.css">
    <link rel="stylesheet" href="/loja_virtual/styles.css">
    <link rel="stylesheet" href="/loja_virtual/collapsible.css">
    <link rel="stylesheet" href="/loja_virtual/loja.css">
    <link rel="stylesheet" href="../sobre-mim.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8124594027670911"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <style>
        .subsection-content {
            position: relative !important;
        }
        .ads {
            max-width: 100% !important;
            overflow: hidden;
        }
    </style>
</head>

<body>
    


<div class="row">
        <div class="col-sm-12 col-md-12 col-lg-10 px-0">
    <header class="store-header">
        <?php include("../navbar.php"); ?>
        <span class="store-title">Oliv3r Store</span>
        <br>
        <span class="store-subtitle">Bem-vindo à nossa loja!</span><br>
        <span class="store-welcome-text">Explore Oliv3r Store, <br>uma variedade de livros, fragrâncias <br>e cursos online em um único lugar.</span>
        <nav>
            <ul>
                <li><a href="#perfumes" data-id="perfumes">Perfumes</a></li>
                <li><a href="#destaques" data-id="destaques">Destaques</a></li>
                <li><a href="#livros" data-id="livros">Livros</a></li>
                <li><a href="#cursos" data-id="cursos">Cursos</a></li>
                <li><a href="#smartphones" data-id="smartphones">Smartphones</a></li>
            </ul>
        </nav>
        </header>

    <section id="destaques" class="collapsible">
        <h2 class="section-title">Destaques</h2>
        <div id="destaques-container" class="section content d-flex"></div>
    </section>
    <section id="smartphones" class="collapsible multiple">
        <h2 class="section-title">Smarphones</h2>
        <div id="smartphones-container" class="section content d-flex">
            <h3 class="section-title subsection-title">Xiaomi</h3>
            <div class="subsection">
                <div id="smartphones_xiaomi-container" class="section subsection-content content d-flex"></div>
            </div>

            <h3 class="section-title subsection-title">Samsung</h3>
            <div class="subsection">
                <div id="smartphones_samsung-container" class="section subsection-content content d-flex"></div>
            </div>

            <h3 class="section-title subsection-title">Apple</h3>
            <div class="subsection">
                <div id="smartphones_apple-container" class="section subsection-content content d-flex"></div>
            </div>

            <h3 class="section-title subsection-title">Motorola</h3>
            <div class="subsection">
                <div id="smartphones_motorola-container" class="section subsection-content content d-flex"></div>
            </div>
        </div>
    </section>
    <section id="perfumes" class="collapsible multiple">
        <h2 class="section-title">Perfumes</h2>
        
        <div id="perfumes-container" class="section content d-flex">
            <h3 class="section-title subsection-title">Para Cavalheiros</h3>
            <div class="subsection">
                <div id="perfumes_masculinos-container" class="section subsection-content content d-flex"></div>
            </div>

            <h3 class="section-title subsection-title">Para Damas</h3>
            <div class="subsection">
                <div id="perfumes_femininos-container" class="section subsection-content content d-flex"></div>
            </div>
        </div>
    </section>

    <section id="livros" class="collapsible">
        <h2 class="section-title">Livros</h2>
        <div id="livros-container" class="section content"></div>
    </section>

    <section id="cursos" class="collapsible">
        <h2 class="section-title">Cursos</h2>
        <div id="cursos-container" class="section content"></div>
    </section>
    <?php include('../footer.php'); ?>

</div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/loja_virtual/script.js"></script>
    <script>
        $("nav>ul>li>a").on("click", () => {
            const sectionId = event.target.dataset.id;
            $(`section[id="${sectionId}"]`).get(0).classList.toggle("active")
            const content = $(`section[id="${sectionId}"]`).find(".content:last-child");
            content.show({}, 1000);
            content.css({ display: "flex" });
                setTimeout(()=>{
                    window.location=`#${sectionId}`
                }, 500)

        });
        $(".subsection-title").on("click", () => {
            $(".subsection-title").next().find(".section");
            if($(event.target.nextElementSibling.firstElementChild).is(":visible")) {
                $(event.target.nextElementSibling.firstElementChild).hide(500);
            } else {
                $(event.target.nextElementSibling.firstElementChild).show({}, 1000).css("display", "flex");
            }
        });

        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                if (
                    $(this).parent('.collapsible').length && event.target.localName != "h2" ||
                    $(event.target).hasClass("content") ||
                    $(event.target).hasClass("product") ||
                    $(event.target).hasClass("subsection-title") ||
                    $(event.target).hasClass(".subsection-content") ||
                    $(event.target).parent('.subsection-content').length ||
                    $(event.target).parent('.subsection-content').length ||
                    $(event.target).parent(".product").length
                ) return;
                this.classList.toggle("active");
                var content = this.lastElementChild;
                if (content.style.display === "flex") {
                    $(content).hide(500);
                } else {
                    $(content).show({}, 1000).css("display", "flex");
                }
            });
        }
    </script>
</body>

</html>