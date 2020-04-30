<?php

    require 'config/config.php';
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Dashboard</h1>

            <section class="list-group">
                <a href="adminRegiones.php" class="list-group-item list-group-item-action">
                    Panel de administración de Regiones.
                </a>
                <a href="adminDestinos.php" class="list-group-item list-group-item-action">
                    Panel de administración de Destinos.
                </a>
            </section>

        </main>

<?php
    include 'includes/footer.php';
?>