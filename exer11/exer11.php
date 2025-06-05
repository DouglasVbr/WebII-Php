<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 11 - Validação de Senha</title>
</head>
<body>
<h2>Validação de Senha</h2>
<form action="" method="POST">
    <label for="senha">Digite sua senha:</label>
    <input type="password" id="senha" name="senha" required>
    <button type="submit">Validar</button>
</form>
<div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $senha = $_POST["senha"];

        if (strlen($senha) >= 8) {
            echo "<p>A senha é <strong>válida</strong>.</p>";
        } else {
            echo "<p>A senha é <strong>inválida</strong>. Ela deve ter pelo menos 8 caracteres.</p>";
        }
    }
    ?>
    <a href="../index.php">Voltar</a>
</div>
</body>
</html><?php
