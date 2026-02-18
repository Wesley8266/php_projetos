<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>NOTAS DO ALUNO: </h1>
        <form action="" method="get">

        <label for="nome">NOME DO ALUNO: </label>
        <input type="text" id="nome" name="nome_aluno" required>
        <br>

        <label for="laboratorio">NOTA DO LABORATORIO: </label>
        <input type="number" id="laboratorio" name="nota_laboratorio" required>
        <br>

        <label for="avaliacao">NOTA DA AVALIAÇÃO SEMESTRAL: </label>
        <input type="number" id="avaliacao" name="avaliacao_aluno" required>
        <br>

        <label for="exame">EXAME FINAL: </label>
        <input type="number" id="exame" name="exame_final" required>
        <br>

        <label for="matricula">N° DE MATRICULA: </label>
        <input type="number" id="nome" name="matricula_aluno" required>
        <br>

        <input type="submit" value="enviar">
    </form>

    <?php
    if(isset($_GET["nota_laboratorio"]) && isset($_GET["avaliacao_aluno"])
    && isset($_GET["exame_final"]) && isset($_GET["nome_aluno"]) && isset($_GET["matricula_aluno"])){

        $laboratorio = $_GET["nota_laboratorio"];
        $avaliacao = $_GET["avaliacao_aluno"];
        $exame = $_GET["exame_final"];
        $nome = $_GET["nome_aluno"];
        $matricula = $_GET["matricula_aluno"];

        if($laboratorio > 10 || $avaliacao > 10 || $exame > 10){
            echo "insira um valor válido!";
        }else{
            $media = ((($laboratorio * 2) + ($avaliacao * 3) + ($exame * 5)) / 10);
            echo "media ponderada: $media"."<br>";
        }
    if($media >= 8){
        $classificacao = "A";

    }elseif($media >= 7){
        $classificacao = "B";

    }elseif($media >= 6){
        $classificacao = "C";

    }elseif($media >= 5){
        $classificacao = "D";

    }else{
        $classificacao = "R";
    }

    echo "aluno: $nome" . "<br>" . "matricula: $matricula" . "<br>" . "classificação: $classificacao";
    }
    ?>
