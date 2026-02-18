<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>idade 75 pessoas: </h1>
    <form action="" method="get">
        <label for="numero">DIGITE A IDADE: </label>
        <input type="text" id="numero" name="inserir_idade">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    if(isset($_GET["inserir_idade"])){
        $idades = explode(",", $_GET["inserir_idade"]);

        if (count($idades) != 75) {
            echo "digite a idade de 75 pessoas!";
        }else{

            foreach($idades as $i => $idade){
            $idade = (int) trim($idade);

            if($idade >= 18){
            echo "pessoa " . ($i + 1) . " é maior de idade" . "<br>";
            echo "<br>";
            }else{
            echo "pessoa " . ($i + 1) . " é menor de idade" . "<br>";
            echo "<br>";
            }
            }
        }
    }

    ?> 
</body>
</html>