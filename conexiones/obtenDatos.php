<?php
require_once "crud.php"
$conexion = mysqli_connect("localhost", "root","", "carpentry_proyect");

$obj = new crud();
echo json_encode($obj->obtenDatos($_POST['id_producto']));

?>