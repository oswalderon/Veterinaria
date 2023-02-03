<?php
include './templates/Header.php';
include './model/Connection.php';
$query = $db->query("SELECT * FROM pacientes");
$paciente = $query->fetchAll(PDO::FETCH_OBJ)
?>

<div class="container">
    <div class="row">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">No. de expediente</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Raza</th>
                    <th scope="col">Encargado</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>            
            </thead>
            <tbody>
                <?php
                    foreach($paciente as $dato){
                ?>
                <tr>
                    <th scope="row"><?php echo $dato->expediente ?></th>
                    <td><?php echo $dato->nombre ?></td>
                    <td><?php echo $dato->raza ?></td>
                    <td><?php echo $dato->encargado ?></td>
                    <td><?php echo $dato->telefono ?></td>
                    <td><?php echo $dato->direccion ?></td>
                    <td><?php echo $dato->correo ?></td>
                    <td><a class="btn btn-primary" href="EditarPacientes.php?expediente=<?php echo $dato->expediente?>">Editar</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table>      
    </div>

    <div class="card">
        <div class="card-header">Ingrese los datos del paciente:</div>
            <form action="./controllers/RegistrarPacientes.php" method="POST">
                <div class="m-3">
                    <label for="">Nombre</label>
                    <input class="form-control" type="text" name="inputNombre" value="" placeholder="Ingrese nombre del paciente" required>                
                </div>
                <div class="m-3">
                    <label for="">Raza</label>
                    <input class="form-control" type="text" name="inputRaza" value="" placeholder="Ingrese raza" required>                
                </div> 
                <div class="m-3">
                    <label for="">Fecha de nacimiento</label>
                    <input class="form-control" type="date" name="inputFecha_nacimiento" value="" placeholder="Ingrese fecha de nacimiento" required>                
                </div>
                <div class="m-3">
                    <label for="">Encargado</label>
                    <input class="form-control" type="text" name="inputEncargado" value="" placeholder="Ingrese nombre del encargado" required>                
                </div>
                <div class="m-3">
                    <label for="">DUI del encargado</label>
                    <input class="form-control" type="text" name="inputDUI_encargado" value="" placeholder="Ingrese DUI del encargado" required>                
                </div>
                <div class="m-3">
                    <label for="">Teléfono</label>
                    <input class="form-control" type="text" name="inputTelefono" value="" placeholder="Ingrese número de teléfono" required>                
                </div>
                <div class="m-3">
                    <label for="">Dirección</label>
                    <input class="form-control" type="text" name="inputDireccion" value="" placeholder="Ingrese lugar de residencia" required>                
                </div>
                <div class="m-3">
                    <label for="">Correo electrónico</label>
                    <input class="form-control" type="text" name="inputCorreo" value="" placeholder="Ingrese correo electrónico" required>                
                </div>
                <input type="submit" class="btn btn-primary m-3" name="" value="Registrar">          
            </form>
    </div>
</div>

<?php
include './templates/Footer.php'
?>