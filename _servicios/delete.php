<?php
include_once('conexion.php');

$id_cli=$_GET['id_cli'];

$sql="DELETE FROM clientes WHERE id_cli='$id_cli'";
$resultado=mysqli_query($conn,$sql);

if($resultado){
    echo "<script>
    alert('Se ha eliminado correctamente.');
    window.location.href='veterinaria.php';
    </script>";
}
?>