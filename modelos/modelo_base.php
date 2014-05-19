<?php
class ModeloBase {

	
	/***** ATRIBUTOS ***********/

	// Host de BD: localhost
	private $host = "localhost";

	// Puerto del host de BD: depende del servicio mysql, postgresql, etc
	private $port = "";	

	// Usuario de conexión a la BD: root en el caso de mysql
	private $user = "root";

	// Contraseña de usuario para conexión a la BD
	private $pw = "123456";

	// Nombre de la BD
	private $db = "alumno";

	// Objeto de conexión
	public $dbh;


	/********* MÉTODOS ************/

	// Constructor
	public function __construct(){

		$this->dbh = new PDO('mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->db, $this->user, $this->pw, array( PDO::ATTR_PERSISTENT => false));

		$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Ayuda a mostrar caracteres especiales
		$this->dbh->query("SET NAMES 'utf8'");

		// Setea la zona horaria
		$this->dbh->query("SET time_zone = 'America/Lima'");			
	}	
}