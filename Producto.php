<?php
class Producto{
    const IVA= 0.21;
    private static $numProductos = 0;
    private $codigo;

    public function __construct(string $codigo){
        $this->codigo = $codigo;
        self:$numProductos++;
    }
    public function mostrarResumen(): void{
        return "El producto ".$this->codigo."es el numero ".self::$numProductos;
    }

}
$prod1 = new Producto("PS5");
$prod2 = new Producto("XBOX Series x");
$prod3 = new Producto("Nintendo Switch");
echo $prod3 -> mostrarResumen();

?>