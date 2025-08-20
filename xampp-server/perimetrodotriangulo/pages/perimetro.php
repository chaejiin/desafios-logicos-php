<?php
// $perimetro = $_GET["lado1"] + $_GET["lado2"] + $_GET["lado3"]; 
$lado1 = filter_input(INPUT_GET,"lado1",FILTER_VALIDATE_FLOAT);

$lado2 = filter_input(INPUT_GET,"lado2",FILTER_VALIDATE_FLOAT);

$lado3 = filter_input(INPUT_GET,"lado3",FILTER_VALIDATE_FLOAT);

$perimetro=$lado1+$lado2+$lado3;    

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/style.css">
    <title>Perímetro triângulo</title>
</head>

<body>
    <h1>Cálculo do perímetro do triângulo</h1>
    <div id="resultado">
        <p>
            <?= "Lado 1 => " . $_GET["lado1"] ?>
        </p>
        <p>
            <?= "Lado 2 => " . $_GET["lado2"] ?>
        </p>
        <p>
            <?= "Lado 3 => " . $_GET["lado3"] ?>
        </p>

        <p><?php echo "o valor do perimetro é " . $perimetro . "!" ?></p>
    </div>

</body>

</html>