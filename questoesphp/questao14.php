<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>NUMERO MAIOR: </h1>
    <form action="" method="get">
        <label for="numero1">DIGITE O 1° NUMERO: </label>
        <input type="number" id="numero1" name="inserir_numero1" step="0.01">

        <label for="numero22">DIGITE O 2° NUMERO: </label>
        <input type="number" id="numero2" name="inserir_numero2" step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    
    $n1 = (float) ($_GET["inserir_numero1"] ?? 0);
    $n2 = (float) ($_GET["inserir_numero2"] ?? 0);

    if (isset($_GET["inserir_numero1"]) && isset($_GET["inserir_numero2"])){
            if($n1 > $n2){
                echo "o numero $n1 é maior que $n2!";
            }elseif($n2 > $n1){
                echo "o numero $n2 é maior que $n1!";
            }
    }else{
        echo "insira um valor válido!";
        }
    ?> 
</body>
</html>