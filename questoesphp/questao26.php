<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>numeros por extenso: </h1>
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
        echo "um";
        break;
    case 2:
        echo "dois";
        break;
    case 3:
        echo "três";
        break;
    case 4:
        echo "quatro";
        break;
    case 5:
        echo "cinco";
        break;

    default;
        echo "digite um valor válido de 1 a 5!";
}

}

?>

</body>
</html>