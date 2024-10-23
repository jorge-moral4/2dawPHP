<?php
class Tv extends Producto{
    public $pulgadas;
    public $tecnologia;

    public function mostrarResumen(){

        echo "<p>Código" .$this->getCodigo()."</p>";
        echo "<p>TV".$this->tecnologia." de".$this->pulgadas."</p>";
    }
}
$t = new Tv();
echo $t->getCodigo();

?>