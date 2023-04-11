<?php
include_once('conexion.php');

$id_cli = $_POST['id_cli'];
$nom_mas = $_POST['nom_mas'];
$nom_due = $_POST['nom_due'];
$edad_mas = $_POST['edad_mas'];
$gen_mas = $_POST['gen_mas'];
$raza_mas = $_POST['raza_mas'];
$tamaño_mas = $_POST['tamaño_mas'];
$motivo = $_POST['motivo'];

$sql="UPDATE clientes SET nom_mas='$nom_mas', nom_due='$nom_due', edad_mas='$edad_mas', gen_mas='$gen_mas', raza_mas='$raza_mas', tamaño_mas='$tamaño_mas', motivo='$motivo' WHERE id_cli='$id_cli'";
$resultado=mysqli_query($conn,$sql);

if($resultado){
    header("location:veterinaria.php");
}
?>