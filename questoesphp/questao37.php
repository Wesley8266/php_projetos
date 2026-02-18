<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ALTURA NORMAL: </h1>

    <form action="" method="get">
        <label for="nome">NOME: </label>
        <input type="text" id="nome" name="inserir_nome" required>
        <br>
        <label for="idade">IDADE: </label>
        <input type="number" id="idade" name="inserir_idade" required>
        <br>
        <label for="altura">ALTURA: </label>
        <input type="number" id="altura" name="inserir_altura" step= "0.01" required>
        <br>
        <label for="genero"> GENERO </label>
        <select id="genero" name="inserir_genero">
            <option value="opcao" selected>escolher opção</option>
            <option value="homem">HOMEM</option>
            <option value="mulher">MULHER</option>
        </select>
        <br>
        <input type="submit" value="enviar">
    </form>

<?php
if(isset($_GET["inserir_nome"]) && isset($_GET["inserir_idade"]) && isset($_GET["inserir_altura"]) && isset($_GET["inserir_genero"])){
    $nome = $_GET["inserir_nome"];
    $idade = $_GET["inserir_idade"];
    $altura = $_GET["inserir_altura"];
    $genero = $_GET["inserir_genero"];

    if($genero != "homem" && $genero != "mulher"){
        echo "insira um genero valido";
    }else{
    if($genero == "homem"){
        if($altura > 1.70){
            if($idade <= 20){
                echo "peso ideal: " . ((72.7 * $altura) - 58);
            }elseif($idade >= 21 && $idade <= 39){
                echo "peso ideal: " . ((72.7 * $altura) - 53);
            }elseif($idade >= 40){
                echo "peso ideal: " . ((72.7 * $altura) - 45);
            }
        }elseif($altura <= 1.70){
            if($idade <= 40){
                echo "peso ideal: " . ((72.7 * $altura) - 50);
        }elseif($idade > 40){
                echo "peso ideal: " . ((72.7 * $altura) - 58);
        }
    }
}elseif($genero == "mulher"){
    if($altura > 1.50){
        echo "peso ideal: " . ((62.1 * $altura) - 44.7);
    }elseif($altura <= 1.50){
        if($idade >= 35){
            echo "peso ideal: " . ((62.1 * $altura) - 45);
        }elseif($idade < 35)
            echo "peso ideal: " . ((62.1 * $altura) - 49);
    }
}
}
}

?>
