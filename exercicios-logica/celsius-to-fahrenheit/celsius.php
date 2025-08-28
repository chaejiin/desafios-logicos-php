<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
 
    <h2>Resultado</h2>
 
    <?php
    if (isset($_GET['celsius'])) {
        $celsius = $_GET['celsius'];
 
        
        if (is_numeric($celsius)) {            
            $fahrenheit = ($celsius * 9/5) + 32;
            echo "<p>Em Fahrenheit a temperatura é " . number_format($fahrenheit, 2, ',', '.') . " °F</p>";
        } else {            
            echo "<p style='color: red;'>Dados inválidos. Por favor, insira apenas números.</p>";
        }
    } else {
        echo "<p>Nenhum valor foi enviado.</p>";
    }
    ?>
 
    <br>
    <a href="index.html">Voltar</a>
 
</body>
</html>