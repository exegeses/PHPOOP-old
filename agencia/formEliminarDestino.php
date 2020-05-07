<?php

    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Destino.php';
    $Destino = new Destino;
    $datos = $Destino->verDestinoPorID();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Baja de un Destino</h1>

            <div class="card col-4 mx-auto p-2 border-danger">
                <div class="row no-gutters">
                    <div class="col-2">
                        <i class="fas fa-globe-americas fa-4x"></i>
                    </div>
                    <div class="col">
                    <div class="card-body  text-danger">
                            <h2><?= $datos['destNombre'] ?></h2>
                            <?= $datos['regNombre'] ?> <br>
                            <span class="lead">$<?= $datos['destPrecio'] ?></span>
                        <form action="eliminarDestino.php" method="post">
                            <input type="hidden" value="<?= $datos['destID'] ?>" name="destID" >
                            <button class="btn btn-block btn-danger p-2">Confirmar baja</button>
                            <a href="adminDestinos.php" class="btn btn-outline-secondary mt-3">
                                volver a panel de destinos
                            </a>
                        </form>
                    </div>
                    </div>
                </div>
            </div>


        </main>

<?php
    include 'includes/footer.php';
?>