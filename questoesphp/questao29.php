<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>nome/numero do mês: </h1>
    <form action="" method="get">
        <label for="numero">DIGITE O NUMERO: </label>
        <input type="numer" id="numero" name="inserir_numero" step="0.01" required>
        
        <input type="submit" value="enviar">
    </form>

<?php
if(isset($_GET["inserir_numero"])){

$numero_extenso = (float) $_GET["inserir_numero"];

switch ($numero_extenso){
    case 1:
        echo "mês: janeiro";
        break;
    case 2:
        echo "mês: fevereiro";
        break;
    case 3:
        echo "mês: março";
        break;
    case 4:
        echo "mês: abril";
        break;
    case 5:
        echo "mês: maio";
        break;
    case 6:
        echo "mês: junho";
        break;
    case 7:
        echo "mês: julho";
        break;
    case 8:
        echo "mês: agosto";
        break;
    case 9:
        echo "mês: setembro";
        break;
    case 10:
        echo "mês: outubro";
        break;
    case 11:
        echo "mês: novembro";
        break;
    case 12:
        echo "mês: dezembro";
        break;

    default;
        echo "digite um valor válido de 1 a 12!";
}

}

?>

</body>
</html>