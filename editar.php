<?php
include ("basedatos.php");
$conexion = conectar(); 
$id = $_GET["id"];
$usuarios = "SELECT * FROM empleado WHERE id='$id'";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Panel De Actualización </title>
</head>

<body>
    <form action="procesoeditar.php" method="post">
        <h1>EDITAR</h1>

        <table>
            <tr>
                <th>NOMBRE </th>
                <th>EDAD</th>

            </tr>

            <?php $resultado= mysqli_query($conexion,$usuarios);
while($row=mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <input type="hidden" value="<?php echo $row["id"];?>" name="id">
                <th> <input type="text" value="<?php echo $row["nombre"];?>" name="nombre"></th>
                <th> <input type="text" value="<?php echo $row["edad"];?>" name="edad"></th>
                <th><input type="submit" value="Actualizar"></th>
            </tr>
 
            <?php } mysqli_free_result($resultado); ?>
        </table>
</body>

</html>