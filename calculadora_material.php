<!DOCTYPE html>
<html>
<head>
    <title>Cobertura de Superfícies com Perdas</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8124594027670911"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles-calculadora-material.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
<?php @include("video-background.php"); ?>

    <div class="container col-md-8 col-sm-12 col-lg-8">
        <div class="row">
            <?php @include("navbar.php"); ?>
        </div>
        <h1>Cobertura de Superfícies com Perdas</h1>
        
        <form id="calcForm" method="post" action="">

            <div class="d-flex justify-content-between">
                <button type="button" id="addMeasure">Adicionar medida</button>
            </div>
            <div id="measuresContainer">
                
            </div>
            <div class="d-flex justify-content-between">
                <div class="form-group mx-2">
                    <label for="cobertura">Cobertura por unidade<br>(m²/unidade):
                    <span class="tooltip-icon" tabindex="0">?</span></label>
                    <span class="tooltip-text">Área que uma unidade do material pode cobrir.</span>
                    <input type="number" step="0.01" id="cobertura" name="cobertura" required>
                </div>
                <div class="form-group mb-0 mx-2">
                    <label for="perda">Fator de perda (%):
                    <span class="tooltip-icon" tabindex="0">?</span><br><br></label>
                    <span class="tooltip-text">Insira o percentual de perda esperado durante a aplicação do material.</span>
                    <input type="number" step="0.01" id="perda" name="perda" required>
                </div>
            </div>
            <input class="btn btn-primary mt-0 w-100" type="submit" name="submit" value="Calcular">
        </form>
        

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $larguras = $_POST['largura'];
            $comprimentos = $_POST['comprimento'];
            $area_total = 0;

            for ($i = 0; $i < count($larguras); $i++) {
                $area_total += floatval($larguras[$i]) * floatval($comprimentos[$i]);
            }

            $cobertura = floatval($_POST['cobertura']);
            $perda = floatval($_POST['perda']);
            $multiplicadorDeCoberturaTotal = $cobertura / $area_total;

            // Convertendo o fator de perda para decimal
            $fator_perda = $perda / 100;

            // Calculando a quantidade de material necessária
            $quantidade_material = $area_total / ($cobertura * (1 - $fator_perda));

            echo "<div class='result'>";
            echo "<h2>Resultado:</h2>";
            echo "<p>Área total a ser coberta: " . number_format($area_total, 2) . " m²</p>";
            echo "<p>Quantidade de material necessária: " . number_format($quantidade_material, 2) . " unidades</p>";
            echo "<p>Uma unidade do material cobre: " . number_format($multiplicadorDeCoberturaTotal, 2) . " vezes a área total</p>";
            echo "</div>";
        }
        ?>
        <div class="col-lg-2 px-0"></div>
        <div class="row">
            <?php include("footer.php"); ?>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>
    
    <script>
        $(document).ready(function() {
            $('#addMeasure').click(adicionarPeca);
            adicionarPeca();
        });
        function adicionarPeca() {
                $('#measuresContainer').append(`<div class="measure-item">
                    <div class="measure-fields">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 mb-0 align-content-center" style="flex: 0; height: 100px">
                                <img alt="Ícone da peça" src="/img/peca-generica.png" style="margin-top: 10px">
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6 text-center mb-0">
                                <div class="row">
                                    <div class="col-6" style="width: 20px !important; flex: 0 0 20px">
                                        <input type="range" min="0.01" max="100" value="50" step="0.01" class="comprimento slider" name="comprimento[]" oninput="this.nextElementSibling.innerText=this.value" orient="vertical" style="height: 100px" required>
                                        <span>50</span>
                                    </div>
                                    <div class="col-6 align-content-center" style="width: 20px !important; flex: 0 0 20px">
                                        <label for="comprimento" class="mt-1">Comprimento (m)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6 text-center">
                                <label for="largura" class="mt-0">Largura (m):</label>
                                <input type="range" min="0.01" max="100" value="50" step="0.01" class="largura slider" name="largura[]" oninput="this.nextElementSibling.innerText=this.value" style="width: 100px" required>
                                <span>50</span>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label for="nome" class="mt-0">Nome da peça:</label>
                                <input type="text" class="nome form-control" style="font-size: .8rem;" name="nome[]" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn-danger remover" onclick="event.preventDefault()">Remover</button>
                    </div>
                </div>`);
                rolarParaOFim();
                $('.remover').unbind('click').on('click', function(e) {
                    if($('.measure-item').length !== 1) {
                        $(e.target).parents('.measure-item').remove();
                    }
                });
            }
            function rolarParaOFim() {
                const container = document.getElementById('measuresContainer');
                container.scrollTo({
                    top: container.scrollHeight,
                    behavior: "smooth"
                });
            }
    </script>
</body>
</html>
