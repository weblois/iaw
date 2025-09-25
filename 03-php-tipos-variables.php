<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tipos de variables en PHP</title>
</head>
<body>
	<h1>Tipos de variables (datos) en PHP</h1>
	<?php 
	//tipo texto (string):
	$texto="Abc123";
	//tipo numérico entero (integer):
	$entero=100;
	//tipo numérico real (double):
	$real=5.25;

	echo "\n<p>la variable <b>'\$texto'</b> con valor <b>'$texto'</b> es de tipo <b>'".gettype($texto)."'</b></p>";
	echo "\n<p>la variable <b>'\$entero'</b> con valor <b>'$entero'</b> es de tipo <b>'".gettype($entero)."'</b></p>";
	echo "\n<p>la variable <b>'\$real'</b> con valor <b>'$real'</b> es de tipo <b>'".gettype($real)."'</b></p>";


	//tipo vector o matriz (array)
	$array1[0]=5;
	$array1[1]=9.4;
	$array1[]="hola"; // toma el siguiente índice libre [2]

	echo "\n<p>la variable <b>'\$array1'</b> con valor <b>'";
	var_dump($array1);//colocamos fuera el array porque no se expande dentro de una cadena
	echo "'</b> es de tipo <b>'".gettype($array1)."'</b></p>";

	//podemos declarar un array con el constructor array, con índices numéricos desde [0]
	$array2 = array(NULL,100,200,300,400,500);
	//               [0] [1] [2] [3] [4] [5]

	echo "\n<p>la variable <b>'\$array2'</b> con valor <b>'";
	var_dump($array2);//colocamos fuera el array porque no se expande dentro de una cadena
	echo "'</b> es de tipo <b>'".gettype($array2)."'</b></p>";

	echo "\n<p>La posición 2 de la variable \$array2 tiene valor $array2[2]</p>";

	//podemos declarar un array con el constructor array, con índices asociativos 
	$mesesDias = array('ene' => 31,
					   'feb' => 28,
					   'mar' => 31,
					   'abr' => 30,
					   'may' => 31,
					   'jun' => 30
					  );

	echo "\n<p>la variable <b>'\$mesesDias'</b> con valor <b>'";
	var_dump($mesesDias);//colocamos fuera el array porque no se expande dentro de una cadena
	echo "'</b> es de tipo <b>'".gettype($mesesDias)."'</b></p>";


	echo "\n<p>El mes de marzo tiene {$mesesDias['mar']} días</p>"; //para expandir el valor de un array asociativo , debe de ir entre llaves {}

	//para leer un array completamente de forma controlada, hemos de usar alguna estructura de control:

	//para un array con índices numéricos podemos usar for o foreach:

	//ejemplo para el $array2 con for
	echo "<h3>Volcado del 'array2' en una lista 'ul' con estructura 'for' desde el índice [1]:</h3>";

	echo "\n<ul>";

	for ($i=1; $i < count($array2) ; $i++) { 
		echo "\n\t<li>índice: $i, valor: $array2[$i]</li>";
	}
	echo "\n</ul>";

	echo "<h3>Volcado del 'array2' en una lista 'ul' con estructura 'foreach', todos los elementos :</h3>";

	echo "\n<ul>";
	foreach ($array2 as $indice => $valor) {//recorre todas las posiciones del array
		echo "\n\t<li>índice: $indice, valor: $valor</li>";
	}
	echo "\n</ul>";


	//para un array con índices asociativos tenemos que usar foreach, for no nos vale:
	echo "<h3>Volcado de 'mesesDias' en una lista 'ul' con estructura 'foreach', todos los elementos :</h3>";

	echo "\n<ul>";
	foreach ($mesesDias as $indice => $valor) {//recorre todas las posiciones del array
		echo "\n\t<li>mes: $indice, $valor días</li>";
	}
	echo "\n</ul>";

	//arrays multidimensionales
	//ejemplo, array de 2 dimensiones (meses 1-12 / dias 1-31) para almacenear un valor numérico, 0 (no fesivo), 1 (festivo)

	$festivos = array( 
			1  => array(NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
			2  => array(NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
			3  => array(NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
			4  => array(NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
			5  => array(NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
			6  => array(NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
			7  => array(NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
			8  => array(NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
			9  => array(NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
			10 => array(NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
			11 => array(NULL,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
			12 => array(NULL,0,0,0,0,0,1,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0) 
		 );
//                           1 2 3 4 5 6 7 8 9 0 1 2 3 4 5 6 7 8 9 0 1 2 3 4 5 6 7 8 9 0 1
//											   1 1 1 1 1 1 1 1 1 1 2 2 2 2 2 2 2 2 2 2 3 3
	
	var_dump($festivos);

	echo "<p>El 1 de nov tiene valor {$festivos[11][1]}</p>";//valor 0, no festivo
	echo "<p>El 6 de dic tiene valor {$festivos[12][6]}</p>";//valor 1, festivo
	echo "<p>El 8 de dic tiene valor {$festivos[12][8]}</p>";//valor 1, festivo



	?>



</body>
</html>