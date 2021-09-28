<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGEN', __DIR__ . '/../imagenes/');

function incluirTemplates(string $nombre, bool $inicio=false){
    include TEMPLATES_URL . "/${nombre}.php";
}

function estaAutenticado(){
    session_start();

    if(!$_SESSION['login']){
        header('Location: /');
    }
}

function debuguear($variable){
    echo "<pre>";
var_dump($variable);
echo "</pre>";

exit;
}

//Escapa  / Sanitizar el HTML
function s($html) : string {
    $s=htmlspecialchars($html);
    return $s;
}

//Validar tipo de Contenido
function validarTipoContenido($tipo){
    $tipos=['vendedor','propiedad'];

    return in_array($tipo, $tipos);
}


//recortar texto de descripcion
function truncate(string $texto, int $cantidad) : string
{
    if(strlen($texto) >= $cantidad) {
        return substr($texto, 0, $cantidad) . "...";
    } else {
        return $texto;
    }
}

// Mostrar mensajes
function mostrarNotificaciones($codigo){
    switch($codigo){
        case 1:
            $mensaje =  'Creado Correctamente';
            break;

        case 2:
            $mensaje =  'Actualizado Correctamente';
            break;
        
        case 3:
            $mensaje =  'Eliminado Correctamente';
            break;
        
        default:
            $mensaje= false;
            break;
    } 

    return $mensaje;
}