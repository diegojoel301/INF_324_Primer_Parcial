<?php
    include "connection.php";
    $pdo = new Conexion();

    // CREATE

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json);

        $sql = $pdo->prepare("INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES (:ci, :nombre_completo, :fecha_nacimiento, :telefono, :departamento)");

        $sql->bindValue(":ci", $data->ci);
        $sql->bindValue(":nombre_completo", $data->nombre_completo);
        $sql->bindValue(":fecha_nacimiento", $data->fecha_nacimiento);
        $sql->bindValue(":telefono", $data->telefono);
        $sql->bindValue(":departamento", $data->departamento);

        $sql->execute();

        header("HTTP/1.1 200 Persona Agregada Exitosamente");

        exit;
    }

    // READ

    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        if(isset($_GET["ci"]))
        {
            
            $sql = $pdo->prepare("SELECT * FROM PERSONA WHERE ci=:ci");
            $sql->bindValue(":ci", $_GET["ci"]);
            
            $sql->execute();
            
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 Tengo Datos");
            
            echo json_encode($sql->fetchAll());
            exit;
        }
        else
        {
            $sql = $pdo->prepare("SELECT * FROM PERSONA");
    
            $sql->execute();
            
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 Tengo Datos");
            
            echo json_encode($sql->fetchAll());
            exit;
        }
    }

    // UPDATE

    if($_SERVER["REQUEST_METHOD"] == "PUT")
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json);

        $sql = $pdo->prepare("UPDATE PERSONA SET nombre_completo = :nombre_completo, fecha_nacimiento = :fecha_nacimiento, telefono = :telefono, departamento = :departamento WHERE ci = :ci");

        $sql->bindValue(":ci", $data->ci);
        $sql->bindValue(":nombre_completo", $data->nombre_completo);
        $sql->bindValue(":fecha_nacimiento", $data->fecha_nacimiento);
        $sql->bindValue(":telefono", $data->telefono);
        $sql->bindValue(":departamento", $data->departamento);

        $sql->execute();

        header("HTTP/1.1 200 Actualizacion Exitosa");

        exit;
        
    }

    // DELETE

    if($_SERVER["REQUEST_METHOD"] == "DELETE")
    {
        $sql = $pdo->prepare("DELETE FROM PERSONA WHERE ci = :ci");

        $sql->bindValue(":ci", $_GET['ci']);

        $sql->execute();

        header("HTTP/1.1 200 Borrado Exitoso");
    }
    
    

    ?>
