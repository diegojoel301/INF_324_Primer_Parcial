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
                <a class="nav-link" href="contactanos.php">Contactanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Quienes Somos?</a>
              </li>
                
            </ul>
          </div>
        </nav>
        <?php
            session_start();
            if($_SESSION['logged_user'] != "" and $_SESSION['logged_rol'] != "")
                echo "Bienvenid@ ".$_SESSION['logged_user']." con rol de ".$_SESSION['logged_rol']. "<br>";
        ?>

        <h3>Contactese con el propietario del sitio:</h3>
        <h4>Univ. Diego Joel Condori Quispe</h4>
    </body>
</html>
