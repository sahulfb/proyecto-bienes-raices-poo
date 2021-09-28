<?php
require '../../includes/app.php';

use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

estaAutenticado();

$propiedad=new Propiedad;

//Consulta para detener todos los vendedores
$vendedores= Vendedor::all();

//Arreglo con mensajes de errores
$errores= Propiedad::getErrores();


//Ejecutar el codigo despues de  que el usuario envia el formulario

if($_SERVER['REQUEST_METHOD']==='POST'){
    //**Crea una nueva instancia */
    $propiedad= new Propiedad($_POST['propiedad']);

  // SUBIDA DE ARCHIVOS
        // Generar un nombre único
        $nombreImagen = md5( uniqid(rand(), true ) ) . ".jpg";

 //Setear la imagen
//Realiza un resize a la imagen con intervention
if($_FILES['propiedad']['tmp_name']['imagen']){
    $image=image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
$propiedad->setImagen($nombreImagen);
}

//Validar
$errores= $propiedad-> validar();

    

    //Revisar que el array de errores este vacio
if(empty($errores)){

    //Crear la carpeta para subir imagenes
    if($_FILES['propiedad']['tmp_name']['imagen']){
        $image->save(CARPETA_IMAGEN . $nombreImagen);
    }
    

    //Guardar en la base de datos
    $propiedad-> guardar();
}

}


incluirTemplates('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_propiedades.php'; ?>

            <input type="submit" value="Crear Propiedad" class="boton-verde">
        </form>

    </main>




    <?php 
incluirTemplates('footer');
?>