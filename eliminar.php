<?php
include("basedatos.php");
$conexion = conectar(); 
$id = $_GET['id'];
$eliminar = "DELETE FROM empleado WHERE id='$id'";

$resultado = mysqli_query($conexion,$eliminar);

if($resultado){
    header("Location:modificar.php");

} else {
    echo"<script>alert('No se pudo eliminar los datos');
    window.history.go(-1)</script>";
}