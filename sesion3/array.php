<?php
// Arrays Indexados

$alumnos = array('Lino', 'Carmen', 'Anthony', 'Nestor', 'Roger', 'Luis', 10, 
	10.5, false);

// [0]=> string(4) "Lino" -> Indice, Tipo de dato, Cantidad de caracteres, Valor
// [1]=> string(6) "Carmen"
// [2]=> string(7) "Anthony"
// [3]=> string(6) "Nestor"
// [4]=> string(5) "Roger"
// [5]=> string(4) "Luis"
// [6]=> int(10) -> Indice, Tipo de dato (valor)
// [7]=> float(10.5) -> Indice, Tipo de dato (valor)
// [8]=> bool(false) -> Indice, Tipo de datos (valor)
// var_dump($alumnos);
// print_r($alumnos)

// Imprimir el valor de un elemento del array, buscando a través del indice que le corresponde
// echo $alumnos[6];

// Agregar un elemento al array alumnos

//$alumnos[] = 'Ipad';
//$alumnos[] = 'Alumno Nuevo';

// Agregar elementos al array alumnos, al final del array
array_push($alumnos, 'Ipad', 'Alumno Nuevo');

// Agregar elementos al array alumnos, pero al inicio del mismo
array_unshift($alumnos, 'HTML', 'CSS', 'Wordpress');

// Eliminar el primer elemento del array alumnos
// echo array_shift($alumnos);

// Eliminar el último elemento del array alumnos
// echo array_pop($alumnos);

// Editar elementos de un array
$alumnos[0] = "PHP";
$alumnos[11] = true;

//array_splice($alumnos, 3);

//var_dump($alumnos);

$notas = array(
	'Lino' => array(
		'Wordpress' => 20,
		'HTML' => 15),
	'Carmen' => 16,
	'Anthony' => 10,
	'Nestor' => 20,
	'Roger' => 18,
	'Luis' => 05
);

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');

$c = array_combine($a, $b);
var_dump($c);
// echo $notas['Roger'];
// var_dump($notas);


?>