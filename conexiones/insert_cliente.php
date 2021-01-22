<?php

include 'conn.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$genero = $_POST["genero"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$localidad = $_POST["localidad"];

$insertar = "INSERT INTO clientes (nombre, apellido, genero, direccion, telefono, localidad) VALUES ('$nombre','$apellido','$genero', '$direccion', '$telefono', '$localidad')";

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado)
{
    echo 'Error';
}
else
{
echo '<script>
window.history.go(-1);
alert("Agregado")
</script>';    
}
mysqli_close($conexion);?>
