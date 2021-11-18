<!DOCTYPE html>
<html>
<head>
	<title>Empleados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
	<h1>Empleados</h1>
		<input type="text" name="Nombre" placeholder="Nombre">
		<input type="text" name="Apellido" placeholder="Apellido">
		<input type="text" name="NumerodeTelefono" placeholder="Numero de Telefono">
		<input type="text" name="Direccion" placeholder="Direccion">
		<input type="text" name="NumerodeEmpleado" placeholder="Numero de Empleado">
		<input type="submit" name="submit">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>