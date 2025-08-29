<?php

$mensagem = '';
$classe_css = 'erro'; 


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
 
    $valorA = $_GET['valorA'] ?? '';
    $valorB = $_GET['valorB'] ?? '';
    $valorC = $_GET['valorC'] ?? '';

    
    if (!is_numeric($valorA) || !is_numeric($valorB) || !is_numeric($valorC)) {
        
        $mensagem = 'Dados inválidos. Por favor, digite os valores numéricos.';
        $classe_css = 'erro';
    } else {
       
        $numA = floatval($valorA);
        $numB = floatval($valorB);
        $numC = floatval($valorC);

        $soma = $numA + $numB;

       
        $mensagem = "A soma entre $numA e $numB é: <strong>$soma</strong>. ";

        if ($soma < $numC) {
            $mensagem .= "A soma é menor que $numC.";
        } else {
            $mensagem .= "A soma não é menor que $numC.";
        }
        
        
        $classe_css = 'sucesso';
    }
} else {
    
    $mensagem = 'Nenhum dado foi enviado. Por favor, preencha o formulário.';
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Soma</title>
    <link rel="stylesheet" href="./../css/style.css">    
   
</head>
<body>
    <main>
        <h1>Resultado</h1>
        
        <div class="resultado <?php echo $classe_css; ?>">
            <?php echo $mensagem; ?>
        </div>

        <a href="../index.html" class="back-link">Voltar</a>
    </main>
</body>
</html>