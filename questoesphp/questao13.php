<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>numero maior que 10: </h1>
    <form action="" method="get">
        <label for="numero">DIGITE UM NUMERO: </label>
        <input type="number" id="numero" name="inserir_numero" step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    
    $verificar = (float) ($_GET["inserir_numero"] ?? 0);

    if (isset($_GET["inserir_numero"])){
            if($verificar > 10){
                echo "o numero $verificar é maior que 10!";
            }
    }else{
        echo "insira um valor válido!";
        }
    ?> 
</body>
</html>