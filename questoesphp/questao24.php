<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>numero positivo,negativo ou zero: </h1>
    <form action="" method="get">
        <label for="quantidade">DIGITE A QUANTIDADE DE NUMEROS: </label>
        <input type="text" id="quantidade" name="quantidade_numeros" step="0.01" required>

        <label for="numero">DIGITE O(S) NUMERO: </label>
        <input type="text" id="numero" name="inserir_numero" step="0.01" required>

        <input type="submit" value="enviar">
    </form>
   
    <?php
    if(isset($_GET["inserir_numero"]) && isset($_GET["quantidade_numeros"])){
    $n = $_GET["quantidade_numeros"];
    $numeros = $_GET["inserir_numero"]; 

        $numeros = explode(",", $_GET["inserir_numero"]);

        if (count($numeros) != $n) {
            echo "digite $n numeros!";
        }else{
            foreach($numeros as $numero){
            $numero = (float) trim($numero);

            if($numero > 0){
            echo "numero $numero é positivo!" . "<br>";
            }elseif($numero < 0){
            echo "numero $numero é negativo". "<br>";
            }elseif($numero == 0){
            echo "numero $numero é zero". "<br>";
            }
        }
    }
    }
    ?> 
</body>
</html>