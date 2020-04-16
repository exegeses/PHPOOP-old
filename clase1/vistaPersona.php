<?php

    require 'helper.php';
    require 'Persona.php';
    $Persona = new Persona; //instanciación

    //verInfo($Persona);

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vista Persona</title>
</head>
<body>
    <h1>Vista Persona</h1>

    <?php
        echo $Persona->verDatos();
    ?>
</body>
</html>
