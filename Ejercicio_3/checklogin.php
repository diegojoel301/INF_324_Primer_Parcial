<?php
    $user = $_POST['username'];
    $pass = $_POST['password'];
    echo $user."xd".$pass;

    // Considerar el hecho de que este servicio sea implementado en otra maquina
    // u contenedor, necesitaremos la direccion del servidor host y la ruta
    // de ese modo creamos el url base donde haremos los redireccionamientos
    $host = $_SERVER['HTTP_HOST'];
    $ruta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $url = "http://$host$ruta/";

    include "db_connection.php";
    $user = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);

    $sql = sprintf("SELECT rol FROM USUARIO WHERE usuario LIKE '%s' AND password LIKE md5('%s')", $user, $pass);
    
    $ans = $con->query($sql);
    $con->close();
    if($ans->num_rows == 1)
    {
        session_start();

        $_SESSION['logged_user'] = $user;
        $_SESSION['logged_rol'] = $ans->fetch_assoc()['rol'];
        header("Location: $url"."index.php");
    }
    
    else
    {
        header("Location: $url"."login.php");
    }

    //header("Location: $url");
    //echo "El recurso se ha movido hacia <a href=\"$url\">aquí</a>."
    //echo $url;
?>
