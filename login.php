<?php

//Incluir header
require 'includes/app.php';

    $db= conectarDB();

//Autenticar el Usuario
$errores=[];


if($_SERVER['REQUEST_METHOD']==='POST'){
    /* echo "<pre>";
    var_dump($_POST);
    echo "<pre>";
 */
    $email= mysqli_real_escape_string($db,filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));

    $password= mysqli_real_escape_string($db,$_POST['password']);
    
    if(!$email){
        $errores[] = "El Email es obligatorio o no es valido";
    }
    
    
    if(!$password){
        $errores[] = "El Password es obligatorio";
    }

    if(empty($errores)){
        //Revisar si el usuario existe
        $query= "SELECT * FROM usuarios WHERE email='${email}'";
        $resultado=mysqli_query($db,$query);

        
        if($resultado-> num_rows){
            //Revisar si el password es correcto
            $usuario= mysqli_fetch_assoc($resultado);
             // var_dump($usuario['password']);

            //Verificar si el password es correcto o no
            $auth= password_verify($password,$usuario['password']);

                if($auth){
                    //El usuario esta autenticado

                    session_start();

                    //Llenar el arreglo de sesión
                    $_SESSION['usuario']=$usuario['email'];
                    $_SESSION['login']=true;

                    header('Location: /admin');
                }else{
                    $errores[] ="El password es incorrecto";
                }

         }else{
             $errores[]="El usuario no existe";
         }
    }
}
    


incluirTemplates('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>
    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach?>
        <form class="formulario" method="post" novalidate>
            <fieldset>
                <legend>Email y Password</legend>
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu Email" id="email">

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu Password" id="password">

            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="boton-verde">
        </form>

    </main>




    <?php 
incluirTemplates('footer');
?>