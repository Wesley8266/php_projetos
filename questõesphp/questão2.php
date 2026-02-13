<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="numero1">NUMERO 1</label>
        <input type="number" id="numero1" name="primeiro">

        <label for="numero2">NUMERO 2</label>
        <input type="number" id="numero2" name="segundo">

        <input type="submit" value="enviar">
    </form>

    <?php
    
    $n1 = (float) ($_GET["primeiro"] ?? 0);
    $n2 = (float) ($_GET["segundo"] ?? 0);

    if (isset($_GET["primeiro"]) && isset($_GET["segundo"])){
        echo "resultado da soma: " . ($n1 + $n2) . "<br>";
        echo "resultado da subtração: " . ($n1 - $n2) . "<br>";
        echo "resultado da multiplicação: " . ($n1 * $n2) . "<br>";
        if($n2 == 0){
            echo "não é possivel dividir por 0!";
        } else{
             echo "resultado da divisão: " . ($n1 / $n2);
        }
    }else{
        echo "insira um valor válido!";
    }
    
    ?> 
</body>
</html>

