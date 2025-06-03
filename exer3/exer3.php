<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Média de Notas</title>
</head>
<body>
<h2>Calcular a média de 3 notas</h2>
<form action="" method="POST">
    <label for="nota1">Nota 1:</label>
    <input type="number" id="nota1" name="nota1" step="0.01" required>
    <br>
    <label for="nota2">Nota 2:</label>
    <input type="number" id="nota2" name="nota2" step="0.01" required>
    <br>
    <label for="nota3">Nota 3:</label>
    <input type="number" id="nota3" name="nota3" step="0.01" required>
    <br>
    <button type="submit">Calcular Média</button>
</form>
<div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = floatval($_POST["nota1"]);
        $nota2 = floatval($_POST["nota2"]);
        $nota3 = floatval($_POST["nota3"]);

        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "<p>A média das notas é: <strong>" . number_format($media, 2) . "</strong>.</p>";

        if ($media >= 7) {
            echo "<p>O aluno foi <strong>aprovado</strong>.</p>";
        } else {
            echo "<p>O aluno foi <strong>reprovado</strong>.</p>";
        }
    }
    ?>
</div>
</body>
</html><?php
