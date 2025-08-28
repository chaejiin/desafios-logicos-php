<?php

$base = filter_input(INPUT_GET, "base", FILTER_VALIDATE_FLOAT);

$altura = filter_input(INPUT_GET, "altura", FILTER_VALIDATE_FLOAT);


if ($base == false || $altura == false) {
    $mensagem = "Valores inválidos ! ! ! ";
} else {
    $area = $base * $altura/2;
    $mensagem = "O valor da área é " . $area;

    }

$area = $base * $altura/2;

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
    <h1>Cálculo da área do triângulo</h1>
    
    <div id="resultado">
        <p>
            <?= "base => " . $_GET["base"] ?>
        </p>
        <p>
            <?= "altura => " . $_GET["altura"] ?>
        </p>
        
        <p><?php echo $mensagem ?></p>
    </div>

</body>

</html>