<?php 

require_once("config.php");

	$jose = new Usuario();

	$jose->LoadById(3);

	echo $jose;
 ?>