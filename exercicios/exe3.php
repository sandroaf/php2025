<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - Introdução - exe3</title>
</head>
<body>
    <h1>Exercício 3</h1>
    <p>3. Crie uma aplicação onde seja informado o nome e de uma pessoa e sua data de nascimento e a aplicação retorne se essa pessoa é maior ou menor de idade.</p>
    <form method="get" action="exe3.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="data_nascimento">Data de nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
       if (isset($_GET["nome"]) && isset($_GET["data_nascimento"])) {
        $nome = $_GET["nome"];
        date_default_timezone_set('America/Sao_Paulo');
        $data_nascimento = new DateTime($_GET["data_nascimento"]);
        $hoje = new DateTime();
        $idade = $hoje->diff($data_nascimento)->y;
        if ($idade >= 18) {
            echo "Nome: $nome, idade $idade anos. Maior de idade.";
        } else {
            echo "Nome: $nome, idade $idade anos. Menor de idade.";
        }

     }
?>
</body>
</html>