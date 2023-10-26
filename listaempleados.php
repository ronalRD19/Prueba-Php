<?php
include ("basedatos.php");
$usuarios = "SELECT * FROM empleado";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE EMPLEADOS</title>
</head>

<body>
        
        
        <h1>LISTA DE EMPLEADOS</h1>
        <table>
            <tr>
                <th>NOMBRE </th>
                <th>EDAD</th>
            </tr>

            <?php 
            include 'basedatos.php';

            $conexion = conectar();
            $resultado= mysqli_query($conexion,$usuarios);
while($row=mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <th> <?php echo $row["nombre"];?></th>
                <th> <?php echo $row["edad"];?></th>
            </tr>
            <?php } mysqli_free_result($resultado); ?>
        </table>
        <h4 class="container__title"> MODIFICAR EMPLEADO: <a href="modificar.php">Editar empleado</a> </h4>
</body>

</html>