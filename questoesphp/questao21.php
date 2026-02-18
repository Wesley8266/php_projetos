<?php
session_start();
if(!isset($_SESSION["pessoas"])){
    $_SESSION["pessoas"] = [];
    $_SESSION["aptos"] = 0;
    $_SESSION["nao_aptos"] = 0;
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$nome = $_POST["nome_candidato"];
$genero = $_POST["genero_candidato"];
$idade = (int) $_POST["idade_candidato"];
$saude = $_POST["saude_candidato"];


if($genero == "homem" && $idade >= 18 && $idade <= 45 && $saude == "bom"){
    $apto = true;
    $_SESSION["aptos"]++;
}else{
    $apto = false;
    $_SESSION["nao_aptos"]++;
}


if(!empty($nome) && $genero != "escolher opção" && $idade > 0 && $saude != "escolher opção"){
$_SESSION['pessoas'][] = [
        'nome' => $nome,
        'genero' => $genero,
        'idade' => $idade,
        'saude' => $saude,
        'apto' => $apto ? 'Apto' : 'Inapto'
];
$continuar = $_POST["continuar"] ?? "";

if($continuar == "N" or $continuar == "n"){
if(!empty($_SESSION["pessoas"])){
    foreach($_SESSION["pessoas"] as $pessoa){
        echo "pessoa: Nome: {$pessoa['nome']} - Genero: {$pessoa['genero']} - Idade: {$pessoa['idade']} - Saúde: {$pessoa['saude']} - {$pessoa['apto']}  <br>";
    }
    echo "<hr>";
    echo "aptos: " . $_SESSION["aptos"] . "<br>";
    echo "nao aptos: " . $_SESSION["nao_aptos"];

    session_destroy();
    }
}
}
}else{
    echo "insira um valor válido";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>alistamento militar: </h1>
        <h1>DADOS DO CANDIDATO: </h1>
        <form action="" method="post">

        <label for="nome"> NOME: </label>
        <input type="text" id="nome" name="nome_candidato">
        <br>

        <label for="genero"> GENERO </label>
        <select id="genero" name="genero_candidato">
            <option value="opcao" selected>escolher opção</option>
            <option value="homem">HOMEM</option>
            <option value="mulher">MULHER</option>
        </select>
        <br>

        <label for="idade"> IDADE </label>
        <input type="number" id="idade" name="idade_candidato">
        <br>

        <label for="saude"> SAUDE </label>
        <select id="saude" name="saude_candidato">
            <option value="opcao" selected>escolher opção</option>
            <option value="bom">SAUDE BOA</option>
            <option value="ruim">SAUDE INSTAVEL</option>
        </select>
        <br>

        <label for="continuar">CADASTRAR NOVAMENTE? (S/N): </label>
        <input type="text" name="continuar" maxlength="1" required>
        <br>
        <input type="submit" value="enviar">

    </form>

</body>
</html>