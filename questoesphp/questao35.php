<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>CLASSIFICAÇAO DO NADADOR</h1>
        <form action="" method="get">
        <label for="idade">IDADE DO NADADOR: </label>
        <input type="number" id="idade" name="idade_nadador" required>
        <br>

        <input type="submit" value="enviar">
    </form>

    <?php
    if(isset($_GET["idade_nadador"])){
        $idade = (int) $_GET["idade_nadador"];

        if($idade >= 5 && $idade <= 7){
            echo "classificação: INFANTIL A";
        }elseif($idade >= 8 && $idade <= 10){
            echo "classificação: INFANTIL B";
        }elseif($idade >= 11 && $idade <= 13){
            echo "classificação: JUVENIL A";
        }elseif($idade >= 14 && $idade <= 17){
            echo "classificação: JUVENIL B";
        }elseif($idade >= 18 && $idade <= 25){
            echo "classificação: SÊNIOR";
        }else{
            echo "idade fora da faixa etária";
        }
    }
    ?>
</body>
</html>