<?php
	namespace controllers;	
	use libs\Controller;

	class Cliente extends Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->loadModel();
		} 

		public function listarClientes()
		{
			$clientes = $this->model->listarClientes();
			$this->view->render(explode("\\", get_class($this))[1], "listar", $clientes, $this->getErrores());
		}

		public function crear($params=array())
		{
			if(isset($params['nombre']) && isset($params['apellidos']) && isset($params['curp']) && isset($params['telefono']) && isset($params['email']))
			{
				$this->crearCliente($params);
			}
			$this->view->render(explode("\\",get_class($this))[1], "crear",$this->getErrores());
		}

		public function crearCliente($params)
		{
			$nombre = $params['nombre'];
			$apellidos = $params['apellidos'];
			$curp = $params['curp'];
			$telefono = $params['telefono'];
			$email = $params['email'];

			header("Content-Type: applicacion/json");
			if(count($this->errores)==0)
			{
				try
				{
					$this->model->crearCliente($nombre, $apellidos, $curp, $telefono, $email);
					
					echo json_encode(array("mensaje"=>"se ejecuto correctamente"));
				}
				catch(\Exception $e)
				{
					header("HTTP/1.1 406 Errores de parametros");
					//$this->errores['global']=$e->getMessage();
					echo json_encode(array("mensaje"=>$e->getMessage()));

				}
			}

		}
	}