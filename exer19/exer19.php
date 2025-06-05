<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Extrator de Acrônimo</title>
</head>
<body>
    <div class="container">
        <h2>Extrator de Acrônimo</h2>
        <form method="post">
            <label for="frase">Digite a frase:</label>
            <input type="text" name="frase" id="frase" required>
            <button type="submit">Gerar Acrônimo</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $frase = trim($_POST["frase"]);
            $palavras = explode(' ', $frase);
            $acronimo = '';
            foreach ($palavras as $palavra) {
                if ($palavra !== '') {
                    $acronimo .= substr($palavra, 0, 1);
                }
            }
            $acronimo = strtoupper($acronimo);
            echo "<p>Acrônimo gerado: <strong>$acronimo</strong></p>";
        }
        ?>
        <a href="../index.php">Voltar</a>
    </div>
</body>
</html>