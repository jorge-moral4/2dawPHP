<?php

class Empleado {
   
    const SUELDO_TOPE = 3000;

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

    public function debePagarImpuestos() {
        return $this->sueldo > self::SUELDO_TOPE;
    }

    public function __toString() {
        return "Empleado: {$this->nombre}, Sueldo: {$this->sueldo}, Debería pagar impuestos: " . ($this->debePagarImpuestos() ? "Sí" : "No");
    }
}

$empleado1 = new Empleado("Juan Pérez", 2500);
echo $empleado1;

$empleado2 = new Empleado("Ana Gómez", 3500);
echo $empleado2;
?>
