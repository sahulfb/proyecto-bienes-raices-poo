<?php
use App\Vendedor;
require '../../includes/app.php';
estaAutenticado();

//Validar que sea un ID valido
$id=$_GET['id'];
$id= filter_var($id,FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /admin');
}

//Obtener el arreglo del vendedor
$vendedor= Vendedor::find($id);
//Arreglo con mensajes de errores
$errores= Vendedor::getErrores();

if($_SERVER['REQUEST_METHOD']==='POST'){
    //Asignar los valores
    $args= $_POST['vendedor'];
    
    //Sincronizar objeto en memoria con lo que el usuario escribio
    $vendedor->sincronizar($args);
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
        <h1>Actualizar Vendedor(a)</h1>

        <a href="/admin" class="boton boton-azul">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST">
            <?php include '../../includes/templates/formulario_vendedor.php'; ?>

            <input type="submit" value="Guardar Cambios" class="boton-verde">
        </form>

    </main>




    <?php 
incluirTemplates('footer');
?>