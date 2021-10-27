<?php
/**
* Simulador de Credito
* Sistema Frances o de Amortización Progresiva
* Cuota de valor fijo
*/
 //Variables que deben ser ingresadas por el usuario desde un formulario
$valor = 6000000;
$plazo = 36;

//Valor de la tasa de interes, debe ser ingresada por el administrador
$tasa = 22.5;


$anual = $tasa/100;
$mes = round(($anual/12), 6);

$cuota = $valor / ((pow((1+$mes), $plazo)-1)/($mes*pow((1+$mes), $plazo))); 

$cpm = ($cuota/($valor/1000000));
$cuota = number_format($cuota, 0, '.', ',');


print '
Valor: $' .$valor. '<br/>
Tasa Anual: ' .$tasa. '%<br/>
Tasa Mensual: ' .round(($tasa/12), 2). '%<br/>
Cuota: $'.$cuota. '<br />
Cuota por Millon: $'.number_format($cpm, 0, '.', ',');

?>