<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $meta_title = 'Contato — n2oliver';
    $meta_description = 'Entre em contato com n2oliver para projetos, parcerias ou suporte. Envie um e-mail para suporte@n2oliver.com.';
    $meta_image = '/img/n2.jpg';
    $canonical = (isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : 'https://n2oliver.com/contato.php');
    include("cabecalho.php"); ?>
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
        <div class="mx-auto col-md-8 bg-dark bg-opacity-75 mt-2 p-4 rounded text-white">
            <main>
                <h1 class="text-white">Entre em Contato</h1>
                <p class="text-white">
                    Se você tem alguma dúvida, sugestão, ou gostaria de discutir um projeto,
                    sinta-se à vontade para me contatar.
                </p>
                <hr>
                <h3>Informações de Contato</h3>
                <p class="text-white">
                    <strong>E-mail:</strong>
                    <a href="mailto:suporte@n2oliver.com" class="text-white" style="margin: 10px">suporte@n2oliver.com</a>
                </p>
                <p class="text-white">
                    Você também pode me encontrar nas redes sociais listadas no rodapé.
                </p>
            </main>
        </div>
    </div>

    <div class="mx-auto col-md-8">
        <?php include("footer.php"); ?>
    </div>
    
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