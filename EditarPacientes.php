<?php

include './templates/Header.php';
include './model/Connection.php';

$expediente = $_GET['expediente'];
$query = $db->prepare("SELECT * FROM pacientes where expediente=?");
$query->execute([$expediente]);
$paciente = $query->fetch(PDO::FETCH_OBJ);

?>
<div class="container mt-3">
<div class="card">
        <div class="card-header">Verifique los datos a editar del paciente:</div>
            <form action="./controllers/ActualizarPacientes.php" method="POST">
                <div class="m-3">
                    <label for="">Nombre</label>
                    <input class="form-control" type="text" name="inputNombre" value="<?php echo $paciente->nombre ?>" placeholder="Ingrese nombre del paciente" required>                
                </div>
                <div class="m-3">
                    <label for="">Raza</label>
                    <input class="form-control" type="text" name="inputRaza" value="<?php echo $paciente->raza ?>" placeholder="Ingrese raza" required>                
                </div> 
                <div class="m-3">
                    <label for="">Fecha de nacimiento</label>
                    <input class="form-control" type="date" name="inputFecha_nacimiento" value=<?php echo $paciente->fecha_nacimiento ?> placeholder="Ingrese fecha de nacimiento" required>                
                </div>
                <div class="m-3">
                    <label for="">Encargado</label>
                    <input class="form-control" type="text" name="inputEncargado" value="<?php echo $paciente->encargado ?>" placeholder="Ingrese nombre del encargado" required>                
                </div>
                <div class="m-3">
                    <label for="">DUI del encargado</label>
                    <input class="form-control" type="text" name="inputDUI_encargado" value="<?php echo $paciente->dui_encargado ?>" placeholder="Ingrese DUI del encargado" required>                
                </div>
                <div class="m-3">
                    <label for="">Teléfono</label>
                    <input class="form-control" type="text" name="inputTelefono" value="<?php echo $paciente->telefono ?>" placeholder="Ingrese número de teléfono" required>                
                </div>
                <div class="m-3">
                    <label for="">Dirección</label>
                    <input class="form-control" type="text" name="inputDireccion" value="<?php echo $paciente->direccion ?>" placeholder="Ingrese lugar de residencia" required>                
                </div>
                <div class="m-3">
                    <label for="">Correo electrónico</label>
                    <input class="form-control" type="text" name="inputCorreo" value="<?php echo $paciente->correo ?>" placeholder="Ingrese correo electrónico" required>                
                </div>
                <input type="hidden" name="expediente" value="<?php echo $paciente->expediente ?>">
                <input type="submit" class="btn btn-primary m-3" name="" value="Editar">        
            </form>
</div>
</div>
<?php
include './templates/Footer.php'
?>