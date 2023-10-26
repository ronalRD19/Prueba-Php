<?php

if (!function_exists('conectar')) {
    function conectar() {
        $conexion = mysqli_connect("localhost", "root", "", "empresa");
        mysqli_set_charset($conexion, "utf8");

        if (!$conexion) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        return $conexion;
    }
}
?>