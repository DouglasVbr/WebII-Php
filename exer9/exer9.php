<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 - Calcular Idade</title>
</head>
<body>
<h2>Calcular a Idade</h2>
<form action="" method="POST">
    <label for="anoNascimento">Ano de Nascimento:</label>
    <input type="number" id="anoNascimento" name="anoNascimento" required>
    <button type="submit">Calcular Idade</button>
</form>
<div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $anoNascimento = intval($_POST["anoNascimento"]);
        $anoAtual = date("Y");
        $idade = $anoAtual - $anoNascimento;

        echo "<p>Se você nasceu em $anoNascimento, sua idade é: <strong>$idade anos</strong>.</p>";
    }
    ?>
</div>
</body>
</html><?php
