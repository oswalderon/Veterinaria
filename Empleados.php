<?php
include './templates/Header.php';
include './model/Connection.php';
$query = $db->query("SELECT * FROM empleados");
$empleado = $query->fetchAll(PDO::FETCH_OBJ)
?>

<div class="container">
    <div class="row">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">DUI</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Correo electrónico</th>
                    <th scope="col">Acciones</th>
                </tr>            
            </thead>
            <tbody>
                <?php
                    foreach($empleado as $dato){
                ?>
                <tr>
                    <th scope="row"><?php echo $dato->id ?></th>
                    <td><?php echo $dato->nombres ?></td>
                    <td><?php echo $dato->apellidos ?></td>
                    <td><?php echo $dato->dui ?></td>
                    <td><?php echo $dato->cargo ?></td>
                    <td><?php echo $dato->telefono ?></td>
                    <td><?php echo $dato->correo ?></td>
                    <td><a class="btn btn-primary" href="Editar.php?id=<?php echo $dato->id?>">Editar</a>
                        <a class="btn btn-danger disabled" href="./controllers/Eliminar.php?id=<?php echo $dato->id?>">Eliminar</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table>      
    </div>

    <div class="card">
        <div class="card-header">Ingrese los datos del empleado:</div>
            <form action="./controllers/Register.php" method="POST">
                <div class="m-3">
                    <label for="">Nombres</label>
                    <input class="form-control" type="text" name="inputNombres" value="" placeholder="Ingrese nombres" required>                
                </div>
                <div class="m-3">
                    <label for="">Apellidos</label>
                    <input class="form-control" type="text" name="inputApellidos" value="" placeholder="Ingrese apellidos" required>                
                </div> 
                <div class="m-3">
                    <label for="">DUI</label>
                    <input class="form-control" type="text" name="inputDUI" value="" placeholder="Ingrese DUI" required>                
                </div>
                <div class="m-3">
                    <label for="">Edad</label>
                    <input class="form-control" type="text" name="inputEdad" value="" placeholder="Ingrese edad" required>                
                </div>
                <div class="m-3">
                    <label for="">Cargo</label>
                    <input class="form-control" type="text" name="inputCargo" value="" placeholder="Ingrese cargo/posición" required>                
                </div>
                <div class="m-3">
                    <label for="">Dirección</label>
                    <input class="form-control" type="text" name="inputDireccion" value="" placeholder="Ingrese lugar de residencia" required>                
                </div>
                <div class="m-3">
                    <label for="">Teléfono</label>
                    <input class="form-control" type="text" name="inputTelefono" value="" placeholder="Ingrese número de teléfono" required>                
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