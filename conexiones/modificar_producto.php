<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

include 'conn.php';
$id_producto = $_POST["id_producto"];
$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$tipo = $_POST["tipo"];

$actualizar = "UPDATE producto SET nombre = '$nombre', tipo = '$tipo', precio = '$precio', cantidad = '$cantidad' WHERE id_producto = '$id_producto'";
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
header("Location: ../recursos/producto_tabla.php");   
}
mysqli_close($conexion);?>
