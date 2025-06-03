<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Conversor de Temperatura</title>
</head>
<body>
<h2>Conversor de Temperatura (Celsius ↔ Fahrenheit)</h2>
<form action="" method="POST">
    <label for="temperatura">Temperatura:</label>
    <input type="number" id="temperatura" name="temperatura" step="0.01" required>
    <br>
    <label for="conversao">Converter para:</label>
    <select name="conversao" id="conversao" required>
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
    </select>
    <br>
    <button type="submit">Converter</button>
</form>
<div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperatura = floatval($_POST["temperatura"]);
        $conversao = $_POST["conversao"];

        if ($conversao == "celsius") {
            $resultado = ($temperatura - 32) * 5 / 9;
            echo "<p>$temperatura°F equivalem a <strong>" . number_format($resultado, 2) . "°C</strong>.</p>";
        } else {
            $resultado = ($temperatura * 9 / 5) + 32;
            echo "<p>$temperatura°C equivalem a <strong>" . number_format($resultado, 2) . "°F</strong>.</p>";
        }
    }
    ?>
</div>
</body>
</html><?php
