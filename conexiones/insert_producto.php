<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

include 'conn.php';
$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio_sugerido"];
$tipo = $_POST["tipo"];

$insertar = "INSERT INTO producto (nombre, tipo,precio, cantidad) VALUES ('$nombre','$tipo','$precio', '$cantidad')";
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
