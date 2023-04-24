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
            if(isset($_SESSION['logged_user']))
            {
                if($_SESSION['logged_user'] != "" and $_SESSION['logged_rol'] != "")
                    echo "Bienvenid@ ".$_SESSION['logged_user']." con rol de ".$_SESSION['logged_rol']. "<br>";
            }
        ?>

        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="./img/fisica.jpg" alt=""  />
                </div>
                <div class="col-md-8">
                   <div class="card-body"> 
                       <h3 class="card-title">Carrera de Fisica</h3>
                       <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse maximus ante ac tellus ornare semper. Donec sed est vitae purus consectetur faucibus. Pellentesque in rutrum sem. Nunc eget tellus ac magna pulvinar ornare. Quisque ut nisi turpis. Cras luctus at dolor sit amet lacinia. Mauris blandit placerat lacinia. Duis placerat justo velit, vel ornare dui varius vitae. Duis nulla ligula, accumsan eu ipsum eu, pretium mollis magna. Duis dui mi, scelerisque vitae odio ut, tincidunt ultrices eros. Phasellus viverra, ligula vitae vehicula volutpat, quam tellus semper libero, sit amet iaculis odio leo vulputate urna. Donec id ipsum est.</p>
                       <button class="btn btn-primary">Mas informacion</button>
                   </div>
                </div>
            </div>
        </div>
    <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="./img/informatica.jpg" alt="" />
                </div>
                <div class="col-md-8">
                   <div class="card-body"> 
                       <h3 class="card-title">Carrera de Informatica</h3>
                       <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse maximus ante ac tellus ornare semper. Donec sed est vitae purus consectetur faucibus. Pellentesque in rutrum sem. Nunc eget tellus ac magna pulvinar ornare. Quisque ut nisi turpis. Cras luctus at dolor sit amet lacinia. Mauris blandit placerat lacinia. Duis placerat justo velit, vel ornare dui varius vitae. Duis nulla ligula, accumsan eu ipsum eu, pretium mollis magna. Duis dui mi, scelerisque vitae odio ut, tincidunt ultrices eros. Phasellus viverra, ligula vitae vehicula volutpat, quam tellus semper libero, sit amet iaculis odio leo vulputate urna. Donec id ipsum est.</p>
                       <button class="btn btn-primary">Mas informacion</button>
                   </div>
                </div>
            </div>
        </div>
    <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="./img/matematica.jpg" alt="" />
                </div>
                <div class="col-md-8">
                   <div class="card-body"> 
                       <h3 class="card-title">Carrera de Matematica</h3>
                       <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse maximus ante ac tellus ornare semper. Donec sed est vitae purus consectetur faucibus. Pellentesque in rutrum sem. Nunc eget tellus ac magna pulvinar ornare. Quisque ut nisi turpis. Cras luctus at dolor sit amet lacinia. Mauris blandit placerat lacinia. Duis placerat justo velit, vel ornare dui varius vitae. Duis nulla ligula, accumsan eu ipsum eu, pretium mollis magna. Duis dui mi, scelerisque vitae odio ut, tincidunt ultrices eros. Phasellus viverra, ligula vitae vehicula volutpat, quam tellus semper libero, sit amet iaculis odio leo vulputate urna. Donec id ipsum est.</p>
                       <button class="btn btn-primary">Mas informacion</button>
                   </div>
                </div>
            </div>
        </div>
    <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="./img/quimica.jpg" alt="" />
                </div>
                <div class="col-md-8">
                   <div class="card-body"> 
                       <h3 class="card-title">Carrera de Quimica</h3>
                       <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse maximus ante ac tellus ornare semper. Donec sed est vitae purus consectetur faucibus. Pellentesque in rutrum sem. Nunc eget tellus ac magna pulvinar ornare. Quisque ut nisi turpis. Cras luctus at dolor sit amet lacinia. Mauris blandit placerat lacinia. Duis placerat justo velit, vel ornare dui varius vitae. Duis nulla ligula, accumsan eu ipsum eu, pretium mollis magna. Duis dui mi, scelerisque vitae odio ut, tincidunt ultrices eros. Phasellus viverra, ligula vitae vehicula volutpat, quam tellus semper libero, sit amet iaculis odio leo vulputate urna. Donec id ipsum est.</p>
                       <button class="btn btn-primary">Mas informacion</button>
                   </div>
                </div>
            </div>
        </div>
        <h4>Univ. Diego Joel Condori Quispe</h4>
    </body>
</html>
