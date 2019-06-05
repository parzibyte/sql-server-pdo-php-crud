<?php
/*
CRUD con SQL Server y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-03

================================
Este archivo muestra un formulario llenado automáticamente
(a partir del ID pasado por la URL) para editar
================================
 */

if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT id, nombre, edad FROM mascotas WHERE id = ?;");
$sentencia->execute([$id]);
$mascota = $sentencia->fetchObject();
if (!$mascota) {
    #No existe
    echo "¡No existe alguna mascota con ese ID!";
    exit();
}

#Si la mascota existe, se ejecuta esta parte del código
?>
<?php include_once "encabezado.php"?>
<div class="row">
	<div class="col-12">
		<h1>Editar</h1>
		<form action="guardarDatosEditados.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $mascota->id; ?>">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input value="<?php echo $mascota->nombre; ?>" required name="nombre" type="text" id="nombre" placeholder="Nombre de mascota" class="form-control">
			</div>
			<div class="form-group">
				<label for="edad">Edad</label>
				<input value="<?php echo $mascota->edad; ?>" required name="edad" type="number" id="edad" placeholder="Edad de mascota" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listar.php" class="btn btn-warning">Volver</a>
		</form>
	</div>
</div>
<?php include_once "pie.php"?>