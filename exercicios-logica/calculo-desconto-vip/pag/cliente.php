<?php

$nome = filter_input(INPUT_POST, "nome");
$cliente_escolhido = filter_input(INPUT_POST, "cliente_escolhido");
$valorcompra = filter_input(INPUT_POST, "valorcompra", filter: FILTER_VALIDATE_FLOAT);
$valorpagar = filter_input(INPUT_POST, "valorpagar", filter: FILTER_VALIDATE_FLOAT);

$desconto = $valorcompra * 0.10;

if ($cliente_escolhido == "comum") {
    $mensagem = $nome . " o valor a se pagar é de " . $valorcompra;
}
if ($cliente_escolhido == "vip") {

    $valorpagar = $valorcompra - $desconto;
    $mensagem = $nome . " o valor a se pagar vai ser de " . $valorpagar . " o seu desconto foi de " . $desconto;
}







?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto para loja virtual</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Valor da compra</h1>
    <div class="container">
        <div class="resultado">

            <?= $mensagem; ?>


        </div>
    </div>
</body>

</html>