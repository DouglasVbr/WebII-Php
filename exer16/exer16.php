<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Gerador de Nome de Usuário</title>
</head>
<body>
    <div class="container">
        <h2>Gerador de Nome de Usuário</h2>
        <form method="post">
            <label for="nome">Nome completo:</label>
            <input type="text" name="nome" id="nome" required>
            <button type="submit">Gerar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $usuario = trim($nome);
            $usuario = strtolower($usuario);
            $usuario = str_replace(' ', '.', $usuario);
            echo "<p>Nome de usuário gerado: <strong>$usuario</strong></p>";
        }
        ?>
        <a href="../index.php">Voltar</a>
    </div>
</body>
</html>