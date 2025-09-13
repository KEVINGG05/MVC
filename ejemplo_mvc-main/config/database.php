<?php

class database{
    public static function conectar(){
        $conexion = new mysqli("localhost0","root","","tienda");
        $conexion->query("SET NAMES 'utf-8");

        return $conexion;
    }
}