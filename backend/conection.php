<?php
	try {
		$hostname = "localhost";
		$dbname = "camaraweb";
		$username = "postgres";
		$pw = "123456";
		$db = new PDO('pgsql:host='.$hostname.';dbname='.$dbname.'', $username, $pw);
	} catch (PDOException $ex) {
		echo "Error al conectar a la base de datos: " . $ex->getMessage() . "\n";
		exit;
	}

?>