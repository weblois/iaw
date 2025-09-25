<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Operadores</title>
</head>
<body>
	<h1>Operadores</h1>
	<h2>Operadores aritméticos + - * / % (módulo)</h2>

	<?php 
	echo "<p>Operador Módulo %:</p>";

	echo "<p>Resto de división entera 5 % 2 --> ";
	echo 5 % 2; //devuelve el resto de la división entera de 5 entre 2
	echo "<p>";
	echo "<h2>Operadores de asignación</h2>";

	echo "<p>= += *= /= -= .= ...</p>";

	$total=0; //asignación simple de 0 a $total, asigna 'machacando'
	echo "<p>El valor de \$total es $total</p>";

	$total+=100; //asigna 100 a $total, sumando el valor, no 'machacando' 
	echo "<p>El valor de \$total es $total</p>";

	$total+=25;
	echo "<p>El valor de \$total es $total</p>";

	$saludo="Hola";
	echo "<p>El valor de \$saludo es '$saludo'</p>";
	$saludo.=", ¿ cómo estás ?";
	echo "<p>El valor de \$saludo es '$saludo'</p>";




	?>


</body>
</html>