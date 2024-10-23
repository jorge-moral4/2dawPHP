<?php

class Empleado {

    private static $sueldoTope = 3000;

    private $nombre;
    private $sueldo;

    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public static function getSueldoTope(){
        return self::$sueldoTope;
    }

    public static function setSueldoTope($nuevoSueldoTope) {
        self::$sueldoTope = $nuevoSueldoTope;
    }

    public function debePagarImpuestos() {
        return $this->sueldo > self::$sueldoTope;
    }

    public function __toString() {
        return "Empleado: {$this->nombre}, Sueldo: {$this->sueldo}, Debería pagar impuestos: " . ($this->debePagarImpuestos() ? "Sí" : "No");
    }
}

// Ejemplo de uso
$empleado1 = new Empleado("Juan Pérez", 2500);
echo $empleado1 . PHP_EOL;

$empleado2 = new Empleado("Ana Gómez", 3500);
echo $empleado2 . PHP_EOL;

// Cambiar el sueldo tope
Empleado::setSueldoTope(3000);
echo "Nuevo sueldo tope: " . Empleado::getSueldoTope() . PHP_EOL;

$empleado3 = new Empleado("Luis Martínez", 3200);
echo $empleado3 . PHP_EOL;
?>
