<?= $cabecera; ?>

<div class="card">
      <div class="card-body">
        <h5 class="card-title">Ingresar datos de la Persona</h5>
        <p class="card-text">
    

    <form method="POST" action="<?= site_url('actualizar') ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="carnet_identidad">Carnet Identidad:</label>
            <input type="text" name="carnet_identidad" id="carnet_identidad" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $persona['ci']?>">        
            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $persona['nombre_completo']?>">        
            <label for="fecha_nacimiento">Fecha Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?= $persona['fecha_nacimiento']?>"><br>
            <label for="nombre_completo">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $persona['telefono']?>">        
            <label for="nombre_completo">Departamento</label>
            <div class="form-group">
                <label for="exampleSelect">Selecciona Departamento:</label>
                <select class="form-control" id="exampleSelect" name="departamento"
                    
                value="<?php
                    $dep = "";
                    if($persona['departamento'] ==  '01')
                    {
                        $dep = "Chuquisaca";
                    }
                    if($persona['departamento'] == '02')
                    {
                        $dep = "La Paz";
                    }
                    if($persona['departamento']== '03')
                    {
                        $dep = "Cochabamba";
                    }
                    if($persona['departamento'] == '04')
                    {
                        $dep = "Oruro";
                    }
                    if($persona['departamento'] == '05')
                    {
                        $dep = "Potosi";
                    }
                    if($persona['departamento'] == '06')
                    {
                        $dep = "Tarija";
                    }
                    if($persona['departamento'] == '07')
                    {
                        $dep = "Santa Cruz";
                    }
                    if($persona['departamento'] == '08')
                    {
                        $dep = "Beni";
                    }
                    if($persona['departamento'] == '09')
                    {
                        $dep = "Pando";
                    }
                    echo $dep;
            ?>"> 
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
        <button class="btn btn-success" type="submit">Actualizar</button>
    </form>
    
    </p>
    </div>

<?= $pie_pagina; ?>