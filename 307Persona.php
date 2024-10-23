<?php
class Persona {
    protected $nombre;
    protected $apellidos;

    public function __construct($nombre, $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getNombreCompleto() {
        return $this->nombre . ' ' . $this->apellidos;

}
}
class Empleado extends Persona{
    private $salario;
    private $telefonos;

    public function __construct($nombre,$apellidos,$salario,$telefonos =[]){
        parent::__construct($nombre,$apellidos);
        $this->salario=$salario;
        $this->telefonos=$telefonos;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function getTelefonos(){
        return $this->telefonos;
    }
    public function addTelefono(){
        $this->telefonos[] = $telefonos;
    }


}