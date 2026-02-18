<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> troca de números: </h1>
    <form action="" method="get">

        <label for="numero1">NUMERO 1</label>
        <input type="number" id="numero1" name="n1"  step="0.01">

        <label for="numero2">NUMERO 2</label>
        <input type="number" id="numero2" name="n2"  step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    $valor1 = (float) ($_GET["n1"] ?? 0);
    $valor2 = (float) ($_GET["n2"] ?? 0);

    $troca = $valor1;
    $valor1 = $valor2;
    $valor2 = $troca; 

    if (isset($_GET["n1"]) && isset($_GET["n2"])){
        echo "valor do 1° numero: $valor1" . "<br>";
        echo "valor do 2° numero: $valor2";
    }else{
        echo "insira um valor válido!";
    }
    
    ?> 
</body>
</html>
