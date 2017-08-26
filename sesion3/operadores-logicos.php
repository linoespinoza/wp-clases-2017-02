<?php
/* Operadores lógicos -> && AND */

// && <- Ampersand
$num = 10000;

/* if ($num >= 10 && $num <= 1000) {
	echo "El número es mayor o igual que 10 pero menor igual que 1000";
} else {
	echo "El número es menor que 10 o mayor que 1000";
}*/

/*
if ($num == 10 || is_string($num)) {
	echo "10 o es un string";
} else {
	echo "no es 10 ni es un string";
}
*/

/* if ($num >= 10 && $num <= 1000) {
	echo 'Tu número está en el rango';
} else {
	echo 'Tu número es menor de 10, no está en el rango';
}*/

// Negación
if (!($num == 10000)) {
	echo "Es 10000";
} else {
	echo "No es 10000";
}
?>