<?php

	require_once('conection.php');

	$validator = array('success' => false, 'messages' => array());

	if(!empty($_FILES["archivo"]["name"])){

		$fileName = basename($_FILES["archivo"]["name"]);
		$targetFilePath = '../foto/'.$fileName;
		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

		$allowTypes = array('jpg', 'png', 'jpeg');
		if (in_array($fileType, $allowTypes)) {
			if(copy($_FILES["archivo"]["tmp_name"], $targetFilePath)){
				$uploadedFile = $fileName;

				$nombre = $_POST["nombre"];
				$apellido = $_POST["apellido"];
				$fnac = $_POST["fnac"];
				$email = $_POST["email"];
				$dni = $_POST["dni"];
				$sexo = $_POST["sexo"];
				$facultad = $_POST["facultad"];
				$carrera = $_POST["carrera"];
				$detalle = $_POST["detalle"];

				$sql = 'INSERT INTO original (dni, nombre, apellido, fnac, email, sexo, facultad, carrera, detalle, foto) VALUES (:dni, :nombre, :apellido, :fnac, :email, :sexo, :facultad, :carrera, :detalle, :foto)';
				$stmt = $db->prepare($sql);
				$stmt->bindValue(':dni', $dni, PDO::PARAM_STR);
				$stmt->bindValue(':nombre', $nombre, PDO::PARAM_STR);
				$stmt->bindValue(':apellido', $apellido, PDO::PARAM_STR);
				$stmt->bindValue(':fnac', $fnac, PDO::PARAM_STR);
				$stmt->bindValue(':email', $email, PDO::PARAM_STR);
				$stmt->bindValue(':sexo', $sexo, PDO::PARAM_STR);
				$stmt->bindValue(':facultad', $facultad, PDO::PARAM_STR);
				$stmt->bindValue(':carrera', $carrera, PDO::PARAM_STR);
				$stmt->bindValue(':detalle', $detalle, PDO::PARAM_STR);
				$stmt->bindValue(':foto', $fileName, PDO::PARAM_STR);
				
				if ($stmt->execute()) {
					$validator['success'] = true;
					$validator['messages'] = "DATOS GUARDADOS";
				} else {
					$validator['messages'] = "ERROR AL GUARDAR DATOS";
				}

			} else {
				$validator['messages'] = 'NO SE COPIO LA IMAGEN';
			}
		} else {
			$validator['messages'] = 'SOLO SE PERMITE FORMATOS JPG, PNG Y JPEG.';
		}

	}

	header('Content-type: application/json; charset=utf-8');
	echo json_encode($validator);
	exit();