<?php
	namespace models;
	use libs\DBConexion;

	class PeticionModel
	{
		public $resumen;
		public $fecha_inicio;
		public $fecha_finalizacion;
		public $fecha_recepcion;
		public $estado;
		public $referencia;
		public $tiempo_empleado;
		public $Cliente_id_cliente;
		public $Empleado_id_empleado;
		public $Usuario_id_usuario;

		public function __construct()
		{

		}

		public function crearCliente($nombre, $apellidos, $curp, $telefono, $email)
		{
			$this->nombre = $nombre;
			$this->apellidos = $apellidos;
			$this->curp = $curp;
			$this->telefono = $telefono;
			$this->email = $email;

			$this->guardar();
		}

		/*public function guardar()
		{
			$con = DBConexion::getInstance();
			$params = array(
				$this->nombre,
				$this->apellidos,
				$this->curp,
				$this->telefono,
				$this->email
				);

			$sql = vsprintf("INSERT INTO Cliente (nombre, apellidos, curp, telefono, email) values('%s', '%s', '%s', '%s', '%s');", $params);

			$con->executeUpdate(array($sql));
		}*/

		public function listarPeticiones()
		{
			$con = DBConexion::getInstance();
			if (is_null($con)) 
			{
				throw new Exception("Error en la conexión de la base de datos", 1);			
			}
			$peticiones = $con->executeQuery('SELECT * FROM peticion;', null, __NAMESPACE__.'\PeticionModel');

			return $peticiones;
		}

	}

