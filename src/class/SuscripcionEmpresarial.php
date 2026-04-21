<?php
class SuscripcionEmpresarial extends ServicioBase implements GeneradorRecibo {

    private $usuarios;
    private $costoPorUsuario;

    public function __construct($nombre, $precioBase, $usuarios, $costoPorUsuario) {
        parent::__construct($nombre, $precioBase);
        $this->usuarios = $usuarios;
        $this->costoPorUsuario = $costoPorUsuario;
    }

    public function calcularCostoTotal() {
        $total = $this->getPrecioBase() + ($this->usuarios * $this->costoPorUsuario);
        return CalculadoraImpuestos::aplicarIVA($total);
    }

    public function aplicarDescuento($valor, $codigo = null) {
        $total = $this->calcularCostoTotal();

        if ($codigo === null) {
            return $total - ($total * $valor / 100);
        } else {
            return $total - ($total * $valor / 100) - 10000;
        }
    }

    public function exportarDetalles() {
        return "Suscripción Empresarial: " . $this->getNombre() .
               " - Total: " . $this->calcularCostoTotal();
    }
}
?>
