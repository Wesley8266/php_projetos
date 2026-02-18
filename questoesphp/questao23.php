<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>numero maior que 80, menor que 25 ou igual a 40: </h1>
    <form action="" method="get">
        <label for="numero">DIGITE O NUMERO: </label>
        <input type="number" id="numero" name="inserir_numero" step="0.01" required>

        <input type="submit" value="enviar">
    </form>

<?php
if(isset($_GET["inserir_numero"])){
$numero = $_GET["inserir_numero"];

if($numero > 80){
    echo "o numero $numero é maior que 80";
}elseif($numero < 25){
    echo "o numero $numero é menor que 25";
}elseif($numero == 40){
    echo "o numero $numero é igual a 40";
}
}
?>
</body>
</html>