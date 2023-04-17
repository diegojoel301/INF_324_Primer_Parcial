<?php
include 'database.php';

session_start();

echo "<h5>Bienvenid@ ".$_SESSION['logged_user']." </h5>";
        
// Considerar el hecho de que este servicio sea implementado en otra maquina
// u contenedor, necesitaremos la direccion del servidor host y la ruta
// de ese modo creamos el url base donde haremos los redireccionamientos
$host = $_SERVER['HTTP_HOST'];
$ruta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$url = "http://$host$ruta/";

$db = new DB_MIBASEMINOMBRE();

if($db->check_login($_SESSION['logged_user'], $_SESSION['logged_password']) != 1)
{
    header("Location: $url");
}
?>