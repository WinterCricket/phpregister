<?php 

	spl_autoload_register(function($class_name){
		include $class_name.".php";
	});

	$land = new Land;
	$air = new Air;

	$land -> greetStudents();
	$air -> discourageStudents();

?>