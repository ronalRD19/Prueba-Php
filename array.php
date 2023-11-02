<?php
function insertarRegistro($datos) {
    // Tu código de inserción aquí
}

// Ejemplo de llamada a la función insertarRegistro
$datos_insertar = array(
    'empleado_nombre' => 'Juan',
    'empleado_edad' => 30,
    // Agregar más campos según la estructura de tu tabla
);
var_dump($datos_insertar); // Verificar si los valores son los esperados

insertarRegistro($datos_insertar);
?>