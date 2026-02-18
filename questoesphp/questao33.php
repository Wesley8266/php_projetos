<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CONDIÇÃO DE EXISTENCIA DE TRIANGULOS: </h1>

    <form action="" method="get">
        <label for="ladoA">DIGITE O VALOR DO LAD0 A: </label>
        <input type="number" id="ladoA" name="inserir_ladoA" required>

        <label for="ladoB">DIGITE O VALOR DO LADO B: </label>
        <input type="number" id="ladoB" name="inserir_ladoB" required>

        <label for="ladoC">DIGITE O VALOR DO LADO C: </label>
        <input type="number" id="ladoC" name="inserir_ladoC" required>
        
        <input type="submit" value="enviar">
    </form>
<?php
if(isset($_GET["inserir_ladoA"]) && isset($_GET["inserir_ladoB"]) && isset($_GET["inserir_ladoC"])){
    $a = (int) $_GET["inserir_ladoA"];
    $b = (int) $_GET["inserir_ladoB"];
    $c = (int) $_GET["inserir_ladoC"];

    if($a < $b + $c && $b < $a + $c && $c < $a + $b){
        echo "forma um triangulo!" . "<br>";
        if($a == $b && $b == $c){
        echo "tipo: triangulo equilatero";
    }elseif($a == $b || $b == $c || $c == $a){
        echo "tipo: triangulo isosceles";
    }else{
        echo "tipo: triangulo escaleno";
    }
}else{
    echo "nao forma triangulo!";
}
}
?>