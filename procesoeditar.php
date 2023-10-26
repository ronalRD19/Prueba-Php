<?php
include("basedatos.php");
$conexion = conectar(); 
$id = $_POST['id'];
$nombre =  $_POST['nombre'];
$edad =  $_POST['edad'];

//actualizar datos
$actualizar = "UPDATE empleado SET nombre=?, edad=? WHERE id=?";

$stmt = mysqli_prepare($conexion, $actualizar);
mysqli_stmt_bind_param($stmt, 'sii', $nombre, $edad, $id);

$resultado = mysqli_stmt_execute($stmt);

if($resultado){
    echo "<script>
    alert('El empleado se actualizo con exito');
    window.location='listaempleados.php'</script>";

} else{
    echo"<script>alert('No se pudo actualizar los datos');
    window.history.go(-1)</script>";
}
?>