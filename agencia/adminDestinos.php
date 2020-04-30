<?php

    require 'config/config.php';

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

?>
                    <tr>
                        <td>destino</td>
                        <td>precio</td>
                        <td>región</td>
                        <td>totales</td>
                        <td>disponibles</td>
                        <td>
                            <a href="" class="btn btn-outline-secondary">
                                modificar
                            </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-secondary">
                                eliminar
                            </a>
                        </td>
                    </tr>
<?php

?>
                </tbody>
            </table>

        </main>

<?php
    include 'includes/footer.php';
?>