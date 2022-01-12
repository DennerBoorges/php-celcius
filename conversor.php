<?php

    $numero = $_POST['numero'];
    $fer = $numero;
    $numero = ($numero - 32) * 5 / 9;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius</title>
</head>
<body>
    <h2>Valor Inserido:</h2><h3>
    <h3><?php echo $fer ?></h3>
    <h2>Valor Convertido:</h2>
    <h3><?php echo $numero ?></h3>
</body>
</html>



