<?php

$nome = filter_input(INPUT_GET, "nome");
$nascimento = filter_input(INPUT_GET, "nascimento", FILTER_VALIDATE_INT); 


$anoAtual = date("Y"); 
$idade = ($anoAtual - $nascimento);

if ($idade >= 18) {
    $mensagem = "<p>Seu nome é: <strong>" . htmlspecialchars($nome) . "</strong></p>" .
        "<p>Sua idade é: <strong>" . $idade . " anos</strong></p>" .
        "<p>Você é <strong>maior</strong> de idade!</p>";
} else {
    $mensagem = "<p>Seu nome é: <strong>" . htmlspecialchars($nome) . "</strong></p>" .
        "<p>Sua idade é: <strong>" . $idade . " anos</strong></p>" .
        "<p>Você é <strong>menor</strong> de idade!</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Idade</title>
    <link rel="stylesheet" href="../CSS/style.css"> 
</head>
<body>
    <div class="resultado">
        <h1>Resultado:</h1>
        
        <?= $mensagem ?>
    </div>
</body>
</html>