<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Calculadora de IMC</title>
</head>
<body>
<h2>Calculadora de IMC</h2>
<form action="" method="POST">
    <label for="peso">Peso (kg):</label>
    <input type="number" id="peso" name="peso" step="0.01" required>
    <br>
    <label for="altura">Altura (m):</label>
    <input type="number" id="altura" name="altura" step="0.01" required>
    <br>
    <button type="submit">Calcular IMC</button>
</form>
<div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = floatval($_POST["peso"]);
        $altura = floatval($_POST["altura"]);

        $imc = $peso / ($altura * $altura);
        echo "<p>Seu IMC é: <strong>" . number_format($imc, 2) . "</strong>.</p>";

        if ($imc < 18.5) {
            echo "<p>Você está <strong>abaixo do peso</strong>.</p>";
        } elseif ($imc < 25) {
            echo "<p>Você está com <strong>peso normal</strong>.</p>";
        } elseif ($imc < 30) {
            echo "<p>Você está com <strong>sobrepeso</strong>.</p>";
        } else {
            echo "<p>Você está com <strong>obesidade</strong>.</p>";
        }
    }
    ?>
</div>
</body>
</html><?php
