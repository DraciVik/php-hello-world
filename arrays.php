<?php
#Array - Variable that holds multiple values

/*
	1. Indexed;
	2. Associative
	3. Multi-dimensional
*/

$people = array('Kevin', 'Jeremy', 'Sara');
// echo $people[3];
$ids = array(23,55,12);
// echo $ids[0];
$cars = ['Yo mama', 23, true];

$cars[3] = 'Chevy';

// echo $cars[3];

$cars[] = "Caci";

// echo $cars[4];
// print_r($cars);
// echo count($cars);
// var_dump($cars);

// Associative arrays;
$people = ['Brad' => 35, "Jose" => 32, "William" => "Dead"];
echo $people["William"];


// Multi-dimensional

$cars = array(
	array("Honda", 20, 10),
	array("Toyota", 30, 20),

	array("Ford", 23, 12),
);
echo $cars[1][2];
?>
