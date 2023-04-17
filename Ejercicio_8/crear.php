<?php

    include "database.php";

    $db = new DB_MIBASEMINOMBRE();

    if( $_POST['carnet_identidad'] != "" and 
        $_POST['nombre_completo'] != "" and 
        $_POST['fecha_nacimiento'] != "" and 
        $_POST['telefono'] != "" and
        $_POST['departamento'] != "")
    
    {
        $db->insert_data($_POST['carnet_identidad'], $_POST['nombre_completo'], $_POST['fecha_nacimiento'], $_POST['telefono'], $_POST['departamento']);
    }

    header("Location: dashboard.php");

?>