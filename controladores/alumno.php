<?php

require_once('modelos/alumno.php');

class ControladorAlumno {

	private $modelo;

	public function __construct(){
		$this->modelo = new Alumno();
	}

	// Función que retorna true si registra o false si hay algún error
	public function registrar_alumno($data){
		// Acá se deben filtrar y validar las variables que necesitamos
		$dni = $data['dni'];
		$apat = $data['apPaterno'];
		$amat = $data['apMaterno'];
		$nombres = $data['nombres'];

		// Almacena un valor booleano si se guardó el alumno o no
		$registro = $this->modelo->registrar_alumno($dni, $apat, $amat, $nombres);
		if($registro){
			return true;
		}else {
			return false;
		}
	}

	public function listar_alumnos(){
		return $this->modelo->listar_alumnos();
	}
}