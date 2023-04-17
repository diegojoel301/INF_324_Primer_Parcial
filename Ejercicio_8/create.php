    <?php
        include 'header.php'; 
        include 'checker.php';
        
    ?>

<div class="card">
      <div class="card-body">
        <h5 class="card-title">Ingresar datos de la Persona</h5>
        <p class="card-text">
    

    <form method="POST" action="crear.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="carnet_identidad">Carnet Identidad:</label>
            <input type="text" name="carnet_identidad" id="carnet_identidad" class="form-control" placeholder="" aria-describedby="helpId">        
            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" placeholder="" aria-describedby="helpId">        
            <label for="fecha_nacimiento">Fecha Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"><br>
            <label for="nombre_completo">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="" aria-describedby="helpId">
            
            <div class="form-group">
                <label for="exampleSelect">Selecciona Departamento:</label>
                <select class="form-control" id="exampleSelect" name="departamento">
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