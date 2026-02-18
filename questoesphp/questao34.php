<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>calculo de salario</h1>
        <form action="" method="get">
        <label for="horas">QUANTIDADE DE HORAS: </label>
        <input type="number" id="horas" name="horas_trabalho" required>
        <br>

        <label for="nivel">NIVEL DO PROFESSOR: </label>
        <select id="nivel" name="nivel_professor">
            <option value = "opcao" selected>ESCOLHER OPÇAO</option required>
            <option value = "nivel_1">NIVEL 1</option>
            <option value = "nivel_2">NIVEL 2</option>
            <option value = "nivel_3">NIVEL 3</option>
        </select>
        <br>
        <input type="submit" value="enviar">
        </form>

    <?php
    if(isset($_GET["horas_trabalho"]) && isset($_GET["nivel_professor"])){
        $horas = $_GET["horas_trabalho"];
        $nivel = $_GET["nivel_professor"];

        if($nivel == "nivel_1"){
            $salario = $horas * 12;
            echo "salario: R$ $salario";
        }elseif($nivel ==  "nivel_2"){
            $salario = $horas * 17;
            echo "salario: R$ $salario";
        }elseif($nivel == "nivel_3"){
            $salario = $horas * 25;
            echo "salario: R$ $salario";
        }
    }
    ?>
</body>
</html>