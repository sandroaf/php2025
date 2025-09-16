<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Variávei PHP</title>
</head>
<body>
    <?php
       require_once("../estrutura/header.php");
    ?>
    <h1>Variáveis em PHP</h1>
    <?php
      echo "<h3>Variável STRING(texto)</h3>";
      $nome = "Maria da Silva";
      //o ponto(.) é usado para concatenar (juntar) textos
      echo "Nome: " . $nome;
      echo "<br>";
      echo "<h3>Variável INTEIRO</h3>";
      $idade = 26;
      echo "Idade: " . $idade;
      echo "<br>";
      echo "<h3>Variável FLOAT (número com vírgula)</h3>";
      $peso = 65.5;
      echo "Peso: " . $peso . " kg";
      echo "<br>";
      echo "<h1>Constantes em PHP</h1>";
      //definindo uma constante
      define("idioma", "Português");
      echo "Idioma: " . idioma;
    ?>
      <?php
       require_once("../estrutura/footer.php");
    ?>

</body>
</html>