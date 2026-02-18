<?php
session_start();

$total_produtos = 5; 

if(!isset($_SESSION["contador"])){
    $_SESSION["somaCusto"] = 0;
    $_SESSION["somaVenda"] = 0;
    $_SESSION["contador"] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $preco_custo = (float) $_POST["inserir_custo"];
    $preco_venda = (float) $_POST["inserir_venda"];

    if($preco_custo > 0 && $preco_venda > 0){

        $_SESSION["somaCusto"] += $preco_custo;
        $_SESSION["somaVenda"] += $preco_venda;
        $_SESSION["contador"]++;

        if ($preco_venda > $preco_custo) {
            $_SESSION["mensagem"] = "Produto " . $_SESSION["contador"] . ": Lucro";
        } elseif ($preco_venda < $preco_custo) {
            $_SESSION["mensagem"] = "Produto " . $_SESSION["contador"] . ": Prejuízo";
        } else {
            $_SESSION["mensagem"] = "Produto " . $_SESSION["contador"] . ": Empate";
        }

        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    }
}


if (isset($_SESSION["mensagem"])) {
    echo $_SESSION["mensagem"] . "<br><br>";
    unset($_SESSION["mensagem"]);
}

if($_SESSION["contador"] < $total_produtos) {
?>

    <h2>Produto <?php echo $_SESSION["contador"] + 1; ?></h2>

    <form method="post">
        <label>Preço de custo:</label>
        <input type="number" name="inserir_custo" step="0.01" required>

        <br><br>

        <label>Preço de venda:</label>
        <input type="number" name="inserir_venda" step="0.01" required>

        <br><br>

        <input type="submit" value="Enviar">
    </form>

<?php 
} else {

    $media_custo = $_SESSION["somaCusto"] / $total_produtos;
    $media_venda = $_SESSION["somaVenda"] / $total_produtos;


    echo "Média do preço de custo: " . number_format($media_custo, 2) . "<br>";
    echo "Média do preço de venda: " . number_format($media_venda, 2) . "<br>";

    session_destroy();
}
?>
