<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Objetos en PHP</title>
</head>
<body>
<?php
// Definición de la clase Coche
class Coche {
    // Propiedades
    public $marca;
    public $color;
    public $encendido = false;

    // Método para arrancar el coche
    public function arrancar() {
        if (!$this->encendido) {
            $this->encendido = true;
            echo "El coche ha arrancado.\n";
        } else {
            echo "El coche ya está encendido.\n";
        }
    }

    // Método para apagar el coche
    public function apagar() {
        if ($this->encendido) {
            $this->encendido = false;
            echo "El coche se ha apagado.\n";
        } else {
            echo "El coche ya está apagado.\n";
        }
    }
}

// Crear un objeto de tipo Coche
$miCoche = new Coche();
$miCoche->marca = "Toyota";
$miCoche->color = "Rojo";

// Usar los métodos
$miCoche->arrancar(); // El coche ha arrancado.
$miCoche->apagar();    // El coche se ha apagado.


$seatPanda= new Coche();
$seatPanda->marca="Seat";
$seatPanda->color="blanco";
$seatPanda->arrancar();
?>


</body>
</html>