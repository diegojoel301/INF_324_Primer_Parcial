
<?= $cabecera ?>
<a class="btn btn-info" href="<?= base_url('index.php/create') ?>">Adicionar Persona</a>
<br>
<br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Ci</th>
                        <th>Nombre Completo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Telefono</th>
                        <th>Departamento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($personas as $persona): ?>
                    <tr>
                        <td><?= $persona['ci'] ?></td>
                        <td><?= $persona['nombre_completo'] ?></td>
                        <td><?= $persona['fecha_nacimiento'] ?></td>
                        <td><?= $persona['telefono'] ?></td>
                        <td><?= $persona['departamento'] ?>
                        <td>
                        <?php
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
            ?>
                        </td>
                        <td>
                        <a href="<?= base_url('index.php/editar/'.$persona['ci']); ?>"class="btn btn-warning" type="button">Editar</a>
                            / 
                            <a href="<?= base_url('index.php/borrar/'.$persona['ci']); ?>"class="btn btn-danger" type="button">Borrar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

<?= $pie_pagina ?>