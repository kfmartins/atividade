<?php
if(isset($_POST{"bt_numero1"})){

    $numero1 = $_POST{"bt_numero1"};
    $numero2 = $_POST{"bt_numero2"};
    $numero3 = $_POST{"bt_numero3"};
   

    echo("O Nome recebido foi :" . $numero1);
    echo("<br>");
    echo("O Endereço recebido foi :" . $numero2);
    echo("<br>");
    echo("O Cidade recebido foi :" . $numero3);
    echo("<br>");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebidos</title>
</head>
<body>
        <?php
            include("contato.php");
        ?>
</body>
</html>