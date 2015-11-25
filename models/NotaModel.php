<?php
	namespace models;
	use libs\DBConexion;

	class ClienteModel
	{
		

		public function __construct()
		{

		}

		

		public function listarPeticiones()
		{
			$con = DBConexion::getInstance();
			if (is_null($con)) 
			{
				throw new Exception("Error en la conexión de la base de datos", 1);			
			}
			$peticiones = $con->executeQuery('SELECT peticion.id_peticion, cliente.nombre, cliente.apellidos, peticion.fecha_recepcion, peticion.fecha_inicio, peticion.fecha_finalizacion,  FROM cliente, peticion; where cliente.id_cliente = peticion.id_cliente', null, __NAMESPACE__.'\NotaModel');

			return $peticiones;
		}

	}