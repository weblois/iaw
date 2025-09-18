<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Básico</title>
</head>
<body>
	<h1>PHP Básico</h1>

	<!-- incrustar código PHP en HTML : -->
	<?php 
	//aquí solo puedo escribir código PHP. Esto es un comentario de una sola línea

	/*
	   esto es un 
	   comentario
	   multilínea

	*/

	echo "<p>";
	echo "esto es un párrafo generado desde un bloque PHP";
	echo "</p>" //la última sentencia de un bloque no necesita terminar en ;, pero puede hacerlo igualmente. Se recomienda SIEMPRE FINALIZAR CON ;


	?>
	
	<h2>Variables en PHP</h2>
	<?php 
		$cliente="Juan";
		$saldo=50000;

		echo "<p>El cliente <b>$cliente</b> tiene un saldo de <i>$saldo</i> €</p>";
		$cliente="Pedro";
		$saldo=3000;
		echo "<p>El cliente <b>$cliente</b> tiene un saldo de <i>$saldo</i> €</p>";

	?>

</body>
</html>