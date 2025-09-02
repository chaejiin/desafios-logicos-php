<?php
$contador = 0; //Inicializando a variável
$resultadoContagem = ""; //Inicializando a variável

do {
    $resultadoContagem = $resultadoContagem . "<li> $contador </li>";
    $contador = $contador + 2;
} while ($contador <= 20);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de 0 a 20</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <main>
        <h1> Contagem com DO WHILE </h1>
        <ul class="resultado sucesso" style="list-style-type: none; padding: 20px; text-align: center;">
            <?= $resultadoContagem ?>
        </ul>
        <a href="../index.html" class="back-link">Voltar</a>
    </main>

</body>