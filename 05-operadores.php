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

	echo "<h2>Operadores de comparación ==, !=, <, >, <= y >=</h2>";

	$a=5;
	$b=4;

	echo "<p>";
	if ($a==$b ) {
		echo "$a es igual a $b";
	} else {
		echo "$a es distinto a $b";
	}
	echo "</p>";

	//operador ternario ?
	echo "<p>";
	echo $a==$b?"$a es igual a $b":"$a es distinto a $b";
	echo "</p>";

	echo "<h2>Operadores de incremento y decremento, ++, --</h2>";

	$c=0;
	echo "<p>\$c = $c</p>";
	echo "\$c++"; //valor 1
	$c++; //equivale a $c=$c+1, también a $c+=1;
	echo "<p>\$c = $c</p>";
	echo "$c--";//equivale a $c=$c-1, también a $c-=1;
	$c--; //valor 0
	echo "<p>\$c = $c</p>";
	echo "\$d=5+\$c++;";
	$d= 5 + $c++;//$c valor 1, $d valor 5
	echo "<p>\$c = $c, \$d = $d, </p>";

	$c=0;
	$d= 5 + ++$c;//$c valor 1, $d valor 6
	echo "<p>\$c = $c, \$d = $d, </p>";

	echo "<h2>Operadores Lógicos and, or, xor, !</h2>";
	$a=5;
	$b=4;

	echo "<p>";
	if (!($a==$b) ) {
		echo "$a no es igual a $b";
	} else {
		echo "$a es igual a $b";
	}
	echo "</p>";


	echo "<p>";
	if ($a!=$b and $a>5  ) {
		echo "se cumple: $a!=$b and $a>5";
	} else {
		echo "no se cumple: $a!=$b and $a>5 ";
	}
	echo "</p>";

	echo "<p>";
	if ($a!=$b or $a>5  ) {
		echo "se cumple: $a!=$b or $a>5";
	} else {
		echo "no se cumple: $a!=$b or $a>5 ";
	}
	echo "</p>";




	?>


</body>
</html>