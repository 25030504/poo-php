<?php
class CalculadoraImpuestos {
    private static $valorIva = 0.19;

    public static function aplicarImpuesto($valor){
        return $valor + ($valor * self::$iva);
    }
}
?>