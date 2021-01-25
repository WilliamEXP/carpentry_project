<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

include 'conn.php';
$id_cliente = $_POST["id_cliente"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$genero = $_POST["genero"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$localidad = $_POST["localidad"];

$actualizar = "UPDATE clientes SET nombre = '$nombre', apellido = '$apellido', genero = '$genero', direccion = '$direccion', telefono = '$telefono', localidad = '$localidad' WHERE id_cliente = '$id_cliente'";
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
header("Location: ../recursos/cliente_tabla.php");   
}
mysqli_close($conexion);?>
