<?php
if(!isset($_SESSION)){
    session_start();
}

$auth=$_SESSION['login'] ?? false;


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Servicios</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div class="barra-logo">
                    <a href="/index.php" class="logo"><img src="/build/img/logo.svg" alt="logotipo bienes raices"></a>
                <div class="mobile">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg">
                    <div class="mobile-menu">
                        <img src="/build/img/barras.svg" alt="icono menu responsive">
                    </div>
                </div> <!-- Mobile -->
            </div>
            
            <div class="derecha">
                <nav class="navegacion">
                    <a href="/nosotros.php">Nosotros</a>
                    <a href="/anuncios.php">Anucios</a>
                    <a href="/blog.php">Blog</a>
                    <a href="/contacto.php">Contacto</a>
                    <?php if (!$auth) : ?>
                <a href="/login.php">Iniciar Sesión</a>
                <?php endif; ?>
                    <?php if($auth): ?>
                        <a href="/cerrar-sesion.php">Cerrar Sesión</a>
                    <?php endif;?>
                </nav>
            </div>
            </div><!-- barra -->
            <?php echo $inicio ? '<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>' : '';?>
        </div>
    </header>