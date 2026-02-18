<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>valor das 5 parcelas de um produto: </h1>
    <form action="" method="get">
        <label for="parcelas">VALOR DO PRODUTO</label>
        <input type="number" id="parcelas" name="valor" step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    
    $valor_produto = (float) ($_GET["valor"] ?? 0);
    $valor_parcelas = $valor_produto / 5;

    if (isset($_GET["valor"])){
        if($valor_produto == 0){
            echo "insira um valor válido!";
        } else{
            echo "valor das parcelas: " . " R$ " . number_format($valor_parcelas, 2, ',','.');
        }
    }else{
        echo "insira um valor válido!";
    }
    ?> 
</body>
</html>