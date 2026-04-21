<?php
class SuscripcionBasica extends ServicioBase {

    private $meses;

    public function __construct($nombre, $precioBase, $meses) {
        parent::__construct($nombre, $precioBase);
        $this->meses = $meses;
    }

    public function calcularCostoTotal() {
        return $this->getPrecioBase() * $this->meses;
    }
    // Simulación de sobrecarga
    public function aplicarDescuento($valor, $codigo = null) {
        $total = $this->calcularCostoTotal();

        if ($codigo === null) {
            // porcentaje
            return $total - ($total * $valor / 100);
        } else {
            // porcentaje + descuento fijo por código
            return $total - ($total * $valor / 100) - 5000;
        }
    }

    public function exportarDetalles() {
        return "Suscripción Básica: " . $this->getNombre() .
               " - Total: " . $this->calcularCostoTotal();
    }
}
?>