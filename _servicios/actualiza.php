<?php
include_once('conexion.php');
	if ( $_SERVER['REQUEST_METHOD'] == 'GET'){
		if (isset($_GET['id_cli'])){
			$id_cli = $_GET["id_cli"];
			$sql="SELECT * FROM clientes WHERE id_cli='$id_cli'";
			$resultado = $conn->query($sql);
			$row = $resultado->fetch_assoc();
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Editar</title>
</head>
<body>
<h1>Editar Mascota</h1>
    <div class="container">
		<form class="inicio" method="post" action="update.php">
			<input type="hidden" name="id_cli" value="<?= $row['id_cli']?>">
			<label for="nombre">NOMBRE DE LA MASCOTA:</label>
			<input type="text" name="nom_mas" value="<?= $row['nom_mas']?>" required>

			<label for="dueño">DUEÑO:</label>
			<input type="text" name="nom_due" value="<?= $row['nom_due']?>" required>

			<label for="edad">EDAD:</label>
			<input type="text" name="edad_mas" value="<?= $row['edad_mas']?>" required>

			<label for="genero">GENERO:</label><br>
			<input type="text" name="gen_mas" value="<?= $row['gen_mas']?>" required>

            <label for="raza">RAZA:</label>
			<input type="text" name="raza_mas" value="<?= $row['raza_mas']?>" required>

            <label for="tamaño">TAMAÑO:</label>
			<input type="text" name="tamaño_mas" value="<?= $row['tamaño_mas']?>" required>

            <label for="motivo">MOTIVO:</label>
			<input type="text" name="motivo" value="<?= $row['motivo']?>" required>

			<input type="submit" value="Actualizar">
		</form>
	</div>
</body>
</html>