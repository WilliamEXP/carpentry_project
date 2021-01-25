<?php

include 'conn.php';
$id_vendedor = $_GET['id_vendedor'];

$borrar = "DELETE FROM vendedor WHERE id_vendedor = '$id_vendedor'";



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
header("Location: ../recursos/empleado_tabla.php");    
}
mysqli_close($conexion);?>
