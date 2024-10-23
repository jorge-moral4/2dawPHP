<?php
class Empleado {
    private string $nombre;
    private string $apellidos;
    private float $sueldo;

    public function __construct(string $nombre , string $apellidos, float $sueldo=1000){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->sueldo=$sueldo;
     }
     public function getNombre(){
        return $this->nombre;
     }
     public function getApellidos(){
        return $this->apellidos;
     }
     public function getSueldo(){
        return $this->sueldo;
     }


}
$emp1= new Empleado ("juan","perez");
$emp2 = new Empleado ("roberto","alvarez",1500);

$emp1->getSueldo();
$emp2->getSueldo();
echo $emp1->getSueldo();
echo $emp2->getSueldo();
?>