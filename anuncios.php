<?php

require 'includes/app.php';
incluirTemplates('header');
?>

    <main>
        <section class="seccion contenedor">
            <h2>Casas y Deparatamentos en Venta</h2>
            <?php 
            $limite=10;

            include 'includes/templates/anuncios.php'
            ?>

    </main>





    <?php 
incluirTemplates('footer');
?>