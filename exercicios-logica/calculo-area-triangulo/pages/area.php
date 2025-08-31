<?php
$base = filter_input(INPUT_GET, "base", FILTER_VALIDATE_FLOAT);
$altura = filter_input(INPUT_GET, "altura", FILTER_VALIDATE_FLOAT);

if ($base === false || $altura === false || $base <= 0 || $altura <= 0) {
    $mensagem = "Valores inválidos! Use apenas números positivos.";
} else {
    $area = ($base * $altura) / 2;    
    $areaFormatada = number_format($area, 2, ',', '.');
    $mensagem = "O valor da área é " . $areaFormatada;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/style.css">
    <title>Área do triângulo</title>
</head>
<body>
    
    <div id="resultado">
        <h1>Resultado</h1>
        
        <p>Base informada: <?= htmlspecialchars($_GET["base"]) ?? 'N/A' ?></p>
        <p>Altura informada: <?= htmlspecialchars($_GET["altura"]) ?? 'N/A' ?></p>
        
        <p><strong><?= $mensagem ?></strong></p>
    </div>

</body>
</html>