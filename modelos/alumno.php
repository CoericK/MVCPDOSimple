<?php
require_once('modelo_base.php');

class Alumno extends ModeloBase {

	private $alumno;

	private $alumnos;

	// Al crear una instancia de esta clase se ejecuta este constructor
	public function __construct(){
		// Ejecuto el constructor de la clase ModeloBase
		parent::__construct();
	}


	public function registrar_alumno($dni, $apat, $amat, $nombres){
		// La consulta a ejecutar
		$sql = "INSERT INTO alumnos(dni, apellido_pat, apellido_mat, nombres) VALUES(?,?,?,?);";

		try{
			// Paso la variable al método prepare que procesa la consulta
			$res = $this->dbh->prepare($sql);

			// Asigno a cada "?" en la consulta sqlun valor de correspondencia es decir, al primer ? le corresponde $dni, etc.
			$res->bindParam(1, $dni, PDO::PARAM_STR);
			$res->bindParam(2, $apat, PDO::PARAM_STR);
			$res->bindParam(3, $amat, PDO::PARAM_STR);
			$res->bindParam(4, $nombres, PDO::PARAM_STR);			
			$res->execute();
			return true;

		}catch(Exception $e){
			return false;
		}

	}

	public function listar_alumnos(){
		$this->alumnos = [];

		$sql = "SELECT * FROM alumnos;";

		$res = $this->dbh->prepare($sql);

		$res->execute();

		while($reg = $res->fetch(PDO::FETCH_ASSOC)){
			$this->alumnos[] = $reg;
		}

		return $this->alumnos;
		
	}

}