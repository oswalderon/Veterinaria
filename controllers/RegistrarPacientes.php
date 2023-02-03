<?php
//print_r($_POST);

if (empty($_POST["inputNombre"]) || empty($_POST["inputRaza"]) || empty($_POST["inputFecha_nacimiento"]) || empty($_POST["inputEncargado"]) || empty($_POST["inputDUI_encargado"]) || empty($_POST["inputTelefono"]) || empty($_POST["inputDireccion"]) || empty($_POST["inputCorreo"])){
    echo "Error, complete el formulario.";
    exit();
}

$nombre = $_POST["inputNombre"];
$raza = $_POST["inputRaza"];
$fecha_nacimiento = $_POST["inputFecha_nacimiento"];
$encargado = $_POST["inputEncargado"];
$dui_encargado = $_POST["inputDUI_encargado"];
$telefono = $_POST["inputTelefono"];
$direccion = $_POST["inputDireccion"];
$correo = $_POST["inputCorreo"];

require '../model/Connection.php';

$query = $db->prepare("INSERT INTO pacientes(nombre, raza, fecha_nacimiento, encargado, dui_encargado, telefono, direccion, correo) VALUES(?,?,?,?,?,?,?,?);");
$result = $query->execute([$nombre, $raza, $fecha_nacimiento, $encargado, $dui_encargado, $telefono, $direccion, $correo]);

if($result){
    header("Location: ../Pacientes.php");
} else{
    echo "Fallo en el registro.";
}
?>