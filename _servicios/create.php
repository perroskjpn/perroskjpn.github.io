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

$insertar="INSERT INTO `clientes` VALUES ('', '$nom_mas', '$nom_due','$edad_mas', '$gen_mas', '$raza_mas', '$tamaño_mas', '$motivo')";

$resultado= mysqli_query($conn, $insertar)
or die ("Error al insertar los datos");
mysqli_close($conn);
echo "<script> 
</script>"; 
header("location:veterinaria.php");

?>
