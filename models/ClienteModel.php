<?php
	namespace models;
	use libs\DBConexion;

	class ClienteModel
	{
		public $nombre;
		public $apellidos;
		public $curp;
		public $telefono;
		public $email;

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

		public function guardar()
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
		}

		public function listarClientes()
		{
			$con = DBConexion::getInstance();
			if (is_null($con)) 
			{
				throw new Exception("Error en la conexión de la base de datos", 1);			
			}
			$clientes = $con->executeQuery('SELECT * FROM Cliente;', null, __NAMESPACE__.'\ClienteModel');

			return $clientes;
		}

	}

