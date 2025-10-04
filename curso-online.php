<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include("cabecalho.php"); ?>
    <style>
        main {
            position: relative;
            background-color: rgba(0,0,0,.8);
            padding: 14px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<?php include("gtagmanager.php"); ?>
    <?php include("video-background.php"); ?>

    <div class="row">
        <div class="col-lg-2 px-0"></div>
        <div class="col-sm-12 col-md-8 col-lg-8 px-0">
            <?php include("navbar.php"); ?>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>


    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 bg-dark bg-opacity-75 mt-2 p-4 rounded text-white">
            <main>
                <h1 class="text-white mb-4">Curso Online de Informática</h1>
                <p class="text-white">Confira abaixo as aulas do nosso curso online de informática. Todos os vídeos estão disponíveis gratuitamente e você pode assistir quando quiser!</p>
                <hr>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card bg-secondary bg-opacity-75 text-white mb-3 shadow">
                            <div class="card-header">Aula 1: Introdução à Informática</div>
                            <div class="card-body">
                                <div class="ratio ratio-16x9">
                                    <iframe width="670" height="377" src="https://www.youtube.com/embed/LuBg3EkBEno" title="Como montar seu PC (computador pessoal)?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                <p class="mt-2">Conceitos básicos, hardware, software e periféricos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-secondary bg-opacity-75 text-white mb-3 shadow">
                            <div class="card-header">Aula 2: O quê é um computador? Introdução à Informática</div>
                            <div class="card-body">
                                <div class="ratio ratio-16x9">
                                    <iframe width="670" height="377" src="https://www.youtube.com/embed/4DV8klWJ2rM" title="O quê é um computador? 🤔 Introdução à Informática" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                <p class="mt-2">composição um computador de forma simples para que todos entendam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <p class="text-white">Se tiver dúvidas sobre o curso, entre em contato pelo e-mail <a href="mailto:suporte@n2oliver.com" class="text-white">suporte@n2oliver.com</a>.</p>
            </main>
        </div>
        <div class="col-lg-2"></div>
    </div>

    <div>
        <?php include("footer.php"); ?>
    </div>
    
</body>
    <?php include("aads.php"); ?>
</html>