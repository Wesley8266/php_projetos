<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>custo de um automovel: </h1>
    <form action="" method="get">
        <label for="produto">VALOR DO CUSTO DE FABRICA: </label>
        <input type="number" id="produto" name="custo_fabrica" step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    
    $preco_produto = (float) ($_GET["custo_fabrica"] ?? 0);

    $imposto = $preco_produto * 0.45;
    $valor_imposto = $preco_produto + $imposto;

    $distribuidor = $valor_imposto * 0.28;

    $valor_final = $valor_imposto + $distribuidor;

    if (isset($_GET["custo_fabrica"])){
            echo "custo do carro novo: " . " R$ " . number_format($valor_final, 2, ',','.');
        } else{
            echo "insira um valor válido!";
        }
    ?> 
</body>
</html>