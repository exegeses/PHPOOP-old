<?php

    require 'config/config.php';

    $Region = new Region;
    $regiones = $Region->listarRegiones();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Panel de administración de regiones</h1>

            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>id</th>
                        <th>Region</th>
                        <th colspan="2">
                            <a href="formAgregarRegion.php" class="btn btn-dark">
                                agregar
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
<?php
            foreach ( $regiones as $region ){
?>
                    <tr>
                        <td><?= $region['regID'] ?></td>
                        <td><?= $region['regNombre'] ?></td>
                        <td>
                            <a href="formModificarRegion.php?regID=<?= $region['regID'] ?>" class="btn btn-outline-secondary">
                                modificar
                            </a>
                        </td>
                        <td>
                            <a href="formEliminarRegion.php?regID=<?= $region['regID'] ?>" class="btn btn-outline-secondary">
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