<?php
$mensagem = '';
$classe_css = 'erro'; 
 
if (isset($_GET['celsius']) && is_numeric($_GET['celsius'])) {
    $celsius = floatval($_GET['celsius']);
    $fahrenheit = ($celsius * 9/5) + 32;
    $mensagem = "A temperatura " . number_format($celsius, 1, ',', '.') . " °C equivale a <strong>" . number_format($fahrenheit, 1, ',', '.') . " °F</strong>.";
    $classe_css = 'resultado';
} else {
    $mensagem = "Dado inválido. Por favor, insira um número.";
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
 
    <div class="resultado-container">
<div class="<?php echo $classe_css; ?>">
<p><?php echo $mensagem; ?></p>
</div>
<a href="../index.html" class="button-voltar">Voltar</a>
</div>
 
</body>
</html>