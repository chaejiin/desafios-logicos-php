<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cálculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="container">
        <h2>Resultado do Cálculo de Imposto</h2>
 
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            
            $nome = htmlspecialchars($_GET['nome']);
            $rendaMensal = floatval($_GET['renda']); 
 
            
            $aliquota = 0.075;
 
            
            $impostoDevido = $rendaMensal * $aliquota;
 
            
            echo "<p>Contribuinte: <strong>" . $nome . "</strong></p>";
            echo "<p>Renda Mensal: <strong>R$ " . number_format($rendaMensal, 2, ',', '.') . "</strong></p>";
            echo "<p>Imposto a pagar (7,5%): <strong>R$ " . number_format($impostoDevido, 2, ',', '.') . "</strong></p>";
        } else {
            
            echo "<p>Erro: Nenhum dado recebido. Por favor, preencha o formulário.</p>";
        }
        ?>
 
        <a href="index.html"><button style="background-color: #4b7e5a;">Voltar</button></a>
    </div>
 
</body>
</html>