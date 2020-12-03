<?php
$conexion = mysqli_connect("localhost", "root","", "carpentry_project");
if (!$conexion)
{
    echo 'Error al conectar a la base de datos';
}
else
{
echo 'Conectado a la base de datos';
}