<?php
declare(strict_types=1);
 abstract class Persona{

     function __construct(
         private string $nombre,
         private string $apellidos,
         private int $edad

     ){}
     
     public function getNombre() : string{
         return $this->nombre;
     }

     public function getApellidos() : string{
         return $this->apellidos;
     }

     public function getEdad() : int{
        return $this->edad;
    }

     public function setNombre(string $nombre){
         $this->nombre = $nombre;   
     }

     public function setApellidos(string $apellidos){
         $this->apellidos = $apellidos;
     }

     public function setEdad(int $edad){
        $this->edad = $edad;
    }

     function getNombreCompleto() : string {
         return $this->nombre . " " . $this->apellidos;

     }

     public abstract function toHtml(Persona $p) : string;

     public function __toString(): string{

        return self::class . ": " . $this->nombre . " " . $this->apellidos . " " . $this->edad;

     }

 }
abstract class Trabajador extends Persona{
    public function debePagarImpuestos() {

        return $this->sueldo > self::$sueldoTope && $this->edad > 21;

    }
    public abstract function calcularsueldo();

}


 class Empleado extends Trabajador{

    private float $sueldoTope;
    private $telefonos = array();
    private float $horasTrabajadas;
    private float $precioPorHora;

    

    function __construct(
        private string $nombre,
        private string $apellidos,
        private string $edad,
        private float $sueldo = 1000,){

        parent::__construct($nombre,$apellidos,$edad);
        $this->sueldoTope = 3333;
       
    } 
    public function calcularSueldo(){
        return $this->horasTrabajadas * $this->pagoPorHora;

    }


    public function setSueldoTope(float $sueldoTope) : void{
        $this->$sueldoTope = $sueldoTope;
    }
    
    function getSueldo() : float {
        return $this->sueldo;
    }


    function getTelefonos() : array{
        return $this->telefonos;
    }

  
    public function anyadirTelefono(int $telefono) : void {

        array_push($this->telefonos,$telefono);

    }

    public function listarTelefonos() : string {
       
        return implode(' ,',$this->telefonos);

    }


    
    public function vaciarTelefono() : void {

        $this->telefonos = array();
    }

    public static function toHTML(Persona $p): string {
        if($p instanceof Empleado){
            $html = '<p>Nombre completo: ' . $p->getNombreCompleto() . '</p>';
            $html .= '<p>Sueldo: ' . $p->getSueldo() . '</p>';
            
            $telefonos = $p->getTelefonos();
            if (!empty($telefonos)) {
                $html .= '<p>Teléfonos:</p>';
                $html .= '<ul>';
                foreach ($telefonos as $telefono) {
                    $html .= '<li>' . $telefono . '</li>';
                }
                $html .= '</ul>';
            } else {
                $html .= '<p>No hay teléfonos registrados.</p>';
            }
        }
        return $html;
    }

    public function __toString() : string{
        return self::class . ":" . $this->nombre . " " . $this->apellidos . " " .$this->sueldo ." ". $this->edad . " Telefonos: " . $this->listarTelefonos();
    }
   

}
class Gerente extends Trabajador {
    private $edad;
    private $salarioBase;

    public function __construct($telefonos, $edad, $salarioBase) {
        parent::__construct($telefonos);
        $this->edad = $edad;
        $this->salarioBase = $salarioBase;
    }

    public function calcularSueldo() {
        return $this->salarioBase + ($this->salarioBase * $this->edad / 100);
    }
    
}


?>