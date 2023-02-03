<?php

include '../model/Connection.php';

$expediente = $_POST['expediente'];
$nombre = $_POST["inputNombre"];
$raza = $_POST["inputRaza"];
$fecha_nacimiento = $_POST["inputFecha_nacimiento"];
$encargado = $_POST["inputEncargado"];
$dui_encargado = $_POST["inputDUI_encargado"];
$telefono = $_POST["inputTelefono"];
$direccion = $_POST["inputDireccion"];
$correo = $_POST["inputCorreo"];

$query = $db->prepare("UPDATE pacientes SET nombre=?, raza=?, fecha_nacimiento=?, encargado=?, dui_encargado=?, telefono=?, direccion=?, correo=? WHERE expediente=?");
$result = $query->execute([$nombre, $raza, $fecha_nacimiento, $encargado, $dui_encargado, $telefono, $direccion, $correo, $expediente]);

if($result){
    header("Location: ../Pacientes.php");
} else{
    echo "Fallo en la actualización.";
}

?>