<?php
 require 'basedatos.php';
 
 $con = conectar();
 
 if (!$con) {
     // Manejo del error en caso de que no se haya podido conectar
     echo "No se pudo conectar a la base de datos.";
     die();
 }
 
 // Si llega aquí, la conexión se ha realizado con éxito
 echo "Conexión exitosa a la base de datos.";
 
 /// esto es una forma de hacer la comprobacion. 
/*
include ("basedatos.php");

$con=conectar();
 echo "se realizo exitosamentente la conexion a la base de datos";*/
 ?>






 



