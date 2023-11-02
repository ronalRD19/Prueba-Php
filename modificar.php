<?php
include ("basedatos.php");


$conexion = conectar();
$usuarios = "SELECT * FROM empleado";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MODIFICACIONES </title>
</head>

<body>
    <h1>LISTA DE EMPLEADOS</h1>
    <table>
        <tr>
            <th>NOMBRE </th>
            <th>EDAD</th>
            <th>OPERACION</th>
        </tr>

        <?php $resultado= mysqli_query($conexion,$usuarios);
while($row=mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <th> <?php echo $row["nombre"];?></th>
            <th> <?php echo $row["edad"];?></th>
            <th> <a href="editar.php?id=<?php echo $row["id"];?>">Editar</a> |</th>
                <a href="eliminar.php?id=<?php echo $row["id"];?>" class="elimina">Elminar</a>
        </tr>
        <?php } mysqli_free_result($resultado); ?>
    </table>
    <script src="confirmacion.js"></script>
</body>

</html>