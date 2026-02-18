<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>TIPO DE SEGURO: </h1>
        <form action="" method="get">

        <label for="nome"> NOME: </label>
        <input type="text" id="nome" name="nome_segurado" required>
        <br>

        <label for="idade"> IDADE: </label>
        <input type="number" id="idade" name="idade_segurado" required>
        <br>

        <label for="categoria">GRUPO DE RISCO: </label>
        <select id="categoria" name="categoria_segurado">
            <option value="opcao" selected>escolher opção</option>
            <option value="baixo">BAIXO</option>
            <option value="medio">MEDIO</option>
            <option value="alto">ALTO</option>
        </select>            
        <br>
        <input type="submit" value="enviar">
    </form>

    <?php
    if(isset($_GET["nome_segurado"]) && isset($_GET["idade_segurado"]) && isset($_GET["categoria_segurado"])){
        $nome = $_GET["nome_segurado"];
        $idade = $_GET["idade_segurado"];
        $grupo = $_GET["categoria_segurado"];

        if($idade < 17 || $idade > 70){
            echo "idade fora de faixa permitida (abaixo de 17 ou acima de 70 anos)";
        }else{
        if($idade >= 17 && $idade <= 20){
            if($grupo == "baixo"){
                $categoria = "1";
            }elseif($grupo == "medio"){
                $categoria = "2";
            }elseif($grupo == "alto"){
                $categoria = "3";
            }
        }elseif($idade >= 21 && $idade <= 24){
            if($grupo == "baixo"){
                $categoria = "2";
            }elseif($grupo == "medio"){
                $categoria = "3";
            }elseif($grupo == "alto"){
                $categoria = "4";
            }
        }elseif($idade >= 25 && $idade <= 34){
            if($grupo == "baixo"){
                $categoria = "3";
            }elseif($grupo == "medio"){
                $categoria = "4";
            }elseif($grupo == "alto"){
                $categoria = "5";
            }
        }elseif($idade >= 35 && $idade <= 64){
            if($grupo == "baixo"){
                $categoria = "4";
            }elseif($grupo == "medio"){
                $categoria = "5";
            }elseif($grupo == "alto"){
                $categoria = "6";
            }
        }elseif($idade >= 65 && $idade <= 70){
            if($grupo == "baixo"){
                $categoria = "7";
            }elseif($grupo == "medio"){
                $categoria = "8";
            }elseif($grupo == "alto"){
                $categoria = "9";
            }
        }
        echo "nome do segurado: $nome" . "<br>" . "idade: $idade" . "<br>" . "categoria de seguro: $categoria";
    }
    }
    ?>