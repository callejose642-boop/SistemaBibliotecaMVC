<?php
class Conexion
{
    // Usamos un método estático (public static) para poder llamarlo desde 
    // cualquier Modelo sin necesidad de instanciar la clase.
    public static function conectar()
    {
        // Credenciales por defecto para Laragon 
        $host = "localhost";
        $bd = "biblioteca_mvc"; // El nombre exacto que le dimos en HeidiSQL
        $usuario = "root";
        $clave = ""; // Se deja en blanco en entornos locales

        // Usamos mysqli 
        $conn = new mysqli($host, $usuario, $clave, $bd);

        // Si por alguna razón el servidor de base de datos se apaga, mostramos este error
        if ($conn->connect_error) {
            die("Error de conexión a la Base de Datos: " . $conn->connect_error);
        }

        // Forzamos el charset para que las tildes y las 'ñ' se guarden y muestren bien
        $conn->set_charset("utf8");

        return $conn;
    }
}