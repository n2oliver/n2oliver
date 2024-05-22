<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-adsense-account" content="ca-pub-8124594027670911">
    <title>Minha Loja Virtual</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="collapsible.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8124594027670911"
     crossorigin="anonymous"></script>
</head>
<body>    
    <header>
        <span style="font-size: 64px; font-family: 'Montserrat', sans-serif;">Oliv3r Store</span>
        <br>
        <span style="font-size: 18px">Bem-vindo à nossa loja</span>
        <nav>
            <ul>
                <li><a href="#perfumes">Perfumes</a></li>
                <li><a href="#livros">Livros</a></li>
                <li><a href="#cursos">Cursos</a></li>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script>
        
    $(window).on("resize", () => {
        if(window.screen.width > 768) {
            $('.hightlight-off').addClass('.hightlight').removeClass('.hightlight-off');
        } else {
            $('.hightlight').addClass('.hightlight-off').removeClass('.hightlight');
        }
    })
    var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    if($(this).parent('.collapsible').length && event.target.localName != "h2" || $(event.target).parent(".product").length) return;
    this.classList.toggle("active");
    var content = this.lastElementChild;
    if (content.style.display === "flex") {
      $(content).hide(500);
    } else {
      $(content).show({display: "flex"},1000).css("display", "flex");
    }
  });
}
    </script>
</body>
</html>