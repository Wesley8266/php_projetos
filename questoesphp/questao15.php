<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>numero entre 100 e 200: </h1>
    <form action="" method="get">
        <label for="numero">DIGITE O NUMERO: </label>
        <input type="number" id="numero" name="inserir_numero" step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    
    $verificar_numero = (float) ($_GET["inserir_numero"] ?? 0);

    if (isset($_GET["inserir_numero"])){
            if($verificar_numero >= 100 && $verificar_numero <= 200){
                echo "o numero $verificar_numero está entre 100 e 200!";
            }else{
                echo "o numero não está entre 100 e 200!";
            }
    }else{
        echo "insira um valor válido!";
        }
    ?> 
</body>
</html>