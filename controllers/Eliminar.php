<?php

include "../model/Connection.php";

$idEmpleado = $_GET['id'];
$query = $db->prepare("DELETE FROM empleados WHERE id=?");
$result = $query->execute([$idEmpleado]);

if($result){
    header("Location: ../Empleados.php");
} else{
    echo "Fallo en la eliminación.";
}

?>