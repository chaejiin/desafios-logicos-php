<?php

$mensagem = '';
$classe_css = ''; 


if (isset($_GET['celsius'])) {
    $celsius = $_GET['celsius'];

    
    if (is_numeric($celsius)) {
      
        $classe_css = 'resultado';
        
        $fahrenheit = ($celsius * 9/5) + 32;

      
        $mensagem = "A temperatura " . number_format($celsius, 2, ',', '.') . " °C equivale a <strong>" . number_format($fahrenheit, 2, ',', '.') . " °F</strong>.";

    } else {
      
        $classe_css = 'erro';
        $mensagem = "Dados inválidos. Por favor, insira apenas números.";
    }
} else {

    $classe_css = 'erro';
    $mensagem = "Nenhum valor foi enviado.";
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

    <div class="<?php echo $classe_css; ?>">
        <h2>Resultado</h2>
        <p><?php echo $mensagem; ?></p>
    </div>

    <a href="../index.html">Voltar</a>

</body>
</html>