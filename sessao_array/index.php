<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Sessão com Array</title>
</head>
<body>
    <?php
        function mostrarmoradores() {
            $numeromorador = 0;
            foreach($_SESSION["moradores"] as $morador) {
                echo $numeromorador.": "."Nome: ".$morador["nome"];
                echo " Sexo: ";
                switch($morador["sexo"]) {
                case "M": 
                    echo "Masculino";
                    break;
                case "F": 
                    echo "Feminino";
                    break;
                case "O":
                    echo "Outro";
                    break;
                }
                echo "<br>";
                $numeromorador++;
            }
            echo "<br>";
        }

        function formmoradores() {
            ?>
            <form action="index.php" method="POST">
                <label for="inomemorador">Nome Morador</label>
                <input name="inomemorador" id="inomemorador"><br>
                <label for="isexomorador">Sexo Morador</label>
                <input type="radio" name="isexomorador" id="isexomoradorm" value="M">Masculino&nbsp;&nbsp; 
                <input type="radio" name="isexomorador" id="isexomoradorf" value="F">Feminino&nbsp;&nbsp; 
                <input type="radio" name="isexomorador" id="isexomoradoro" value="O">Outro<br>
                <br>
                <button type="submit">Cadastrar</button>
            </form>
            <?php
        }

        require_once("../estrutura/header.php");
        //print_r($_SESSION["moradores"]);
        
        if (!isset($_SESSION["moradores"])) {
            //Se não tiver moradores na seção. Inicia o array de moradores e chama o formulário para cadastrar.    
            $_SESSION["moradores"] = array();
            formmoradores();
        } else {
            //Se já tiver modadores 
            if(isset($_POST["inomemorador"]) && isset($_POST["isexomorador"])) {
                //se Informado novos inclui no array
                $numeromoradores = count($_SESSION["moradores"]);

                $_SESSION["moradores"][$numeromoradores] = array("nome" => $_POST["inomemorador"],"sexo" => $_POST["isexomorador"]);
            }

            $numeromoradores = count($_SESSION["moradores"]);
            //Verifica se já tem 4 moradores
            if ($numeromoradores < 4 ) {
                mostrarmoradores();
                formmoradores();
            } else {
                echo "Cadastrados os 4 moradores";
                echo "<br>";
                mostrarmoradores();
            }
            //Exibe botão para apagar moradores
            ?>
            <br>
            <form action="apagarmoradores.php" method="POST">
                <button type="submit" name="bapagarmoradores">Apagar Moradores</button>
            </form>
            <br>
            <?php
        }
       require_once("../estrutura/footer.php");
    ?>
    
</body>
</html>