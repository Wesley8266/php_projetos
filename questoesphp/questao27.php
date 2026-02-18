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

        <label for="preco">valor do carro: </label>
        <input type="number" id="preco" name="valor_carro" step="0.01">
        <br><br>

        <label for="combustivel">tipo de combustivel: </label>
        <select id="combustivel" name="tipo_combustivel">
            <option value="opcao" selected>escolher opção</option>
            <option value="alcool">alcool</option>
            <option value="gasolina">gasolina</option>
            <option value="diesel">diesel</option>
        </select>

        <input type="submit" value="enviar">
    </form>


<?php
session_start();

if(!isset($_SESSION["soma_total"])){
    $_SESSION["soma_total"] = 0;
    $_SESSION["desconto"] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$combustivel = $_POST["tipo_combustivel"];
$valor = (float) $_POST["valor_carro"];
$desconto = 0;
$valor_final = 0;

if($combustivel == "alcool"){
    $desconto =  $valor * 0.25;
    $valor_final = $valor - $desconto;

}elseif($combustivel == "gasolina"){
    $desconto =  $valor * 0.21;
    $valor_final = $valor - $desconto;
}elseif($combustivel == "diesel"){
    $desconto =  $valor * 0.14;
    $valor_final = $valor - $desconto;
}

    $_SESSION["soma_total"] += $valor_final;
    $_SESSION["desconto"] += $desconto;

    echo "----------------------------------------------------" . "<br>";
    echo "desconto do ultimo carro: $desconto" . "<br>";
    echo "valor final: $valor_final" . "<br>";

    if($valor == 0 or $valor == 0){
        echo "---------------------------------------------------" . "<br>";
        echo "valor a ser pago: " . $_SESSION["soma_total"]. "<br>";
        echo "total de desconto aplicado: " . $_SESSION["desconto"]. "<br>";

        session_destroy();
    }
}else{
    echo "insira um valor válido!";
}
?>
</body>
</html>