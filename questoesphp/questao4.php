<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> calculo de salário final: </h1>
    <form action="" method="get">
        <label for="vendedor">NOME DO VENDEDOR</label>
        <input type="text" id="vendedor" name="funcionario">

        <label for="salario">SALÁRIO FIXO</label>
        <input type="number" id="salario" name="pagamento" step="0.01">

        <label for="vendas">TOTAL DE VENDAS</label>
        <input type="number" id="vendas" name="total" step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    
    $nome_vendedor =  $_GET["funcionario"] ?? 0;
    $salario_fixo = (float) ($_GET["pagamento"] ?? 0);
    $total_vendas = (float) ($_GET["total"] ?? 0);
    $comissao = $total_vendas * 0.15;

    if (isset($_GET["funcionario"]) && isset($_GET["pagamento"]) && isset($_GET["total"])){
        echo "vendedor: " . $nome_vendedor . "<br>";
        echo "salario fixo: " . $salario_fixo . "<br>";
        echo "total em vendas: " . $total_vendas . "<br>";
        echo "comissão: " . $comissao . "<br>";
        echo "valor final: " . $comissao + $salario_fixo . "<br>";
    }else{
        echo "insira um valor válido!";
    }
    
    ?> 
</body>
</html>