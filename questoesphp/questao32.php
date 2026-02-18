<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OPERAÇÃO DE NUMEROS: </h1>

    <form action="" method="get">
        <label for="numero1">DIGITE O VALOR DE A: </label>
        <input type="number" id="numero1" name="inserir_numero1">

        <label for="numero2">DIGITE O VALOR DE B: </label>
        <input type="number" id="numero2" name="inserir_numero2">

        <label for="operador">DIGITE O OPERADOR(+,-,/,*): </label>
        <input type="text" id="operador" name="inserir_operador" maxlength = "1" required>
        
        <input type="submit" value="enviar">
    </form>

<?php
if(isset($_GET["inserir_numero1"]) && isset($_GET["inserir_numero2"]) && isset($_GET["inserir_operador"])){
$n1 = (int)$_GET["inserir_numero1"] ?? 0;
$n2 = (int)$_GET["inserir_numero2"] ?? 0;
$operador = $_GET["inserir_operador"];

switch($operador){
    case "+":
        echo "soma: " . ($n1 + $n2);
        break;
    case "-":
        echo "subtração: " .($n1 - $n2);
        break;
    case "*":
        echo "multiplicação: " . ($n1 * $n2);
        break;
    case "/":
        if($n2 == 0){
            echo "nao é possivel dividir por 0 ";
            break;
        }else{
            echo "divisão: ". ($n1 / $n2);
            break;
        }
    default:
        echo "insira um operador válido!";
        break;
}
}

?>
</body>
</html>
