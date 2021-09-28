<?php 

use App\Propiedad;

if($_SERVER['SCRIPT_NAME']=== '/anuncios.php'){
    $propiedades= Propiedad::all();
}else{
    $propiedades= Propiedad::get(3);
}

?>


<div class="contenedor-anuncios">
    <?php foreach($propiedades as $propiedad){ ?>
               <div class="anuncio">
               <img loading="lazy" src="/imagenes/<?php echo $propiedad->imagen;?>" alt="anuncio">

                   <div class="contenido-anuncio">
                    
                       <h3><?php echo $propiedad->titulo;?></h3>
                       <div class="descripcion">
                           <p><?php
                            $cadena_cortada=truncate($propiedad->descripcion,100);
                            echo  $cadena_cortada;
                        ?>
                        </p></div>
                           
                               <div class="info-anuncio">
                                   <p class="precio">$<?php echo $propiedad->precio;?></p>

                               <ul class="iconos-caracterisitcas">
                                   <li>
                                       <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                                       <p><?php echo $propiedad->wc;?></p>
                                   </li>
                                   <li>
                                       <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                                       <p><?php echo $propiedad->estacionamiento;?></p>
                                   </li>
                                   <li>
                                       <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                                       <p><?php echo $propiedad->habitaciones;?></p>
                                   </li>
                               </ul>
                               <a class="boton-amarillo-block" href="anuncio.php?id=<?php echo $propiedad->id;?>">Ver Propiedad</a>
                               </div>
                           
                   </div><!-- contenido anuncio -->
               </div><!-- anuncio -->
            <?php }; ?>
           </div><!-- contenedor-anuncios -->
           
        
