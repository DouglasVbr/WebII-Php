<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Calculadora de IMC</title>
</head>
<body>
    <div class="container">
        <h2>Calculadora de IMC</h2>
        <form method="post">
            <label for="peso">Peso (kg):</label>
            <input type="number" step="0.01" name="peso" id="peso" required>
            <br>
            <label for="altura">Altura (m):</label>
            <input type="number" step="0.01" name="altura" id="altura" required>
            <br>
            <button type="submit">Calcular IMC</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = floatval($_POST["peso"]);
            $altura = floatval($_POST["altura"]);
            if ($altura > 0) {
                $imc = $peso / pow($altura, 2);
                $imcFormatado = number_format($imc, 2);
                echo "<p>Seu IMC é: <strong>$imcFormatado</strong></p>";
            } else {
                echo "<p>Altura inválida.</p>";
            }
        }
        ?>
        <a href="../index.php">Voltar</a>
    </div>
</body>
</html>