<?php
    $user="root";
	$user_db="admin";
	$server="127.0.0.1";
	$password="";

	$enlace = mysqli_connect($server, $user, $password, $user_db);

	if (!$enlace) {
	    echo "Error: No se pudo conectar a MySQL.".PHP_EOL;
	    echo "errno de depuración: ".mysqli_connect_errno().PHP_EOL;
	    echo "error de depuración: ".mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	?>