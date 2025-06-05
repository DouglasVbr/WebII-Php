<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 10 - Simulador de Empréstimo</title>
</head>
<body>
<h2>Simulador de Empréstimo</h2>
<form action="" method="POST">
    <label for="valor">Valor do Empréstimo (R$):</label>
    <input type="number" id="valor" name="valor" step="0.01" required>
    <br>
    <label for="juros">Taxa de Juros (%) ao mês:</label>
    <input type="number" id="juros" name="juros" step="0.01" required>
    <br>
    <label for="parcelas">Número de Parcelas:</label>
    <input type="number" id="parcelas" name="parcelas" required>
    <br>
    <button type="submit">Calcular</button>
</form>
<div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = floatval($_POST["valor"]);
        $juros = floatval($_POST["juros"]) / 100;
        $parcelas = intval($_POST["parcelas"]);

        $valorTotal = $valor * (1 + $juros * $parcelas);
        $valorParcela = $valorTotal / $parcelas;

        echo "<p>Valor total do empréstimo será: <strong>R$ " . number_format($valorTotal, 2, ',', '.') . "</strong></p>";
        echo "<p>Valor de cada parcela: <strong>R$ " . number_format($valorParcela, 2, ',', '.') . "</strong></p>";
    }
    ?>
    <a href="../index.php">Voltar</a>
</div>
</body>
</html><?php
