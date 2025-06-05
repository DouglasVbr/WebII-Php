<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Calculadora de Hipotenusa</title>
</head>
<body>
    <div class="container">
        <h2>Calculadora de Hipotenusa</h2>
        <form method="post">
            <label for="catetoA">Cateto A:</label>
            <input type="number" step="0.01" name="catetoA" id="catetoA" required>
            <br>
            <label for="catetoB">Cateto B:</label>
            <input type="number" step="0.01" name="catetoB" id="catetoB" required>
            <br>
            <button type="submit">Calcular Hipotenusa</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $catetoA = floatval($_POST["catetoA"]);
            $catetoB = floatval($_POST["catetoB"]);
            $hipotenusa = sqrt(pow($catetoA, 2) + pow($catetoB, 2));
            $hipotenusaFormatada = number_format($hipotenusa, 2, ',', '.');
            echo "<p>O comprimento da hipotenusa é: <strong>$hipotenusaFormatada</strong></p>";
        }
        ?>
        <a href="../index.php">Voltar</a>
    </div>
</body>
</html>