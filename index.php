<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-adsense-account" content="ca-pub-8124594027670911">
    <title>Oliv3r Store</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/logoOliverStore-live.jpg">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="collapsible.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8124594027670911"
        crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <span style="font-size: 64px;">Oliv3r Store</span>
        <br>
        <span style="font-size: 18px;">Bem-vindo à nossa loja!</span><br>
        <span style="font-size: 18px; color: lightgreen; font-weight: 300">Explore Oliv3r Store, <br>uma variedade de livros, fragrâncias <br>e cursos online em um único lugar.</span>
        <nav>
            <ul>
                <li><a href="#perfumes" data-id="perfumes">Perfumes</a></li>
                <li><a href="#livros" data-id="livros">Livros</a></li>
                <li><a href="#cursos" data-id="cursos">Cursos</a></li>
            </ul>
        </nav>
    </header>

    <section id="destaques">
        <h2 style="margin: 20px">Destaques</h2>

        <div id="destaques-container" class="section"></div>
    </section>

    <section id="perfumes" class="collapsible">
        <h2 style="margin: 20px">Perfumes</h2>

        <div id="perfumes-container" class="section content"></div>
    </section>

    <section id="livros" class="collapsible">
        <h2 style="margin: 20px">Livros</h2>
        <div id="livros-container" class="section content"></div>
    </section>

    <section id="cursos" class="collapsible">
        <h2 style="margin: 20px">Cursos</h2>
        <div id="cursos-container" class="section content"></div>
    </section>
    <footer style="text-align: center; color: white; padding: 24px; background-image: linear-gradient(transparent,#000000)">
        <span style="font-family: Montserrat">Oliv3r Store</span>
        <span style="font-size: 9px">Todos os direitos reservados - Oliv3r Store -  2024</span>
        <span style="font-size: 9px">CNPJ 54.983.228/0001-78</span>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script>

        $(window).on("resize", () => {
            if (window.screen.width > 768) {
                $('.hightlight-off').addClass('.hightlight').removeClass('.hightlight-off');
            } else {
                $('.hightlight').addClass('.hightlight-off').removeClass('.hightlight');
            }
        })
        $("nav>ul>li>a").on("click", () => {
            const sectionId = event.target.dataset.id;
            $(`section[id="${sectionId}"]`).get(0).classList.toggle("active")
            const content = $(`section[id="${sectionId}"]`).find(".content:last-child");
            content.show({}, 1000);
            content.css({ display: "flex" });
                setTimeout(()=>{
                    window.location=`#${sectionId}`
                }, 200)

        });

        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                if (
                    $(this).parent('.collapsible').length && event.target.localName != "h2" ||
                    $(event.target).hasClass("content") ||
                    $(event.target).hasClass("product") ||
                    $(event.target).parent(".product").length
                ) return;
                this.classList.toggle("active");
                var content = this.lastElementChild;
                if (content.style.display === "flex") {
                    $(content).hide(500);
                } else {
                    $(content).show({ display: "flex" }, 1000).css("display", "flex");
                }
            });
        }
    </script>
</body>

</html>