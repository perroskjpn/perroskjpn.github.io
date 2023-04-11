<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'veterinaria';

$conn = mysqli_connect($host, $user, $pass, $database);

if($conn->connect_errno){
    die("La conexion ha fallado" . $conn->connect_errno);
}
?>