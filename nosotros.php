<?php

require 'includes/app.php';
incluirTemplates('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="nosotros">
            <div class="nosotros-imagen">
                <picture>
                 <source srcset="build/img/nosotros.webp" type="image/webp">
                 <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="imagen sobre nosotros">
                </picture>
            </div>

            <div class="nosotros-texto">
                <h3>25 Años de Experiencia</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus cum, modi perferendis exercitationem quas amet! Quod quo ducimus, eaque, sit illum fuga et odio aspernatur, aperiam quidem eligendi cupiditate quaerat.
                Consectetur veritatis at reprehenderit expedita, aliquam eveniet, aspernatur illo harum eum laudantium rerum laboriosam, maiores magni. Quasi accusamus amet culpa explicabo quos ut corporis! Incidunt, nesciunt? Autem dicta hic consequuntur!</p>
                <p>Nulla dolore dolores, voluptates voluptatibus voluptatum dolorem at vero blanditiis nostrum soluta ab voluptate dicta molestias accusamus voluptas sapiente sed voluptatem porro alias. Quo fuga laborum quas distinctio dolor atque.
                Beatae veniam vitae aliquam eveniet voluptatem, perspiciatis maxime necessitatibus praesentium ipsum vel? Nobis hic soluta laboriosam consequuntur rerum porro ab, veritatis possimus nisi at eligendi aut, magnam vero consectetur dolor!
                </p>
            </div>

        </div>

    </main>

    <section class="opciones">
        <h3>Más sobre Nosotros</h3>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="/build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores explicabo facilis pariatur error reiciendis blanditiis id iure voluptate aliquid perspiciatis.</p>
            </div>

            <div class="icono">
                <img src="/build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores explicabo facilis pariatur error reiciendis blanditiis id iure voluptate aliquid perspiciatis.</p>
            </div>

            <div class="icono">
                <img src="/build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores explicabo facilis pariatur error reiciendis blanditiis id iure voluptate aliquid perspiciatis.</p>
            </div>
        </div>
    </section>




    <?php 
incluirTemplates('footer');
?>