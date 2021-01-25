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
window.history.go(-1);
alert("Modificado")
</script>';    
}
mysqli_close($conexion);?>
