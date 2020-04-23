<?php

    require 'Persona.php';
    ## instanciación
    $Persona = new Persona;
    /* llamado a seters  */
    $Persona->setNombre('Cosme');
    $Persona->setApellido('Fulanito');

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Getters & Setters</title>
</head>
<body>
    <h1>Getters & Setters</h1>

    <?= $Persona->verDatos() ?>

</body>
</html>