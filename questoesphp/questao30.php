<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>salario liquido funcionario(a)</h1>
    <h1>dados do funcionario: </h1>
    <form action="" method="get">

        <label for="nome">NOME : </label>
        <input type="text" id="nome" name="inserir_nome" step="0.01">
        <br>

        <label for="genero"> GENERO: </label>
        <select id="genero" name="genero_funcionario">
            <option value="opcao" selected>escolher opção</option>
            <option value="M">HOMEM</option>
            <option value="F">MULHER</option>
        </select>
        <br>

        <label for="idade"> IDADE: </label>
        <input type="number" id="idade" name="inserir_idade">
        <br>
        
        <label for="salario">SALÁRIO: </label>
        <input type="number" id="salario" name="inserir_salario" step="0.01">
        <br>

        <input type="submit" value="enviar">
   </form>
<?php
if(isset($_GET["inserir_nome"]) && isset($_GET["genero_funcionario"]) && isset($_GET["inserir_idade"]) && isset($_GET["inserir_salario"])){
$nome = $_GET["inserir_nome"];
$genero = $_GET["genero_funcionario"];
$idade = $_GET["inserir_idade"];
$salario = $_GET["inserir_salario"];

if($genero == "M"){
    if($idade >= 30){
        echo "funcionario: $nome " . "<br>" . "salario liquido: R$ " . ($salario + 100);
    }elseif($idade < 30){
        echo "funcionario: $nome " . "<br>" . "salario liquido: R$ " . ($salario + 50);
    }
}
if($genero == "F"){
    if($idade >= 30){
        echo "funcionaria: $nome " . "<br>" . "salario liquido: R$ " . ($salario + 200);
    }elseif($idade < 30){
        echo "funcionaria: $nome " . "<br>" . "salario liquido: R$ " . ($salario + 80);
    }
}
}else{
    echo "insira um valor válido";
}

?>   