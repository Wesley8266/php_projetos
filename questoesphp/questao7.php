<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> conversão de temperatura: </h1>
    <form action="" method="get">

        <label for="temperatura">TEMPERATURA EM °C</label>
        <input type="number" id="temperatura" name="conversao"  step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    $temp = (float) ($_GET["conversao"] ?? 0);
    $converter = ($temp * 1.8) + 32;
    if (isset($_GET["conversao"])){
        echo "temperetura em °F : $converter";
    }else{
        echo "insira um valor válido!";
    }
    
    ?> 
</body>
</html>
