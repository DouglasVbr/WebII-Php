<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Fatorial</title>
</head>
<body>
<h2>Calcular o Fatorial</h2>
<form action="" method="POST">
    <label for="numero">Digite um número:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit">Calcular</button>
</form>
<div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);

        function fatorial($n) {
            if ($n <= 1) return 1;
            return $n * fatorial($n - 1);
        }

        $resultado = fatorial($numero);
        echo "<p>O fatorial de $numero é: <strong>$resultado</strong>.</p>";
    }
    ?>
</div>
</body>
</html><?php
