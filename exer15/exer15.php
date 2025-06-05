<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Arredondador de Notas</title>
</head>
<body>
    <div class="container">
        <h2>Arredondador de Notas</h2>
        <form method="post">
            <label for="nota">Informe a nota:</label>
            <input type="number" step="0.01" name="nota" id="nota" required>
            <button type="submit">Arredondar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nota = floatval($_POST["nota"]);
            $arredondada = round($nota);
            $paraCima = ceil($nota);
            $paraBaixo = floor($nota);

            echo "<p>Nota original: <strong>$nota</strong></p>";
            echo "<p>Arredondada (round): <strong>$arredondada</strong></p>";
            echo "<p>Arredondada para cima (ceil): <strong>$paraCima</strong></p>";
            echo "<p>Arredondada para baixo (floor): <strong>$paraBaixo</strong></p>";
        }
        ?>
        <a href="../index.php">Voltar</a>
    </div>
</body>
</html>