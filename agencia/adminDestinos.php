<?php

    require 'config/config.php';

    $objDestino = new Destino;
    $destinos = $objDestino->listarDestinos();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Panel de administración de Destinos</h1>

            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Destino (aeropuerto)</th>
                        <th>Precio</th>
                        <th>Región</th>
                        <th>Totales</th>
                        <th>Disponibles</th>
                        <th colspan="2">
                            <a href="" class="btn btn-dark">
                                agregar
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
<?php
            foreach( $destinos as $destino ){
?>
                    <tr>
                        <td><?= $destino['destNombre']; ?></td>
                        <td><?= $destino['destPrecio']; ?></td>
                        <td><?= $destino['regNombre']; ?></td>
                        <td><?= $destino['destAsientos']; ?></td>
                        <td><?= $destino['destDisponibles']; ?></td>
                        <td>
                            <a href="formModificarDestino.php?destID=<?= $destino['destID'] ?>" class="btn btn-outline-secondary">
                                modificar
                            </a>
                        </td>
                        <td>
                            <a href="formEliminarDestino.php?destID=<?= $destino['destID'] ?>" class="btn btn-outline-secondary">
                                eliminar
                            </a>
                        </td>
                    </tr>
<?php
            }
?>
                </tbody>
            </table>

        </main>

<?php
    include 'includes/footer.php';
?>