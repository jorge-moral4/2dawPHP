<?php

class EmpleadoTelefonos {
    private string $nombre;
    private string $apellido;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    public function setApellido(string $apellido): void {
        $this->apellido = $apellido;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public function getTelefonos(): array {
        return $this->telefonos;
    }

    public function setTelefonos(array $telefonos): void {
        $this->telefonos = $telefonos;
    }
}

// Ejemplo de uso
$empleado = new EmpleadoTelefonos("Juan", "Pérez");
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);
echo $empleado->listarTelefonos(); 

$empleado->vaciarTelefonos();
echo $empleado->listarTelefonos(); 

$empleado->setNombre("Carlos");
echo $empleado->getNombre(); 

