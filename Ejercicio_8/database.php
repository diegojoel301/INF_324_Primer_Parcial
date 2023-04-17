<?php
    class DB_MIBASEMINOMBRE{

        private $host;
        private $user;
        private $password;

        function __construct()
        {
            $this->host = "172.17.0.2";
            $this->user = "root";
            $this->password = "diegojoel301";
            $this->database = "MIBASEMINOMBRE";
        }

        function get_data()
        {
            $con = mysqli_connect($this->host, $this->user, $this->password);
            mysqli_select_db($con, "MIBASEMINOMBRE");

            $sql = "SELECT * FROM PERSONA";
            $result = $con->query($sql);

            $con->close();
            return $result;
        }

        function insert_data($ci, $nombre_completo, $fecha_nacimiento, $telefono, $departamento)
        {
            $con = mysqli_connect($this->host, $this->user, $this->password);
            mysqli_select_db($con, $this->database);

            $ci = mysqli_real_escape_string($con, $ci);
            $nombre_completo = mysqli_real_escape_string($con, $nombre_completo);
            $fecha_nacimiento = mysqli_real_escape_string($con, $fecha_nacimiento);
            $telefono = mysqli_real_escape_string($con, $telefono);
            $departamento = mysqli_real_escape_string($con, $departamento);

            $dep = "";

            if($departamento ==  'Chuquisaca')
            {
                $dep = "01";
            }
            if($departamento == 'La Paz')
            {
                $dep = "02";
            }
            if($departamento == 'Cochabamba')
            {
                $dep = "03";
            }
            if($departamento == 'Oruro')
            {
                $dep = "04";
            }
            if($departamento == 'Potosi')
            {
                $dep = "05";
            }
            if($departamento == 'Tarija')
            {
                $dep = "06";
            }
            if($departamento == 'Santa Cruz')
            {
                $dep = "07";
            }
            if($departamento == 'Beni')
            {
                $dep = "08";
            }
            if($departamento == 'Pando')
            {
                $dep = "09";
            }

            $sql = "INSERT INTO PERSONA(ci, nombre_completo, fecha_nacimiento, telefono, departamento) VALUES ('$ci', '$nombre_completo', '$fecha_nacimiento', '$telefono', '$dep')";

            mysqli_query($con, $sql);

            $con->close();
            return true;

        }

        function update_data($ci, $nombre_completo, $fecha_nacimiento, $telefono, $departamento)
        {
            $con = mysqli_connect($this->host, $this->user, $this->password);
            mysqli_select_db($con, $this->database);

            $ci = mysqli_real_escape_string($con, $ci);
            $nombre_completo = mysqli_real_escape_string($con, $nombre_completo);
            $fecha_nacimiento = mysqli_real_escape_string($con, $fecha_nacimiento);
            $telefono = mysqli_real_escape_string($con, $telefono);
            $departamento = mysqli_real_escape_string($con, $departamento);

            $dep = "";

            if($departamento ==  'Chuquisaca')
            {
                $dep = "01";
            }
            if($departamento == 'La Paz')
            {
                $dep = "02";
            }
            if($departamento == 'Cochabamba')
            {
                $dep = "03";
            }
            if($departamento == 'Oruro')
            {
                $dep = "04";
            }
            if($departamento == 'Potosi')
            {
                $dep = "05";
            }
            if($departamento == 'Tarija')
            {
                $dep = "06";
            }
            if($departamento == 'Santa Cruz')
            {
                $dep = "07";
            }
            if($departamento == 'Beni')
            {
                $dep = "08";
            }
            if($departamento == 'Pando')
            {
                $dep = "09";
            }

            $sql = "UPDATE PERSONA SET nombre_completo = '$nombre_completo', fecha_nacimiento = '$fecha_nacimiento', telefono = '$telefono', departamento = '$dep' WHERE ci = '$ci'";

            mysqli_query($con, $sql);

            $con->close();
            return true;

        }

        function delete_data($ci)
        {
            $con = mysqli_connect($this->host, $this->user, $this->password);
            mysqli_select_db($con, $this->database);

            $ci = mysqli_real_escape_string($con, $ci);
            
            $sql = "DELETE FROM PERSONA WHERE ci = '$ci'";
            
            mysqli_query($con, $sql);

            $con->close();
            return true;
        }

        function check_login($login_username, $login_password)
        {
            $con = mysqli_connect($this->host, $this->user, $this->password);
            mysqli_select_db($con, $this->database);

            $login_username = mysqli_real_escape_string($con, $login_username);
            $login_password = mysqli_real_escape_string($con, $login_password);
            
            $sql = "SELECT usuario, password FROM USUARIO WHERE usuario LIKE '$login_username' AND password LIKE MD5('$login_password')";

            $ans = $con->query($sql);

            $con->close();

            if($ans->num_rows == 1)
                return true;
            return false;
        }

    }

?>
