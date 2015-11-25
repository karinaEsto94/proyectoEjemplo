<?php
	namespace controllers;	
	use libs\Controller;

	class Empleado extends Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function listarEmpleados()
		{
			$empleados = $this->model->listarEmpleados();
			$this->view->render(explode("\\", get_class($ths))[1], "listar", $empleados, $this->get_errores);
		}

		public function crear($params=array())
		{
			if(isset($params['nombre'] && isset($params['apellidos'] && isset($params['curp']))))
			{
				$this->crearEmpleado($params);
			}
			$this->view->render(explode("\\", get_class($this))[1], "crear", $this->getErrores());
		}

		public function crearEmpleado($params)
		{
			$nombre = $params['nombre'];
			$apellidos = $params['apellidos'];
			$curp = $params['curp'];


			if(count($this->errores) == 0)
			{
				try
				{
					$this->model->crearEmpleado($nombre, $apellidos, $curp);
				}
				catch(\Exception $e)
				{
					$this->errores['global']=$e->getMessage();
				}
			}
		}
	}	
?>