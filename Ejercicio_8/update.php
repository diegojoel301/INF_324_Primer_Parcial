    <?php
        include 'header.php';
        include 'checker.php';
    ?>

<div class="card">
      <div class="card-body">
        <h5 class="card-title">Ingresar datos de la Persona</h5>
        <p class="card-text">
    

    <form method="POST" action="actualizar.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="carnet_identidad">Carnet Identidad:</label>
            <input type="text" name="carnet_identidad" id="carnet_identidad" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['ci']; ?>">        
            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['nombre_completo']; ?>">        
            <label for="fecha_nacimiento">Fecha Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $_GET['fecha_nacimiento'] ?>"><br>
            <label for="nombre_completo">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['telefono'] ?>">        
            
            <div class="form-group">
                <label for="exampleSelect">Selecciona Departamento:</label>
                <select class="form-control" id="exampleSelect" name="departamento">
                    <option>
                    <?php 
                    
                    $dep = '';
                    if($_GET['departamento'] ==  '01')
                    {
                        $dep = "Chuquisaca";
                    }
                    if($_GET['departamento'] == '02')
                    {
                        $dep = "La Paz";
                    }
                    if($_GET['departamento']== '03')
                    {
                        $dep = "Cochabamba";
                    }
                    if($_GET['departamento'] == '04')
                    {
                        $dep = "Oruro";
                    }
                    if($_GET['departamento'] == '05')
                    {
                        $dep = "Potosi";
                    }
                    if($_GET['departamento'] == '06')
                    {
                        $dep = "Tarija";
                    }
                    if($_GET['departamento'] == '07')
                    {
                        $dep = "Santa Cruz";
                    }
                    if($_GET['departamento'] == '08')
                    {
                        $dep = "Beni";
                    }
                    if($_GET['departamento'] == '09')
                    {
                        $dep = "Pando";
                    }
                    echo $dep;
                    ?>
                    
                    </option>
                    <option>Chuquisaca</option>
                    <option>La Paz</option>
                    <option>Cochabamba</option>
                    <option>Oruro</option>
                    <option>Potosi</option>
                    <option>Tarija</option>
                    <option>Santa Cruz</option>
                    <option>Beni</option>
                    <option>Pando</option>
                </select>
            </div>
        </div>
        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
    <?php include 'footer.php' ?>