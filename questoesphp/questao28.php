<?php
session_start();

if(!isset($_SESSION["funcionarios"])){
    $_SESSION["aumento_total"] = 0;
    $_SESSION["funcionarios"] = [];
}

$funcionarios = 5;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$nome = $_POST["inserir_nome"];
$salario_atual = (float) $_POST["inserir_salario_atual"];
$salario_minimo= (float) $_POST["valor_minimo"];



if($salario_atual > 0 && $salario_minimo > 0){

    $salarios = $salario_atual / $salario_minimo;

    if($salarios < 3){
        $percentual = 0.50;
    }elseif($salarios <= 10){
        $percentual = 0.20;
    }elseif($salarios <= 20){
        $percentual = 0.15;
    }else{
        $percentual = 0.10;
    }


$aumento = $salario_atual * $percentual;
$novo_salario = $salario_atual + $aumento;

$_SESSION["funcionarios"][] = [
    "nome" => $nome,
    "aumento" => $aumento,
    "novo_salario" => $novo_salario
];

$_SESSION["aumento_total"] += $aumento;

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}
}

foreach($_SESSION["funcionarios"] as $nome_funcionarios){
    echo "Funcionário: " .$nome_funcionarios["nome"] . "<br>";
    echo "Reajuste: R$ " . number_format($nome_funcionarios["aumento"], 2, ',', '.') . "<br>";
    echo "Novo salário: R$ " . number_format($nome_funcionarios["novo_salario"], 2, ',', '.') . "<br><br>";
}


if (count($_SESSION["funcionarios"]) < $funcionarios){
?>

<h2>Funcionário <?php echo count($_SESSION["funcionarios"]) + 1; ?></h2>

    <h1>Reajuste de pagamento</h1>
    <form action="" method="post">
        <label for="nome">NOME DO FUNCIONÁRIO: </label>
        <input type="text" id="numero1" name="inserir_nome" step="0.01" required>

        <label for="salario">SALÁRIO ATUAL: </label>
        <input type="number" id="salario" name="inserir_salario_atual" step="0.01" required>

        <label for="valor_salario">VALOR DO SALARIO MINIMO: </label>
        <input type="number" id="valor_salario" name="valor_minimo" step="0.01" required>

        <input type="submit" value="enviar">
    </form>

<?php
} else {

    echo "Total de aumento na folha: ";
    echo "R$ " . number_format($_SESSION["aumento_total"], 2, ',', '.');

    session_destroy();
}
?>
</body>
</html>