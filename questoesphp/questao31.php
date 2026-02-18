<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ORDENAR NUMEROS</h1>

    <form action="" method="get">
        <label for="numero1">DIGITE O 1° NUMERO: </label>
        <input type="text" id="numero1" name="inserir_numero1" required>

        <label for="numero2">DIGITE O 2° NUMERO: </label>
        <input type="text" id="numero2" name="inserir_numero2" required>

        <label for="numero3">DIGITE O 3° NUMERO: </label>
        <input type="text" id="numero3" name="inserir_numero3" required>
        
        <input type="submit" value="enviar">
    </form>
<?php
if(isset($_GET["inserir_numero1"]) && isset($_GET["inserir_numero2"]) && isset($_GET["inserir_numero3"])){
    $n1 = (int) $_GET["inserir_numero1"] ?? 0;
    $n2 = (int) $_GET["inserir_numero2"] ?? 0;
    $n3 = (int) $_GET["inserir_numero3"] ?? 0;

    if($n1 == $n2 || $n1 == $n3 || $n2 == $n3){
        echo "os numeros precisam ser distintos";
    }else{
        $numeros = array($n1,$n2,$n3);
        sort($numeros);
        echo implode(", ", $numeros);
        
}
}
?>
</body>
</html>