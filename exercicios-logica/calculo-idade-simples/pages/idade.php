<?php

$nome = filter_input(INPUT_GET, "nome");
$nascimento = filter_input(INPUT_GET, "nascimento", filter: FILTER_VALIDATE_FLOAT);


$idade = (2025 - $nascimento);

if ($idade >= 18) {
    $mensagem = "<p> Seu nome é: " . $nome . "</p>" .
        "<p> Sua idade é: " . $idade . "</p>" .
        "<p> Você é maior de idade!";
} else {
    $mensagem = "<p> Seu nome é: " . $nome . "</p>" .
        "<p> Sua idade é: " . $idade . "</p>" .
        "<p> Você é menor de idade!";
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    <h1>Veja sua idade:</h1>
    <div class="resultado">
        <?= $mensagem ?>
    </div>

</body>

</html>