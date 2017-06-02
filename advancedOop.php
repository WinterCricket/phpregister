<?php 

	include "land.php";
	include "air.php";

	$land = new Land;
	$air = new Air;

	$land -> greetStudents();
	$air -> discourageStudents();

?>