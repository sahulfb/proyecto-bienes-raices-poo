<?php
require '../../includes/app.php';
use App\Vendedor;

estaAutenticado();

$vendedor=new Vendedor;

//Arreglo con mensajes de errores
$errores= Vendedor::getErrores();

if($_SERVER['REQUEST_METHOD']==='POST'){
    //Crear una nueva instancia
    $vendedor = new Vendedor($_POST['vendedor']);

    //Validar que no haya campos vacios
    $errores= $vendedor->validar();

    //No hay errores, guardar en bd
    if(empty($errores)){
        $vendedor->guardar();
    }

}

incluirTemplates('header');
?>

<main class="contenedor seccion">
        <h1>Registrar Vendedor(a)</h1>

        <a href="/admin" class="boton boton-azul">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/vendedores/crear.php">
            <?php include '../../includes/templates/formulario_vendedor.php'; ?>

            <input type="submit" value="Registrar Vendedor(a)" class="boton-azul">
        </form>

    </main>




    <?php 
incluirTemplates('footer');
?>