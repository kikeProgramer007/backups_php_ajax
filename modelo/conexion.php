<?php 

class Conexion{
    public static function conectar(){
        $conexion = new mysqli('localhost','root','','phpnativo_respaldos');
        $conexion->set_charset('utf8');
        return $conexion;
    }
}
