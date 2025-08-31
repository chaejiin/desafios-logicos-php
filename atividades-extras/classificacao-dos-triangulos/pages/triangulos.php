<?php

$mensagem = '';
$classe_css = 'erro';
$imagem_triangulo_svg = ''; 


$ladoA = filter_input(INPUT_GET, 'ladoA', FILTER_VALIDATE_FLOAT);
$ladoB = filter_input(INPUT_GET, 'ladoB', FILTER_VALIDATE_FLOAT);
$ladoC = filter_input(INPUT_GET, 'ladoC', FILTER_VALIDATE_FLOAT);


if ($ladoA === false || $ladoB === false || $ladoC === false || $ladoA <= 0 || $ladoB <= 0 || $ladoC <= 0) {
    $mensagem = "Valores inválidos! Por favor, insira apenas números positivos para os três lados.";
} else {
   
    if (($ladoA + $ladoB > $ladoC) && ($ladoA + $ladoC > $ladoB) && ($ladoB + $ladoC > $ladoA)) {
        $classe_css = 'sucesso';
        $tipo_triangulo = '';

        
        if ($ladoA == $ladoB && $ladoB == $ladoC) {
            $tipo_triangulo = "Equilátero";
            
            $imagem_triangulo_svg = '<svg viewBox="0 0 100 87"><polygon points="50,0 100,87 0,87" stroke="currentColor" stroke-width="4" fill="transparent"/></svg>';
        } elseif ($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC) {
            $tipo_triangulo = "Isósceles";
            
            $imagem_triangulo_svg = '<svg viewBox="0 0 100 100"><polygon points="50,10 90,90 10,90" stroke="currentColor" stroke-width="4" fill="transparent"/></svg>';
        } else {
            $tipo_triangulo = "Escaleno";
            
            $imagem_triangulo_svg = '<svg viewBox="0 0 100 90"><polygon points="10,80 95,70 20,5" stroke="currentColor" stroke-width="4" fill="transparent"/></svg>';
        }

        $mensagem = "Os lados <strong>{$ladoA}</strong>, <strong>{$ladoB}</strong> e <strong>{$ladoC}</strong> formam um triângulo <strong>{$tipo_triangulo}</strong>.";

    } else {
        
        $mensagem = "Os valores informados não formam um triângulo válido. A soma de dois lados deve ser sempre maior que o terceiro lado.";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Análise</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h1>Resultado da Análise</h1>
        
        <div class="resultado <?php echo $classe_css; ?>">
            <?php
                
                if (!empty($imagem_triangulo_svg)) {
                    echo $imagem_triangulo_svg;
                }
                echo $mensagem;
            ?>
        </div>

        <a href="../index.html" class="back-link">Voltar</a>
    </main>
</body>
</html>