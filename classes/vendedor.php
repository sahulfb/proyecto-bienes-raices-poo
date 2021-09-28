<?php

namespace App;

class Vendedor extends ActiveRecord{
    protected static $tabla= 'vendedores';
    protected static $columnasDB=['id','nombre','apellido','telefono'];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args= [])
    {
        $this-> id = $args['id'] ?? null;
        $this-> nombre = $args['nombre'] ?? '';
        $this-> apellido = $args['apellido'] ?? '';
        $this-> telefono = $args['telefono'] ?? '';
        
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[]="El Nombre es obligatorio";
        }

        if(!$this->apellido){
            self::$errores[]="El Apellido es obligatorio";
        }

        if(!$this->telefono){
            self::$errores[]="El Telefono es obligatorio";
        }

        if(strlen($this-> telefono)>10){
            self::$errores[]="el telefono debe tener 10 caracteres";
        }
    //Expresion regular - Indica que el patrón de búsqueda no difiera
    //telefono 0a9 sean numeros y 10 digito
        if(!preg_match('/[0-9]{10}/',$this->telefono)){
            self::$errores[]="Formato no valido";
        }
    return self::$errores;
}


}