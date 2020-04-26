<?php

	require_once('conection.php');

	$validator = array('success' => false, 'messages' => array());

	$foto = base64_decode($_POST["foto"]);
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$fecha = $_POST["fecha"];
	$email = $_POST["email"];
	$dni = $_POST["dni"];
	$sexo = $_POST["sexo"];
	$facultad = $_POST["facultad"];
	$carrera = $_POST["carrera"];
	$detalle = $_POST["detalle"];

	$route_photo = "../foto/f_".$dni.".jpg";
	$name_photo = "f_".$dni.".jpg";
	$file = fopen($route_photo, "w");

	if($file){
		$fotos = fwrite($file, $foto);
		fclose($file);

		$sql = 'INSERT INTO original (dni, nombre, apellido, fnac, email, sexo, facultad, carrera, detalle, foto) VALUES (:dni, :nombre, :apellido, :fnac, :email, :sexo, :facultad, :carrera, :detalle, :foto)';
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':dni', $dni, PDO::PARAM_STR);
		$stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
		$stmt->bindValue(':apellido', $apellido, PDO::PARAM_STR);
		$stmt->bindValue(':fnac', $fecha, PDO::PARAM_STR);
		$stmt->bindValue(':email', $email, PDO::PARAM_STR);
		$stmt->bindValue(':sexo', $sexo, PDO::PARAM_STR);
		$stmt->bindValue(':facultad', $facultad, PDO::PARAM_STR);
		$stmt->bindValue(':carrera', $carrera, PDO::PARAM_STR);
		$stmt->bindValue(':detalle', $detalle, PDO::PARAM_STR);
		$stmt->bindValue(':foto', $name_photo, PDO::PARAM_STR);
		
		if ($stmt->execute()) {
			$validator['success'] = true;
			$validator['messages'] = "DATOS GUARDADOS";
		} else {
			$validator['messages'] = "ERROR AL GUARDAR DATOS";
		}
		
	} else {
		$validator['messages'] = "ERROR AL GUARDAR LA FOTO";
	}

	header('Content-type: application/json; charset=utf-8');
	echo json_encode($validator);
	exit();

?>