<?php

include '../model/Connection.php';

$id = $_POST['id'];
$nombres = $_POST["inputNombres"];
$apellidos = $_POST["inputApellidos"];
$dui = $_POST["inputDUI"];
$edad = $_POST["inputEdad"];
$cargo = $_POST["inputCargo"];
$direccion = $_POST["inputDireccion"];
$telefono = $_POST["inputTelefono"];
$correo = $_POST["inputCorreo"];

$query = $db->prepare("UPDATE empleados SET nombres=?, apellidos=?, dui=?, edad=?, cargo=?, direccion=?, telefono=?, correo=? WHERE id=?");
$result = $query->execute([$nombres, $apellidos, $dui, $edad, $cargo, $direccion, $telefono, $correo, $id]);

if($result){
    header("Location: ../Empleados.php");
} else{
    echo "Fallo en la actualización.";
}

?>