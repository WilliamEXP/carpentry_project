<?php

include 'conn.php';
public function obtenDatos($id_producto)
    {
/* $id_producto = $_GET['id_producto']; */

$sql="SELECT id_producto, nombre, cantidad, precio, tipo FROM producto WHERE id_producto = '$id_producto'" ;

$result = mysqli_query($conexion, $sql);
$ver = mysqli_fetch_row($result);
    
    $datos=array('id_producto'=>$ver[0], 'nombre'=>$ver[1], 'cantidad'=>$ver[2], 'precio'=>$ver[3], 'tipo'=>$ver[4]);
if (!$result)
{
    echo 'Error';
}
else
{
return $datos;
echo '<script>
window.history.go(-1);
</script>';     
}
mysqli_close($conexion);?>
}