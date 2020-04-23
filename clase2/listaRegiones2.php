<?php

    $link = new PDO(
        'mysql:host=localhost;dbname=agencia',
        'root',
        'root'
    );

    $sql = 'SELECT regID, regNombre
                    FROM regiones';


    $stmt = $link->prepare($sql);
    $stmt->execute();

    $regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de regiones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <main class="container">

        <h1>Listado de regiones</h1>
        <ul class="list-group col-md-4">
<?php
        foreach ( $regiones as $region ){
?>
            <li class="list-group-item list-group-item-action">
                    <?= $region['regID'] ?>-
                    <?= $region['regNombre'] ?>
            </li>
<?php
        }
?>
        </ul>

    </main>

</body>
</html>
