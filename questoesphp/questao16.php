<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> média de notas: </h1>
    <form action="" method="get">
        <label for="nome">NOME DO ALUNO</label>
        <input type="text" id="nome" name="aluno">

        <label for="prova1">PROVA 1</label>
        <input type="number" id="prova1" name="primeira"  step="0.01">

        <label for="prova2">PROVA 2</label>
        <input type="number" id="prova2" name="segunda"  step="0.01">

        <label for="prova3">PROVA 3</label>
        <input type="number" id="prova3" name="terceira"  step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    $aluno = $_GET["aluno"] ?? " ";
    $p1 = (float) ($_GET["primeira"] ?? 0);
    $p2 = (float) ($_GET["segunda"] ?? 0);
    $p3 = (float) ($_GET["terceira"] ?? 0);
    $media = ($p1 + $p2 + $p3) / 3;

    if (isset($_GET["primeira"]) && isset($_GET["segunda"]) && isset($_GET["terceira"])){
        echo "olá $aluno!" . "<br>" . "sua média é: " .  number_format($media, 2, ',','.') . "<br>" ;
        if($media >= 7){
            echo " situação: aprovado!" . "<br>";
        }elseif($media >= 5.1 && $media <= 6.9){
            echo "situação: recuperação!" . "<br>";
        }elseif($media <= 5){
            echo "situação: reprovado!" . "<br>";
        }
    }else{
        echo "insira um valor válido!";
    }
    
    ?> 
</body>
</html>
