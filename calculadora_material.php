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
        input[type="number"], input[type="submit"] {
            width: -moz-available;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            background: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .navbar {
            z-index: 2;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8124594027670911"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles-index.css">
</head>

<body>
<?php @include("video-background.php"); ?>

    <div class="container col-md-8 col-sm-12 col-lg-8">

<div class="row">
    <?php @include("navbar.php"); ?>
</div>
        <h1>Calculadora de Material com Perdas</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="area">Superfície (m²):</label>
                <span class="tooltip-icon" tabindex="0">?</span>
                <span class="tooltip-text">Superfície onde o material será utilizado (m²).</span>
                <br/>
                <input type="number" step="0.01" id="area" name="area" required>
            </div>
            
            <div class="form-group">
                <label for="cobertura">Área coberta por uma unidade do material (m²/unidade):</label>
                <span class="tooltip-icon" tabindex="0">?</span>
                <span class="tooltip-text">Área que uma unidade do material pode cobrir.</span>
                <br/>
                <input type="number" step="0.01" id="cobertura" name="cobertura" required>
            </div>
            
            <div class="form-group">
                <label for="perda">Fator de perda (%):</label>
                <span class="tooltip-icon" tabindex="0">?</span>
                <span class="tooltip-text">Insira o percentual de perda esperado durante a aplicação do material.</span>
                <br/>
                <input type="number" step="0.01" id="perda" name="perda" required>
            </div>
            <input type="submit" name="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $area = floatval($_POST['area']);
            $cobertura = floatval($_POST['cobertura']);
            $perda = floatval($_POST['perda']);

            // Convertendo o fator de perda para decimal
            $fator_perda = $perda / 100;

            // Calculando a quantidade de material necessária
            $quantidade_material = $area / ($cobertura * (1 - $fator_perda));

            echo "<div class='result'>";
            echo "<h2>Resultado:</h2>";
            echo "<p>Quantidade de material necessária: " . number_format($quantidade_material, 2) . " unidades</p>";
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
        $(document).ready(()=>{
            $('.nav-item').removeClass('active');
            $('.nav-item:contains("Sobre mim")').addClass("active");
        });
    </script>
</body>
</html>
