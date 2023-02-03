<?php

include './templates/Header.php';
include './model/Connection.php';

$idEmpleado = $_GET['id'];
$query = $db->prepare("SELECT * FROM empleados where id=?");
$query->execute([$idEmpleado]);
$empleado = $query->fetch(PDO::FETCH_OBJ);

?>
<div class="container mt-3">
<div class="card">
        <div class="card-header">Verifique los datos a editar del empleado:</div>
            <form action="./controllers/Actualizar.php" method="POST">
                <div class="m-3">
                    <label for="">Nombres</label>
                    <input class="form-control" type="text" name="inputNombres" value="<?php echo $empleado->nombres ?>" placeholder="Ingrese nombres" required>                
                </div>
                <div class="m-3">
                    <label for="">Apellidos</label>
                    <input class="form-control" type="text" name="inputApellidos" value="<?php echo $empleado->apellidos ?>" placeholder="Ingrese apellidos" required>                
                </div> 
                <div class="m-3">
                    <label for="">DUI</label>
                    <input class="form-control" type="text" name="inputDUI" value=<?php echo $empleado->dui ?> placeholder="Ingrese DUI" required>                
                </div>
                <div class="m-3">
                    <label for="">Edad</label>
                    <input class="form-control" type="text" name="inputEdad" value="<?php echo $empleado->edad ?>" placeholder="Ingrese edad" required>                
                </div>
                <div class="m-3">
                    <label for="">Cargo</label>
                    <input class="form-control" type="text" name="inputCargo" value="<?php echo $empleado->cargo ?>" placeholder="Ingrese cargo/posición" required>                
                </div>
                <div class="m-3">
                    <label for="">Dirección</label>
                    <input class="form-control" type="text" name="inputDireccion" value="<?php echo $empleado->direccion ?>" placeholder="Ingrese lugar de residencia" required>                
                </div>
                <div class="m-3">
                    <label for="">Teléfono</label>
                    <input class="form-control" type="text" name="inputTelefono" value="<?php echo $empleado->telefono ?>" placeholder="Ingrese número de teléfono" required>                
                </div>
                <div class="m-3">
                    <label for="">Correo</label>
                    <input class="form-control" type="text" name="inputCorreo" value="<?php echo $empleado->correo ?>" placeholder="Ingrese correo electrónico" required>                
                </div>
                <input type="hidden" name="id" value="<?php echo $empleado->id ?>">
                <input type="submit" class="btn btn-primary m-3" name="" value="Editar">    
            </form> 
</div>
</div>
<?php
include './templates/Footer.php'
?>