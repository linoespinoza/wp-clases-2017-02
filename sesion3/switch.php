<?php

$i = 1;
$resultado = "";

if ($i == 0) {
	$resultado = "i es igual a 0";
} elseif ($i == 1) {
	$resultado = "i es igual a 1";
} elseif ($i == 2) {
	$resultado = "i es igual a 2";
} elseif ($i == 3) {
	$resultado = "i es igual a 3";
} else {
	$resultado = "i está fuera del rango";
}


// Usando la estructura de control switch

switch ($i) {
	case 0: $resultado = "i es igual a 0"; break;
	case 1: $resultado = "i es igual a 1"; break;
	case 2: $resultado = "i es igual a 2"; break;
	case 3: $resultado = "i es igual a 3"; break;
	default: $resultado = "i está fuera del rango";
}

echo $resultado;
?>