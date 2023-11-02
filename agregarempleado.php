<?php
include 'basedatos.php';
$conexion = conectar();

$nombre = $_POST["empleado_nombre"];
$edad = $_POST["empleado_edad"];

$stmt = $conexion->prepare("SELECT * FROM empleado WHERE nombre = ?");
$stmt->bind_param("s", $nombre);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo '<script>
    alert("El empleado ya esta registrado");
    window.history.go(-1)</script>';
    exit;
}

$stmt = $conexion->prepare("INSERT INTO empleado(nombre,edad) VALUES (?, ?)");
$stmt->bind_param("si", $nombre, $edad);

if ($stmt->execute()) {
    echo "<script>
    alert('El empleado se registro con exito');
    window.location='listaempleados.php'</script>";
} else {
    echo 'Error al resgistrarse';
}

$stmt->close();
$conexion->close();
?>