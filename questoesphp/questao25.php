<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>numeros iguais e diferentes: </h1>
    <form action="" method="get">
        <label for="numero1">DIGITE O 1° NUMERO: </label>
        <input type="numer" id="numero1" name="inserir_numero1" step="0.01" required>

        <label for="numero2">DIGITE O 2° NUMERO: </label>
        <input type="number" id="numero2" name="inserir_numero2" step="0.01" required>

        <input type="submit" value="enviar">
    </form>

    <?php
if(isset($_GET["inserir_numero1"]) && isset($_GET["inserir_numero1"])){
    $n1 = $_GET["inserir_numero1"];
    $n2 = $_GET["inserir_numero2"];

    if($n1 == $n2){
        echo "os numeros são iguais!";
    }elseif($n1 != $n2){
        echo "os numeros são diferentes!" . "<br>";
        if($n1 > $n2){
        echo "$n1 é maior que $n2!";
        }else{
        echo "$n2 é maior que $n1!";
        }
    }
}

    ?>