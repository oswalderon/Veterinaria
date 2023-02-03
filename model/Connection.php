<?php

$password = "";
$user = "root";
$name_db = "veterinaria";

try{
    $db = new PDO(
        'mysql:host=localhost;
        dbname='.$name_db,
        $user, $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );

} catch(Exception $e){
    echo "No funcionó la conexión:".$e->getMessage();
}

?>