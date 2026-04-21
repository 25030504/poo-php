<?php 
// Cal
abstract class ServicioBase{
    // Atributos
    private $nombre;
    private $precioBase;

    // Metodo constructor
    public function __construct($nombre, $precioBase){
        $this->nombre = $nombre;
        $this->precioBase =$precioBase;
    }

    // Getters
    public function getNombre(){
        return $this->nombre;
    }

    public function getprecioBase(){
        return $this->precioBase;
    }

    // Metodos 
    abstract function calcularCostoTotal();

    
}
?>
