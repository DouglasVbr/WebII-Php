<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Formatador de Títulos</title>
</head>
<body>
    <div class="container">
        <h2>Formatador de Títulos</h2>
        <form method="post">
            <label for="frase">Frase em minúsculas:</label>
            <input type="text" name="frase" id="frase" required>
            <button type="submit">Formatar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $frase = strtolower($_POST["frase"]);
            $titulo = ucwords($frase);
            echo "<p>Título formatado: <strong>$titulo</strong></p>";
        }
        ?>
        <a href="../index.php">Voltar</a>
    </div>
</body>
</html>