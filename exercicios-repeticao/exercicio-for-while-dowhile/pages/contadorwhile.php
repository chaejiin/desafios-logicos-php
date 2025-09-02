<?php
$contador = 0; //inicializando a variável
$resultadoContagem = ""; //inicializando a variável

while ($contador <= 20) {
    $resultadoContagem = $resultadoContagem . "<li> $contador </li>";
    $contador = $contador + 2;

    // $resultadoContagem .= "<li> $contador </li>";
    // $contador += 2;

}

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
        <h1> Contagem com WHILE </h1>
        <ul class="resultado sucesso" style="list-style-type: none; padding: 20px; text-align: center;">
            <?= $resultadoContagem ?>
        </ul>
        <a href="../index.html" class="back-link">Voltar</a>
    </main>

</body>