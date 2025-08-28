<?php

$nome = htmlspecialchars($_GET['nome']);
$idade = (int) $_GET['idade'];


if ($idade < 11) {
    $faixa = "Criança";
} elseif ($idade >= 12 && $idade <= 17) {
    $faixa = "Adolescente";
} elseif ($idade >= 18 && $idade <= 25) {
    $faixa = "Jovem";
} elseif ($idade >= 26 && $idade <= 60) {
    $faixa = "Adulto";
} else {
    $faixa = "Melhor Idade";
}


if ($idade >= 18) {
    $mensagem = "Bem-vindo, $nome!";
} else {
    $mensagem = "Acesso Negado! Apenas maior de 18 pode ingressar!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Resultado</h2>
        <p><strong>Nome:</strong> <?= $nome ?></p>
        <p><strong>Idade:</strong> <?= $idade ?></p>
        <p><strong>Faixa Etária:</strong> <?= $faixa ?></p>
        <p><strong>Status:</strong> <?= $mensagem ?></p>
        <a href="index.html"><button>Voltar</button></a>
    </div>
</body>
</html>
