<?php

$mensagem_final = '';
$classe_css = 'erro'; 


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $numero_str = $_GET['numero'] ?? '';

    
    if (is_numeric($numero_str)) {
        $numero = floatval($numero_str);
        $classe_css = 'sucesso'; 
        $resultado_pos_neg = '';
        $resultado_par_impar = '';

       
        if ($numero > 0) {
            $resultado_pos_neg = "é <strong>positivo</strong>";
        } elseif ($numero < 0) {
            $resultado_pos_neg = "é <strong>negativo</strong>";
        } else {
            $resultado_pos_neg = "é <strong>zero</strong> (neutro)";
        }

       
        if ($numero != 0) {
            if ($numero % 2 == 0) {
                $resultado_par_impar = " e <strong>par</strong>.";
            } else {
                $resultado_par_impar = " e <strong>ímpar</strong>.";
            }
        } else {
            $resultado_par_impar = "."; 
        }
        
        
        $mensagem_final = "O número $numero $resultado_pos_neg" . $resultado_par_impar;
        
    } else {
      
        $mensagem_final = 'Valor inválido. Por favor, digite um número.';
    }
} else {
    $mensagem_final = 'Nenhum dado foi enviado.';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado da Verificação</title>
  <link rel="stylesheet" href="../css/style.css">
 
</head>
<body>
  <main>
    <h1>Resultado</h1>
    
    <div class="resultado <?php echo $classe_css; ?>">
      <?php echo $mensagem_final; ?>
    </div>

    <a href="../index.html" class="back-link">Voltar</a>
  </main>
</body>
</html>