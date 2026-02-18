<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>acrescimo de um produto: </h1>
    <form action="" method="get">
        <label for="produto">VALOR DO PRODUTO EM R$</label>
        <input type="number" id="produto" name="valor_produto" step="0.01">

        <label for="acrescimo">VALOR DO ACRESCIMO EM %</label>
        <input type="number" id="acrescimo" name="valor_acrescimo" step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    
    $preco_produto = (float) ($_GET["valor_produto"] ?? 0);
    $preco_acrescimo = (float) ($_GET["valor_acrescimo"] ?? 0);
    $percentual_acrescimo = $preco_produto * ($preco_acrescimo / 100);
    $valor_final = $preco_produto + $percentual_acrescimo;

    if (isset($_GET["valor_produto"]) && isset($_GET["valor_acrescimo"])){
            echo "valor após acrescimo: " . " R$ " . number_format($valor_final, 2, ',','.');
        } else{
            echo "insira um valor válido!";
        }
    ?> 
</body>
</html>