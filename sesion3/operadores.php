<?php

$a = '5'; // String
$b = 5; // Integer (entero)

// Estructura de control condicional (Si (evaluación))
/* if ($a > $b) {
	echo "A es mayor que B";
} else { // en caso contrario
	echo "A es menor que B";
} */

if ($a != $b) {
	echo "A es mayor que B";
} elseif ($a === $b) {
	echo "A es igual a B";
} else {
	echo "A es menor que B";
}

/*
if (condicion) {
	"Se evalua esta sentencia"
} else {
	"Se evalua esta sentencia"
}
*/

// Negación : (!)

?>