<?php
    include 'database.php';

    $db = new DB_MIBASEMINOMBRE();

    print_r($db->get_data());

    //$db->insert_data("43756345", "Sofia Ramirez", "2002-09-11", "+591 6547655", "Tarija");
    //$db->update_data('987654321', 'Maria Diaz Beltran', '2002-09-11', '+591 60643003', 'La Paz');
    //$db->delete_data('23421523');
    print($db->check_login("juan_pablo", "password123"));
?>


