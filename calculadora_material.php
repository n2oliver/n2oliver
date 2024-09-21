<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Material com Perdas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            flex-direction: column;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
            z-index: 1;
            margin: 20px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-group {
            position: relative;
            text-align: left;
        }
        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .tooltip-icon {
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: #0073e6;
            color: #fff;
            text-align: center;
            border-radius: 50%;
            margin-left: 5px;
            cursor: pointer;
            font-size: 14px;
            line-height: 16px;
            vertical-align: middle;
        }
        .tooltip-text {
            display: none;
            background-color: #333;
            color: #fff;
            padding: 5px;
            border-radius: 4px;
            position: absolute;
            left: 20px;
            top: -5px;
            width: 200px;
            z-index: 1;
        }
        .tooltip-icon:hover + .tooltip-text,
        .tooltip-icon:focus + .tooltip-text {
            display: block;
        }
        input[type="number"], input[type="submit"], button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"], button {
            background-color: #28a745;
            color: white;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover, button:hover {
            background-color: #218838;
        }
        #measuresContainer {
            display: flex;
            flex-direction: row;
            overflow-x: scroll;
        }
        #addMeasure {
            border-radius: 10px;
            width: auto;
            padding: 14px;
            height: 45px;
            line-height: 50%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            font-weight: 700;
            margin-top: 14px;
        }
        .measure-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            min-width: 340px;
            margin-right: 20px;
        }
        .measure-item img {
            width: 60px;
            margin-top: 10px;
        }
        .measure-fields {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .measure-fields input {
            width: 100px;
        }
        .result {
            background: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .navbar {
            z-index: 2;
            width: 100%;
        }
        footer {
            width: 100%;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8124594027670911"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
<?php @include("video-background.php"); ?>

    <div class="container col-md-8 col-sm-12 col-lg-8">
        <div class="row">
            <?php @include("navbar.php"); ?>
        </div>
        <h1>Calculadora de Material com Perdas</h1>
        

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

            // Convertendo o fator de perda para decimal
            $fator_perda = $perda / 100;

            // Calculando a quantidade de material necessária
            $quantidade_material = $area_total / ($cobertura * (1 - $fator_perda));

            echo "<div class='result'>";
            echo "<h2>Resultado:</h2>";
            echo "<p>Área total a ser coberta: " . number_format($area_total, 2) . " m²</p>";
            echo "<p>Quantidade de material necessária: " . number_format($quantidade_material, 2) . " unidades</p>";
            echo "</div>";
        }
        ?>
        <form id="calcForm" method="post" action="">
            <div id="measuresContainer">
                <div class="measure-item">
                    <div class="measure-fields">
                        <div class="row">
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label for="nome">Nome da peça:</label><br/>
                                <input type="text" class="nome form-control" name="nome[]" required>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label for="largura">Largura (m):</label><br/>
                                <input type="number" step="0.01" class="largura" name="largura[]" required>
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label for="comprimento">Comprimento (m):</label><br/>
                                <input type="number" step="0.01" class="comprimento" name="comprimento[]" required>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6" style="flex: 0">
                                <img alt="Ícone da peça" src="/img/peca-generica.png" style="margin-top: 10px">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn-danger remover">Remover</button>
                    </div>
                </div>
            </div>
            <button type="button" id="addMeasure">Adicionar medida</button>
            <div class="form-group">
                <label for="cobertura">Área coberta por uma unidade do material (m²/unidade):</label>
                <span class="tooltip-icon" tabindex="0">?</span>
                <span class="tooltip-text">Área que uma unidade do material pode cobrir.</span>
                <input type="number" step="0.01" id="cobertura" name="cobertura" required>
            </div>
            <div class="form-group">
                <label for="perda">Fator de perda (%):</label>
                <span class="tooltip-icon" tabindex="0">?</span>
                <span class="tooltip-text">Insira o percentual de perda esperado durante a aplicação do material.</span>
                <input type="number" step="0.01" id="perda" name="perda" required>
            </div>
            <input type="submit" name="submit" value="Calcular">
        </form>
        
        <div class="col-lg-2 px-0"></div>
        <div class="row">
            <?php include("footer.php"); ?>
        </div>
        <div class="col-lg-2 px-0"></div>
    </div>
    
    <script>
        $(document).ready(function() {
            $('.remover').unbind('click').on('click', function(e) {
                if($('.measure-item').length !== 1) {
                    $(e.target).parents('.measure-item').remove();
                }
            });
            $('#addMeasure').click(function() {
                $('#measuresContainer').append(`
                    <div class="measure-item">
                        <div class="measure-fields">
                            <div class="row">
                                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                    <label for="nome">Nome da peça:</label><br/>
                                    <input type="text" class="nome form-control" name="nome[]" required>
                                </div>
                                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                    <label for="largura">Largura (m):</label><br/>
                                    <input type="number" step="0.01" class="largura" name="largura[]" required>
                                </div>
                                <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                    <label for="comprimento">Comprimento (m):</label><br/>
                                    <input type="number" step="0.01" class="comprimento" name="comprimento[]" required>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6" style="flex: 0">
                                    <img alt="Ícone da peça" src="/img/peca-generica.png" style="margin-top: 10px">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn-danger remover">Remover</button>
                        </div>
                    </div>
                `);
            });
        });
    </script>
</body>
</html>
