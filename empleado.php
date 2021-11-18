<?php
	include("con_db.php");
	
	if (isset($_POST['submit'])) {
		if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido']) >= 1 && strlen($_POST['NumerodeTelefono']) >= 1 && strlen($_POST['Direccion']) >= 1 && strlen($_POST['NumerodeEmpleado']) >= 1) {
			$nombre = trim($_POST['Nombre']);
			$apellido = trim($_POST['Apellido']);
			$numerotelefono = trim($_POST['NumerodeTelefono']);
			$dir = trim($_POST['Direccion']);
			$numeroempleado = trim($_POST['NumerodeEmpleado']);
			$consulta = "INSERT INTO empleado(Nombre, Apellido, NumerodeTelefono, Direccion, NumerodeEmpleado) VALUES ('$nombre','$apellido','$numerotelefono','$dir','$numeroempleado')";
			$resultado = mysqli_query($conex, $consulta);
			if ($resultado) {
			?>
				<h3 class="ok">¡Te has inscrito correctamente!</h3>
			<?php
			} else {
			?>
				<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
			}
		} else {
		?>
			<h3 class="bad">¡Por favor complete los campos!</h3>
		<?php
		}
	}
?>