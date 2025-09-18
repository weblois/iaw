<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Variables en PHP</title>
</head>
<body>
	<h1>Variables en PHP</h1>
	<?php 
		//ámbito variables, solo visibles en el entorno en las que son declaradas: Global o Local (dentro de las funciones)


	$a=100;//$a es global
	echo "<p>\$a es variable Global</p>";

	function miFuncion()
	{ //dentro de la función es un ámbito Local, por lo tanto no estará disponible la variable Global $a
		echo "<p>[ejecutado en miFuncion()]El valor de la variable \$a es $a</p>";
	}

	function miFuncion2()
	{
		$b=200; //$b es variable Local, solo visible dentro de esta función
		echo "<p>\$b es variable Local en miFuncion2()</p>";
		echo "<p>[ejecutado en miFuncion2()]El valor de \$b es $b</p>";
	}

	miFuncion();// llamamos a la función 'miFuncion'
	echo "<p>[ejecutado en Global]El valor de \$a es $a</p>";

	miFuncion2();
	echo "<p>[ejecutado en Global]El valor de \$b es $b</p>";

	?>

</body>
</html>