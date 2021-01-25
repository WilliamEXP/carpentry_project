<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

include 'conn.php';
$id_vendedor = $_POST["id_vendedor"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$genero = $_POST["genero"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$localidad = $_POST["localidad"];
$puesto = $_POST["puesto"];

$actualizar = "UPDATE vendedor SET nombre = '$nombre', apellido = '$apellido', genero = '$genero', direccion = '$direccion', telefono = '$telefono', localidad = '$localidad', Puesto = '$puesto' WHERE id_vendedor = '$id_vendedor'";
$resultado = mysqli_query($conexion, $actualizar);
if (!$resultado)
{
    echo 'Error';
}
else
{
echo '<script>
alert("Modificado")
</script>';  
header("Location: ../recursos/empleado_tabla.php");   
}
mysqli_close($conexion);?>
