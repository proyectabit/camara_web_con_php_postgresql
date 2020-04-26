<?php

	$data['data'] = false;

	require_once('conection.php');

	$sql = 'SELECT dni, nombre, apellido, fnac, email, facultad, carrera, foto FROM original;';
	$sentencia = $db->query($sql);
	$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);

	foreach ($alumnos as $alumno) {
		$fecha = $alumno->fnac;
		$dni = $alumno->dni;
		$nombre = $alumno->nombre;
		$apellido = $alumno->apellido;
		$email = $alumno->email;
		$facultad = $alumno->facultad;
		$carrera = $alumno->carrera;
		$foto = $alumno->foto;
		$boton = '<a type="button" class="btn btn-sm btn-info" onclick="verfoto(\''.$foto.'\')" id="btnFoto_'.$dni.'"> Foto</a>';

		$data['data'][] = array($fecha, $dni, $nombre, $apellido, $email, $facultad, $carrera, $boton);
	}

	echo json_encode($data);
	exit;

?>