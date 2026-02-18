<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> conversão de dolares em reais: </h1>
    <form action="" method="get"> 
       
        <label for="cotacao">COTAÇÃO</label>
        <input type="number" id="cotacao" name="conversao" step="0.01">

        <label for="disponivel">QUANTIDADE DE DOLAR DISPONIVEL</label>
        <input type="number" id="disponivel" name="posse" step="0.01">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    
    $valor_cotacao = (float) ($_GET["conversao"] ?? 0);
    $posse_dolar = (float) ($_GET["posse"] ?? 0);

    $conversao = $valor_cotacao * $posse_dolar;

    if (isset($_GET["conversao"]) && isset($_GET["posse"])){
        echo "cotacao: " .  $valor_cotacao  . "<br>";
        echo "dolar disponivel: " .  $posse_dolar . "<br>";
        echo "valor em reais R$: " . $conversao . "<br>";
    }else{
        echo "insira um valor válido!";
    }
    
    ?> 
</body>
</html>