<?php

include 'conn.php';
$id_producto = $_GET['id_producto'];

$borrar = "DELETE FROM producto WHERE id_producto = '$id_producto'";



$resultado = mysqli_query($conexion, $borrar);
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
