<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Tabuada</title>
</head>
<body>
<h2>Tabuada do número</h2>
<form action="" method="POST">
    <label for="numero">Digite um número:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit">Exibir Tabuada</button>
</form>
<div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);

        echo "<p>Tabuada do número $numero:</p>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$numero x $i = " . ($numero * $i) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</div>
</body>
</html><?php
