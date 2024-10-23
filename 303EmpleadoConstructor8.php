<?php
class Empleado {
    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000
    ) {}

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }
}

$emp1 = new Empleado("Juan", "Pérez");
$emp2 = new Empleado("Roberto", "Álvarez", 1500);

echo $emp1->getSueldo();
echo $emp2->getSueldo();
?>
