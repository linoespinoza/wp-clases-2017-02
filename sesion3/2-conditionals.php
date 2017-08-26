<?php
// Conditional

/* 
	Operadores
*/

// Operador =

$a = 5;
$b = 5;

/*
if ($a == $b) {
	echo 'los valores son iguales';
} elseif ($a < $b) {
	echo '$a es menor que $b';
} elseif ($a > $b) {
	echo '$a es mayor que $b';
} else {
	echo 'los valores no son iguales';
}
*/

/* 
$score = 60;
if ($score > 59) {
	echo 'Completaste el nivel!';
} elseif ($score <= 30) {
	echo 'Deberías practicar más';
} else {
	echo 'Por favor intenta de nuevo';
}
*/

// Operador negación ~

/* if ($a == $b) {
	echo 'Los valores son iguales';
} else {
	echo 'Los valores no son iguales';
}

if (($a == $b) == false) {
	echo 'Los valores no son iguales';
}

if ($a <> $b) {
	echo 'Los valores no son iguales';
}
*/

if ($a != $b) {
	echo 'Los valores no son iguales';
}

/* Condicionales anidadas */

$num = 100;

/* if ($num >= 10) {
	if ($num <= 1000) {
		echo 'Tu número está en el rango';
	} else {
		echo 'Tu número es mayor de 1000, está fuera del rango';
	}
} else {
	echo 'Tu número es menor de 10, no está en el rango';
}
*/
/* Operadores lógicos -> && AND */

/* if ($num >= 10 && $num <= 1000) {
	echo 'Tu número está en el rango';
} else {
	echo 'Tu número es menor de 10, no está en el rango';
}*/

/* Operadores lógicos -> || OR 
http://php.net/manual/en/language.operators.logical.php
*/ 

/* if ($num == 10 || is_string($num)) {
	echo '10 o string';
} else {
	echo 'no es 10 ni string';
}*/

// Switch Case


?>