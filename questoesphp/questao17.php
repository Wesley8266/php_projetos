<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>numero entre 10 e 150: </h1>
    <form action="" method="get">
        <label for="numero">DIGITE O NUMERO: </label>
        <input type="text" id="numero" name="inserir_numero" step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    if(isset($_GET["inserir_numero"])){
        $numeros = explode(",", $_GET["inserir_numero"]);

        if (count($numeros) != 80) {
            echo "digite 80 numeros!";
        }else{
            $contador = 0;

            foreach($numeros as $numero){
            $numero = (float) trim($numero);

            if($numero >= 10 && $numero <= 150){
            $contador++;
            
        }
        }
        echo "$contador estão entre 10 e 150!";
    }
    
    }

    ?> 
</body>
</html>