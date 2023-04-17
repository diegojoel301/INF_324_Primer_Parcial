<?php
    // Considerar el hecho de que este servicio sea implementado en otra maquina
    // u contenedor, necesitaremos la direccion del servidor host y la ruta
    // de ese modo creamos el url base donde haremos los redireccionamientos
    $host = $_SERVER['HTTP_HOST'];
    $ruta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $url = "http://$host$ruta/";

    include "database.php";
    
    $db = new DB_MIBASEMINOMBRE();

    if($db->check_login($_POST['username'], $_POST['password']) == 1)
    {
        session_start();

        $_SESSION['logged_user'] = $_POST['username'];
        $_SESSION['logged_password'] = $_POST['password'];

        header("Location: $url"."dashboard.php");
    }
    else
    {
        header("Location: $url");
    }

    //header("Location: $url");
    //echo "El recurso se ha movido hacia <a href=\"$url\">aquí</a>."
    echo $url;
?>