<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

include 'conn.php';
$id_producto = $_POST["id_producto"];
$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio_suferido = $_POST["precio_sugerido"];
$precio_total = $_POST["precio_total"];

$insertar = "INSERT INTO ventas (id_producto, nombre, cantidad, precio_sugerido, precio_total) VALUES ('$id_producto','$nombre','$cantidad', '$precio_sugerido', '$precio_total')";
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
