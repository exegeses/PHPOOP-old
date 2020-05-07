<?php

    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region;
    $chequeo = $Region->agregarRegion();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Alta de una nueva región</h1>

<?php
    $class = 'danger';
    $mensaje = 'No se puedo agregar la Región'.$_POST['regNombre'];
    if( $chequeo ){
        $class = 'success';
        $mensaje = 'Región: '.$Region->getRegNombre(). 'agregada correctamente';
    }
?>
            <div class="alert alert-<?= $class ?> col-4 mx-auto">
                <?= $mensaje ?>
                <br>
                <a href="adminRegiones.php" class="btn btn-outline-secondary">
                    Volver a panel de regiones
                </a>
            </div>




        </main>

<?php
    include 'includes/footer.php';
?>