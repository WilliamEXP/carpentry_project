<?php

include 'conn.php';
$id_cliente = $_GET['id_cliente'];

$borrar = "DELETE FROM clientes WHERE id_cliente = '$id_cliente'";



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
header("Location: ../recursos/cliente_tabla.php");    
}
mysqli_close($conexion);?>
