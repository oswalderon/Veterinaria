<?php
//print_r($_POST);

if (empty($_POST["inputNombres"]) || empty($_POST["inputApellidos"]) || empty($_POST["inputDUI"]) || empty($_POST["inputEdad"]) || empty($_POST["inputCargo"]) || empty($_POST["inputDireccion"]) || empty($_POST["inputTelefono"]) || empty($_POST["inputCorreo"])){
    echo "Error, complete el formulario.";
    exit();
}

$nombres = $_POST["inputNombres"];
$apellidos = $_POST["inputApellidos"];
$dui = $_POST["inputDUI"];
$edad = $_POST["inputEdad"];
$cargo = $_POST["inputCargo"];
$direccion = $_POST["inputDireccion"];
$telefono = $_POST["inputTelefono"];
$correo = $_POST["inputCorreo"];

require '../model/Connection.php';

$query = $db->prepare("INSERT INTO empleados(nombres, apellidos, dui, edad, cargo, direccion, telefono, correo) VALUES(?,?,?,?,?,?,?,?);");
$result = $query->execute([$nombres, $apellidos, $dui, $edad, $cargo, $direccion, $telefono, $correo]);

if($result){
    header("Location: ../Empleados.php");
} else{
    echo "Fallo en el registro.";
}
?>