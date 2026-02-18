<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>genero de 56 pessoas: </h1>
    <form action="" method="get">
        <label for="nome">DIGITE NOME DAS 56 PESSOAS: </label>
        <input type="text" id="nome" name="nome_genero">

        <input type="submit" value="enviar">
    </form>
   
    <?php
    if(isset($_GET["nome_genero"])){
        $lista = explode(",", $_GET["nome_genero"]);

        if (count($lista) != 56) {
            echo "digite o nome e o genero de 56 pessoas!";
        }else{
            $homem = 0;
            $mulher = 0;

            foreach($lista as $pessoas) {
                $dados = explode("-", trim($pessoas));

                $nome = $dados[0];
                $genero = strtoupper($dados[1]);

                if($genero == "M"){
                    echo "$nome é homem" . "<br>";
                    echo "<br>";
                    $homem++;
                }else{
                    echo "$nome é mulher" . "<br>";
                    echo "<br>";
                    $mulher++;
                }
            }echo "-------------------------" . "<br>";
            echo "$homem são homens" . "<br>" . "<br>" . "$mulher são mulheres!";
        }
    }
    ?> 
</body>
</html>