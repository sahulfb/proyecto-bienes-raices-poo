<?php

function conectarDB() : mysqli{
   $db= new mysqli('localhost','root','123456','bienes_raices');

    if(!$db){
        echo "Error no se pudo Conectar";
        exit;
    }

    return $db;
}