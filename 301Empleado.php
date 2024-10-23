<?php
declare(strng_types=1);

class Empleado{
    private string $nombre;
    private string $apellidos;
    private float $sueldo;

    public function __construct(string $nombre, string $apellidos,float $sueldo){

    }
    public function getNom():string{
        return $this->nombre;
    }
    public function getApellidos():string{
        return $this->apellidos;
    }
    public function getSueldo():float{
        return $this->sueldo = $sueldo;
    }
    public function getNombre(string $nombre):void{
        $this->nombre=$nombre;
    }
    public function setApellidos(string $apellidos):string{
       return $this->apellidos=$apellidos;
    }
    public function getNombreCompleto():string{
        return $this->nombre. " ". $this->apellidos;
    }
    public function debePagarImpuestos(): bool{
        return $this-> sueldo > 3333 ;
    }
}
$emp1 = new Empleado(nombre:"Peppa",apellidos:"Pig",sueldo: 4444);

?>