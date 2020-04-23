<?php

    require 'helper.php';

    $link = new PDO(
                    'mysql:host=localhost;dbname=agencia',
                    'root',
                    'root'
                );

    $sql = 'SELECT regID, regNombre
                FROM regiones';


    $stmt = $link->prepare($sql);
    $stmt->execute();

    /*
    ## método fetch() trae SOLO un registro
    $dato1erRegion = $stmt->fetch(PDO::FETCH_ASSOC);
    verInfo($dato1erRegion);
    */

    // ## método fetchAll() trae TODOS los registros
    $regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);
    verInfo($regiones);
