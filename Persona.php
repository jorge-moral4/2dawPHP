<?php
declare(strict_types=1);

class Persona{
    private string $nombre;

    public function_construct(string $nombre){
        $this->nombre=$nombre;
    }
    public function imprimir(): void{
        echo "Mi nombre es: ". $this -> nombre;
    }
}
$p = new Persona (nombre: "Jorge del Moral");
$p -> imprimir();

?>