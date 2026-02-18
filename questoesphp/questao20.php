<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>desconto dos carros: </h1>
    <form action="" method="post">
        <label for="ano">ano do veiculo: </label>
        <input type="number" id="ano" name="ano_carro">

        <label for="preco">valor do carro: </label>
        <input type="number" id="preco" name="valor_carro" step="0.01">

        <label for="continuar">deseja continuar calculando(S/N): </label>
        <input type="text" name="continuar" maxlength="1" required>

        <input type="submit" value="enviar">
    </form>

<?php
session_start();

if(!isset($_SESSION["total_carros"])){
    $_SESSION["total_carros"] = 0;
}

if(!isset($_SESSION["total_carros_2000"])){
    $_SESSION["total_carros_2000"] = 0;
}

if(!isset($_SESSION["soma_total"])){
    $_SESSION["soma_total"] = 0;
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){
$ano_veiculo= (int) $_POST["ano_carro"] ?? 0;
$valor = (float) $_POST["valor_carro"] ?? 0;

    if($ano_veiculo <= 2000){
    $desconto = $valor * 0.12;
    $valor_final = $valor - $desconto;
    $_SESSION["total_carros_2000"]++;
    $_SESSION["total_carros"]++;
     
    }else{
    $desconto = $valor * 0.07;
    $valor_final = $valor - $desconto;
    $_SESSION["total_carros"]++;
    }

    $_SESSION["soma_total"] += $valor_final;

    $continuar = $_POST["continuar"] ?? "";
    
    echo "----------------------------------------------------" . "<br>";
    echo "desconto do ultimo carro: $desconto" . "<br>";
    echo "valor final: $valor_final" . "<br>";

    if($continuar == "N" or $continuar == "n"){
        echo "---------------------------------------------------" . "<br>";
        echo "total geral de carros: " . $_SESSION["total_carros"] . "<br>"; 
        echo "total de carros até 2000: " . $_SESSION["total_carros_2000"]. "<br>";
        echo "valor a ser pago: " . $_SESSION["soma_total"]. "<br>";

        session_destroy();
    }
}else{
    echo "insira um valor válido!";
}
?>
</body>
</html>