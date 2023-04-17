<?php

    include "database.php";

    $db = new DB_MIBASEMINOMBRE();

    if( $_GET['ci'] != "")
    {
        $db->delete_data($_GET['ci']);
    }

    header("Location: dashboard.php");

?>