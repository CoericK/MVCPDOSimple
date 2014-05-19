<?php

require_once('controladores/alumno.php');

$controladorAlumno = new ControladorAlumno();


if(isset($_POST['registrar_alumno']) && $_POST['registrar_alumno'] == "1"){

	if($controladorAlumno->registrar_alumno($_POST)){
		header("Location: listar_alumnos.php?registro=ok");
	}else{
		header("Location: listar_alumnos.php?registro=error");
	}
}else{
	header("Location: registrar_alumno.php");
}