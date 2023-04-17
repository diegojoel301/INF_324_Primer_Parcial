<?php
  session_start();
  $host = $_SERVER['HTTP_HOST'];
  $ruta = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $url = "http://$host$ruta/";

  include "db_connection.php";
  $user = mysqli_real_escape_string($con, $_SESSION['logged_user']);
  $pass = mysqli_real_escape_string($con, $_SESSION['logged_rol']);

  $sql = sprintf("SELECT rol FROM USUARIO WHERE usuario LIKE '%s' AND rol LIKE '%s'", $user, $pass);

  $ans = $con->query($sql);

  if($ans->fetch_assoc()['rol'] != "director")
  {
      header("Location: $url");
  }
  $con->close();
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title></title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">FCPN - INF 324</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Ingresar</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Visualizar por departamento la media de notas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contactanos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quienes Somos?</a>
      </li>
    </ul>
  </div>
</nav>

    <?php
      if($_SESSION['logged_user'] != "" and $_SESSION['logged_rol'] != "")
        echo "Bienvenid@ ".$_SESSION['logged_user']." con rol de ".$_SESSION['logged_rol']. "<br>";

      include "db_connection.php";
      $sql = "SELECT 
      IFNULL(SUM(IF(departamento = '01', promedio, 0)), 0) AS 'Chuquisaca',
      IFNULL(SUM(IF(departamento = '02', promedio, 0)), 0) AS 'La Paz',
      IFNULL(SUM(IF(departamento = '03', promedio, 0)), 0) AS 'Cochabamba',
      IFNULL(SUM(IF(departamento = '04', promedio, 0)), 0) AS 'Oruro',
      IFNULL(SUM(IF(departamento = '05', promedio, 0)), 0) AS 'Potosi',
      IFNULL(SUM(IF(departamento = '06', promedio, 0)), 0) AS 'Tarija',
      IFNULL(SUM(IF(departamento = '07', promedio, 0)), 0) AS 'Santa Cruz',
      IFNULL(SUM(IF(departamento = '08', promedio, 0)), 0) AS 'Beni',
      IFNULL(SUM(IF(departamento = '09', promedio, 0)), 0) AS 'Pando'
    FROM (
      SELECT xs.departamento AS departamento, AVG(xd.notafinal) AS promedio
      FROM INSCRIPCION xd, PERSONA xs 
      WHERE xd.ci_estudiante = xs.ci
      GROUP BY departamento
    ) AS datos";

    $ans = $con->query($sql);

    echo '<table class="table">';
    echo '<thead>';
    echo '<th scope="col">Chuquisaca</th>';
    echo '<th scope="col">La Paz</th>';
    echo '<th scope="col">Cochabamba</th>';
    echo '<th scope="col">Oruro</th>';
    echo '<th scope="col">Potosi</th>';
    echo '<th scope="col">Tarija</th>';
    echo '<th scope="col">Santa Cruz</th>';
    echo '<th scope="col">Beni</th>';
    echo '<th scope="col">Pando</th>';

    echo '</thead>';
    echo '<tbody>';

    while($fila = $ans->fetch_assoc())
    {
      echo '<tr>';
      echo '<td>'.$fila['Chuquisaca'].'</td>';
      echo '<td>'.$fila['La Paz'].'</td>';
      echo '<td>'.$fila['Cochabamba'].'</td>';
      echo '<td>'.$fila['Oruro'].'</td>';
      echo '<td>'.$fila['Potosi'].'</td>';
      echo '<td>'.$fila['Tarija'].'</td>';
      echo '<td>'.$fila['Santa Cruz'].'</td>';
      echo '<td>'.$fila['Beni'].'</td>';
      echo '<td>'.$fila['Pando'].'</td>';
      echo '</tr>';
    }

    echo '<tbody>';
    echo '</table>';


    ?>
    <h4>Univ. Diego Joel Condori Quispe</h4>
    </body>
</html>
