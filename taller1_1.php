<?php

$num1 = 5;
$num2 = 10;
$suma = $num1 + $num2;
echo "Suma: $suma<br>";

$resta = $num1 - $num2;
echo "Resta: $resta<br>";

$multiplicacion = $num1 * $num2;
echo "Multiplicación: $multiplicacion<br>";

$division = $num1 / $num2;
echo "División: $division<br>";

$base = 2;
$exponente = 3;
$potencia = pow($base, $exponente);
echo "Potencia: $potencia<br>";

$numeroRaiz = 9;
$raizCuadrada = sqrt($numeroRaiz);
echo "Raíz Cuadrada: $raizCuadrada<br>";

$numeroNegativo = -15;
$valorAbsoluto = abs($numeroNegativo);
echo "Valor Absoluto: $valorAbsoluto<br>";

$numeroDecimal = 3.67;
$redondeo = round($numeroDecimal);
echo "Redondeo: $redondeo<br>";

$angulo = 45;
$seno = sin(deg2rad($angulo));
echo "Seno: $seno<br>";

$listaNumeros = [3, 8, 2, 10, 5];
$maximo = max($listaNumeros);
echo "Valor Máximo: $maximo<br>";


?>
