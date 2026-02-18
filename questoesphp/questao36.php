<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>calculo de conta de luz</h1>
        <form action="" method="get">
        <label for="consumo">CONSUMO (KW/h): </label>
        <input type="number" id="consumo" name="inserir_consumo" required>
        <br>

        <label for="nivel">TIPO DE CLIENTE: </label>
        <select id="nivel" name="nivel_cliente">
            <option value = "opcao" selected>ESCOLHER OPÇAO</option required>
            <option value = "nivel_1">NIVEL 1 (Residência)</option>
            <option value = "nivel_2">NIVEL 2 (Comércio)</option>
            <option value = "nivel_3">NIVEL 3 (Indústria)</option>
        </select>
        <br>
        <input type="submit" value="enviar">
        </form>
    <?php
    if(isset($_GET["inserir_consumo"]) && isset($_GET["nivel_cliente"])){
        $consumo = $_GET["inserir_consumo"];
        $nivel_cliente = $_GET["nivel_cliente"];

        if($nivel_cliente == "nivel_1"){
            $conta_final = $consumo * 0.60;
            echo "conta de luz: R$ $conta_final";
        }elseif($nivel_cliente ==  "nivel_2"){
            $conta_final = $consumo * 0.48;
            echo "conta de luz: R$ $conta_final";
        }elseif($nivel_cliente == "nivel_3"){
            $conta_final = $consumo * 1.29;
            echo "conta de luz: R$ $conta_final";
        }
    }
    ?>