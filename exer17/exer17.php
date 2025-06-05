<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Censurador de Palavras</title>
</head>
<body>
    <div class="container">
        <h2>Censurador de Palavras</h2>
        <form method="post">
            <label for="frase">Frase:</label>
            <input type="text" name="frase" id="frase" required>
            <br>
            <label for="palavra">Palavra a censurar:</label>
            <input type="text" name="palavra" id="palavra" required>
            <br>
            <button type="submit">Censurar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $frase = $_POST["frase"];
            $palavra = $_POST["palavra"];
            $fraseCensurada = str_ireplace($palavra, "***", $frase);
            echo "<p>Frase censurada: <strong>$fraseCensurada</strong></p>";
        }
        ?>
        <a href="../index.php">Voltar</a>
    </div>
</body>
</html>