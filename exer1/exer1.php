<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 1 - Par ou Ímpar</title>
</head>
<body>
<h2>Verificar se um número é par ou ímpar</h2>
<form action="" method="POST">
    <label for="numero">Digite um número:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit">Verificar</button>
</form>
<div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        if ($numero % 2 == 0) {
            echo "<p>O número $numero é <strong>par</strong>.</p>";
        } else {
            echo "<p>O número $numero é <strong>ímpar</strong>.</p>";
        }
    }
    ?>
    <a href="../index.php">Voltar</a>
</div>
</body>
</html>
