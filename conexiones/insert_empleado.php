<?php

include 'conn.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$genero = $_POST["genero"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$localidad = $_POST["localidad"];
$puesto = $_POST["puesto"];

$insertar = "INSERT INTO vendedor (nombre, apellido, genero, direccion, telefono, localidad, Puesto) VALUES ('$nombre','$apellido','$genero', '$direccion', '$telefono', '$localidad', '$puesto')";

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
