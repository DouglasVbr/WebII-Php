<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Sorteio de Desconto</title>
</head>
<body>
    <div class="container">
        <h2>Sorteio de Desconto</h2>
        <form method="post">
            <label for="preco">Preço do produto (R$):</label>
            <input type="number" step="0.01" name="preco" id="preco" required>
            <button type="submit">Sortear desconto</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $precoProduto = floatval($_POST["preco"]);
            $percentualDesconto = rand(5, 25);
            $valorDesconto = $precoProduto * ($percentualDesconto / 100);
            $precoFinal = $precoProduto - $valorDesconto;

            echo "<p>Preço original: <strong>R$ " . number_format($precoProduto, 2, ',', '.') . "</strong></p>";
            echo "<p>Desconto sorteado: <strong>$percentualDesconto%</strong></p>";
            echo "<p>Preço com desconto: <strong>R$ " . number_format($precoFinal, 2, ',', '.') . "</strong></p>";
        }
        ?>
        <a href="../index.php">Voltar</a>
    </div>
</body>
</html>