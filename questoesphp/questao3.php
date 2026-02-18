<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> consumo médio de um automovel: </h1>
    <form action="" method="get">
        <label for="distancia">DISTANCIA PERCORRIDA</label>
        <input type="number" id="distancia" name="percurso">

        <label for="gasto">COMBUSTIVEL GASTO</label>
        <input type="number" id="gasto" name="gasto">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    
    $distancia = (float) ($_GET["percurso"] ?? 0);
    $combustivel = (float) ($_GET["gasto"] ?? 0);
    

    if (isset($_GET["percurso"]) && isset($_GET["gasto"])){
        if($combustivel == 0){
            echo "não é possivel dividir por 0!";
        } else{
            $consumo = $distancia / $combustivel;
            echo "media de consumo: " . $consumo . " km/l";
        }
    }else{
        echo "insira um valor válido!";
    }
    ?> 
</body>
</html>