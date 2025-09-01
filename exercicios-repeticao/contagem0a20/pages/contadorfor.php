<?php
// $contado = 0; //Inicializando a variável
$resultadoContagem = "";

for ($contador = 0; $contador <= 20; $contador = $contador + 2) {
    $resultadoContagem = $resultadoContagem . "<li> $contador </li>";
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de 0 a 20</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1> Contagem com FOR </h1>
    <ul>
       <?= $resultadoContagem ?>
    </ul>

</body>