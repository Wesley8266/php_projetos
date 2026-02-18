<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>rendimento no fim do mês: </h1>
    <form action="" method="get"> 
       
        <label for="depositado">VALOR DEPOSITADO</label>
        <input type="number" id="depositado" name="deposito" step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    
    $valor_depositado = (float) ($_GET["deposito"] ?? 0);

    $rendimento = $valor_depositado * 0.007;

    if (isset($_GET["deposito"])){
        echo "depositado: " . " R$ "  . number_format($valor_depositado, 2, ',','.') . "<br>";
        echo "rendimento no final do mês: " . " R$ " . number_format($rendimento, 2, ',','.') . "<br>";
        echo "valor ao final do mês: " . " R$ ".  number_format($rendimento + $valor_depositado , 2, ',', '.') . "<br>";
    }else{
        echo "insira um valor válido!";
    }
    
    ?> 
</body>
</html>