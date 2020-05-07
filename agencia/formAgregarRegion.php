<?php

    require 'config/config.php';
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Alta de una nueva región</h1>

            <div class="alert bg-light p-4">

                <form action="agregarRegion.php" method="post">
                    Nombre de la región:
                    <br>
                    <input type="text" name="regNombre" class="form-control">
                    <br>
                    <button class="btn btn-dark">Agregar</button>
                    <a href="adminRegiones.php" class="btn btn-oultine-secondary">
                        Volver a panel de regiones
                    </a>
                </form>

            </div>


        </main>

<?php
    include 'includes/footer.php';
?>