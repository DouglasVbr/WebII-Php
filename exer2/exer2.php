
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 2 - Soma de dois números</title>
</head>
<body>
    <h2>Somar dois números</h2>
    <form action="" method="POST">
        <label for="num1">Primeiro número:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Segundo número:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <button type="submit">Somar</button>
    </form>
    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = floatval($_POST["num1"]);
            $num2 = floatval($_POST["num2"]);
            $soma = $num1 + $num2;
            echo "<p>A soma de $num1 e $num2 é: <strong>$soma</strong>.</p>";
        }
        ?>
    </div>
</body>
</html>
