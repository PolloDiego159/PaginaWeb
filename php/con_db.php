<?php

$servidor= "localhost";
$usuario= "root";
$contrasena = "";
$BD = "registro";

$conex =mysqli_connect($servidor, $usuario, $contrasena, $BD);
/*
if (!$conex){
    echo "Fallo la conexion <br>";
    die("conection failed: " . mysqli_connect_error());
} else{
    echo "Conexiön exitosa";
}
*/
?>