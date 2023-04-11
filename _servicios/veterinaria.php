<?php
include_once('conexion.php');
$conn = mysqli_connect($host, $user, $pass, $database);
$sql = "SELECT * FROM clientes";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/veterinaria.css">
    <link rel="stylesheet" href="../css/perros.css">
    <title>Veterinaria</title>
</head>
<body>
    <h1>Control de los datos</h1>
    <div class="container">
        <form class="" action="../html/registrar.html">
            <input class="bm" type="submit" value="+">
        </form><br>
        <table class="tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dueño</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th>Raza</th>
                    <th>Tamaño</th>
                    <th>Motivo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($query)){?>
                    <tr>
                        <th><?= $row['id_cli']?></th>
                        <th><?= $row['nom_mas'] ?></th>
                        <th><?= $row['nom_due'] ?></th>
                        <th><?= $row['edad_mas'] ?></th>
                        <th><?= $row['gen_mas'] ?></th>
                        <th><?= $row['raza_mas'] ?></th>
                        <th><?= $row['tamaño_mas'] ?></th>
                        <th><?= $row['motivo'] ?></th>
                        <th>
                            <a class="editar" href="actualiza.php?id_cli=<?php echo $row['id_cli']?>">Editar</a><br>
                            <a class="eliminar" href="delete.php?id_cli=<?php echo $row['id_cli']?>" >Borrar</a>
                        </th>
                    </tr>
                <?php }  ?>
            </tbody>
        </table><br>
        <form class="cerrar" action="../html/index.html">
            <input class="btn" type="submit" value="Cerra Sesion">
        </form>
    </div>
</body>
</html>