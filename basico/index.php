<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Básico lingragem PHP</title>
</head>
<body>
    <h1>Conceitos Básicos PHP</h1>
    <ul>
        <li>
            <a href="primeiro.php" target="_blank">Primeiro Script PHP</a>
        </li>
        <li>
            <a href="variaveis.php" target="_blank">Variáveis em PHP</a>
        </li>
        <li>
            <a href="operacoes.php" target="_blank">Operações em PHP</a>
        </li>
        <li>
            <a href="get.php" target="_blank">Recebendo Valores por GET</a>
        </li>
    </ul>
    <br>
    <?php 
       echo "<h2>Informações do Servidor</h2>";
       echo $_SERVER['SCRIPT_NAME'];
       echo "<br>";
       echo $_SERVER['SERVER_NAME'];
       echo "<br>";
    ?>
</body>
</html>