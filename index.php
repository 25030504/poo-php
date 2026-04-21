<?php 
require_once "src/class/ServicioBase.php";
require_once "src/class/SuscripcionBasica.php";
require_once "src/class/SuscripcionEmpresarial.php";
require_once "src/class/CalculadoraImpuestos.php";
require_once "src/class/GeneradorRecibo.php";

$basica = new SuscripcionBasica("Plan Básico", 20000, 3);

echo $basica->exportarDetalles();
echo "\nCon descuento: " . $basica->aplicarDescuento(10);
echo "\nCon código: " . $basica->aplicarDescuento(10, "PROMO10");


$emp = new SuscripcionEmpresarial("Plan Pro", 50000, 5, 10000);

echo "\n\n" . $emp->exportarDetalles();
echo "\nCon descuento: " . $emp->aplicarDescuento(15);
echo "\nCon código: " . $emp->aplicarDescuento(15, "EMPRESA");
?>
