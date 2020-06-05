<?php 
	// echo date("d");
	// echo date("Y");
	// echo date('L');

	// echo date("y/m/d");
	// echo date("h");
	// echo date("i");
	// echo date("s");
	// echo date("a");

	// Set time zone;
	// date_default_timezone_set("Europe/Skopje");

	// echo date("h:i:sa");

	// $timestamp = mktime(10, 14, 54, 9, 10, 1981);


	// echo $timestamp;

	// echo date("m/d/y", $timestamp);

	$timestamp2 = strtotime('7:00pm March 22 2016');

	// echo $timestamp2;

	echo date("m/d/y/ h:i:sa", $timestamp2);

?>
