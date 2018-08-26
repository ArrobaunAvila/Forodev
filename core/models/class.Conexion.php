<?php 
/*
* @author: Dan5erv3r
 * class Connect, establece conexión con la base de datos y prepara métodos comunes
*/

/**
* error_reporting(-1);
*/
  class ConexionDBD {     
    /* las propiedades static pueden ser accedidas desde cualquier parte
    sin instanciar la clase
    */
    private static $conexion;

    public static function conection()
    {       //self::  es el metodo el  ,cual nos permite acceder a los atributos u metodos de la clase

        $BD_user='root'; //propiedades estaticas 
        $BD_host='localhost:3306';
        $BD_pass='danserver';
        $BD_datos='forodeveloper';
        
        self::$conexion = new mysqli($BD_host,$BD_user,$BD_pass,$BD_datos);
        
        if (mysqli_connect_error()) {
            
            die('Error de Conexión (' . mysqli_connect_error() . ') '
            . mysqli_connect_error());
         }

         return self::$conexion;
    }


    //Metodo cerrarConexion()
    public static function cerrarConexion($conexion)
    {
        if(isset($conexion)){
           mysqli_close($conexion);
        }
    }
 
     //Metodo getter Conexion
    public static function getConexion()
    {
        return self::$conexion;
    }

    //Metodos para manipulacion de datos

    public static function rows($x) {
        return mysqli_num_rows($x);
    }
    
    public static function recorrer($x) {
        return mysqli_fetch_array($x);
    }
    
    public static function liberar($x) {
        return mysqli_free_result($x);
    }
    
    public static function preparada() {
        return mysqli_stmt_init();
    }
}

 ?>