<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - Introdução - exe2</title>
</head>
<body>
    <h1>Exercício 2</h1>
    <p>2. Altere a aplicação do exercício 1, para que o nome e a idade possam ser informados através de dados de um formulário html</p>
    <form method="get" action="exe2.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
       if (isset($_GET["nome"]) && isset($_GET["idade"])) {
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        echo "Nome: $nome, idade $idade anos.";
     }
?>
</body>
</html>