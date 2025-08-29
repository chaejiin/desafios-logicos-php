<?php

$nome = htmlspecialchars($_GET['nome'] ?? 'Visitante');
$idade = (int) ($_GET['idade'] ?? 0);
$faixa = '';
$mensagem = '';
$status_class = ''; 


if ($idade <= 11) {
    $faixa = "Criança";
} elseif ($idade <= 17) {
    $faixa = "Adolescente";
} elseif ($idade <= 25) {
    $faixa = "Jovem";
} elseif ($idade <= 60) {
    $faixa = "Adulto";
} else {
    $faixa = "Melhor Idade";
}


if ($idade >= 18) {
    $mensagem = "Bem-vindo(a), $nome!";
    $status_class = 'success'; 
} else {
    $mensagem = "Acesso Negado! Apenas maiores de 18 podem ingressar!";
    $status_class = 'error'; 
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>System Response</h2>
        <p><strong>Nome:</strong> <?= $nome ?></p>
        <p><strong>Idade:</strong> <?= $idade ?></p>
        <p><strong>Faixa Etária:</strong> <?= $faixa ?></p>
        
        <p><strong>Status:</strong> <span class="<?= $status_class ?>"><?= $mensagem ?></span></p>
        
        <a href="../index.html" class="button-link">Voltar</a>
    </div>
</body>
</html>