<?php
$nome  = $_POST['nome'];
$idade = (int) $_POST['idade'];
$valor = (float) $_POST['valor'];
 
$desconto = 0;
 
if ($idade >= 65 && $valor >= 1000) {
    $desconto = $valor * 0.10;
}
 
$total = $valor - $desconto;
?>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
    <div class="container">
        <h2>Resumo da Compra</h2>
        <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
        <p><strong>Idade:</strong> <?= $idade ?> anos</p>
        <p><strong>Valor das Compras:</strong> R$ <?= number_format($valor, 2, ',', '.') ?></p>
        <p><strong>Desconto:</strong> R$ <?= number_format($desconto, 2, ',', '.') ?></p>
        <p><strong>Total a Pagar:</strong> R$ <?= number_format($total, 2, ',', '.') ?></p>
        <br>
        <a href="./index.html">Voltar</a>
    </div>
</body>
</html>