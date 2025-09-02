<?php

$mensagemResultado = '';
$classeResultado = '';


if ($_SERVER['REQUEST_METHOD'] == 'GET') { // nessa linha eu verifico se a página foi acessada via GET (ou seja, pelo formulário)

    
    //$_GET['inicio'] tem o valor que o usuario digitou no campo "inicio".

    //filter_input(...) é uma medida de segurança e limpeza. Em vez de pegar o valor diretamente, ele: Pega o valor do $_GET.    

    //Verifica se ele é um número inteiro (FILTER_VALIDATE_INT).

    //Se for um número, ele o guarda na variável ($inicio). Se não for (ex: o usuário digitou "abc"), ele guarda um valor especial de erro (false).

    $inicio = filter_input(INPUT_GET, 'inicio', FILTER_VALIDATE_INT);
    $final = filter_input(INPUT_GET, 'final', FILTER_VALIDATE_INT);
    $passo = filter_input(INPUT_GET, 'passo', FILTER_VALIDATE_INT);



    // --- LÓGICA DE VALIDAÇÃO ---

    //Primeiro if: "Algum dos valores que recebi não era um número válido (deu false no passo anterior)?". Se sim, preparei uma mensagem de erro.

    //elseif ($passo <= 0): "A pessoa pediu para eu contar de 0 em 0 ou andando para trás? Isso não faz sentido para um incremento." Prepara uma mensagem de erro.

    //elseif ($inicio > $final): "A pessoa quer que eu conte de 10 até 5, andando para frente? Impossível." Prepara uma mensagem de erro.

    //else: Se nenhuma das condições de erro acima for verdadeira, significa que o pedido é perfeito. Agora sim podemos começar a contagem aí entra na logíca da contagem. 

    if ($inicio === false || $final === false || $passo === false) {
        $mensagemResultado = 'Por favor, preencha todos os campos com números válidos.';
        $classeResultado = 'erro';
    } elseif ($passo <= 0) {
        $mensagemResultado = 'O passo deve ser um número maior que zero.';
        $classeResultado = 'erro';
    } elseif ($inicio > $final) {
        $mensagemResultado = 'O valor inicial não pode ser maior que o valor final.';
        $classeResultado = 'erro';
    } else {

        // --- LÓGICA DA CONTAGEM (se a validação passou) ---
        $classeResultado = 'sucesso';
        $contador = $inicio;
        $resultadoString = "Contagem de <strong>$inicio</strong> até <strong>$final</strong> com passo <strong>$passo</strong>:<br><br>";

        while ($contador <= $final) {
            $linha = ''; // A condição while ($contador <= $final) significa: "ENQUANTO o número para o qual estou apontando for menor ou igual ao número final, continue fazendo o que está dentro do bloco."

            //Dentro do bloco, ele decide se escreve "INÍCIO", "FIM" ou só o número.

            if ($contador == $inicio) {
                $linha = "$contador - <strong>INÍCIO</strong>";
            } elseif (($contador + $passo) > $final) {
                $linha = "$contador - <strong>FIM</strong>";
            } else {
                $linha = (string)$contador;
            }

            $resultadoString .= $linha . '<br>';
            $contador += $passo;
        }

        $mensagemResultado = $resultadoString;
    }
} else {
    // Se alguém tentar acessar contagem.php diretamente, redireciona para o formulário
    header('Location: index.html');
    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Contagem</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <main>
        <h1>Resultado</h1>

        <div class="resultado <?= $classeResultado ?>">
            <?= $mensagemResultado ?>
        </div>

        <a href="index.html" class="back-link">Nova Contagem</a>

    </main>
</body>

</html>