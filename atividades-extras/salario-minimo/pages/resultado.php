<?php

const SALARIO_MINIMO = 1293.20;


$mensagem = '';
$classe_css = 'erro';


$salario_usuario = filter_input(INPUT_GET, 'salario_usuario', FILTER_VALIDATE_FLOAT);


if ($salario_usuario === false || $salario_usuario <= 0) {

    $mensagem = "Valor inválido! Por favor, insira um valor de salário numérico e positivo.";
    $classe_css = 'erro';
} else {

    $classe_css = 'sucesso';

    // ############ MUDANÇA PRINCIPAL AQUI ############      

    $quantidade_salarios_inteiros = (int)($salario_usuario / SALARIO_MINIMO);
    // ele pega o salário que o usuário digitou (armazenado na variável $salario_usuario) e divide pelo salário mínimo (armazenado na constante SALARIO_MINIMO)
    // O operador `(int)` antes da operação converte o resultado para um número inteiro, descarta a parte decimal.
    // Referência na documentação do PHP sobre Conversão de Tipos (Type Casting): https://www.php.net/manual/pt_BR/language.types.type-juggling.php#language.types.typecasting

    $resto_do_salario = fmod($salario_usuario, SALARIO_MINIMO);
    $resto_do_salario = fmod($salario_usuario, SALARIO_MINIMO);
    // (MELHORIA) Calcula o valor que "sobra" do salário após subtrair os salários mínimos inteiros.
    // É usado fmod() porque ele calcula o resto da divisão para números decimais (ponto flutuante).
    // O operador % é usado para números inteiros.

    // Formata os números para o padrão brasileiro (R$), facilitando a leitura.
    $salario_usuario_formatado = number_format($salario_usuario, 2, ',', '.');
    $salario_minimo_formatado = number_format(SALARIO_MINIMO, 2, ',', '.');
    $resto_formatado = number_format($resto_do_salario, 2, ',', '.');


    $mensagem = "Seu salário é de <strong>R$ {$salario_usuario_formatado}</strong>.<br><br>" .
        "Considerando o salário mínimo de <strong>R$ {$salario_minimo_formatado}</strong>, você ganha o equivalente a <strong>{$quantidade_salarios_inteiros}</strong> salários mínimos completos.<br><br>" .
        "Adicionalmente, sobram <strong>R$ {$resto_formatado}</strong>.";
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cálculo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <main>
        <h1>Resultado do Cálculo</h1>

        <div class="resultado <?php echo $classe_css; ?>">
            <?php echo $mensagem; ?>
        </div>

        <a href="../index.html" class="back-link">Voltar</a>
    </main>
</body>

</html>