<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Dado</title>
    <?php 
       function jogardado() {
           $numero = rand(1,6);
           echo "Dado: ".$numero;
           echo "<br>";
           echo "<img src='img/dado/dado$numero.png'>";
       }
    ?>
</head>
<body>
    <h1>Simulador de Dado</h1>
    <form action="exedado.php" method="GET">
        <button name="bsortear" value="sortear">Jogar o Dado</button>        
    </form>
    <br>
    <?php 
       if (isset($_GET["bsortear"])) {
          jogardado();
       }
    ?>
</body>
</html>