<?php
	namespace controllers;	
	use libs\Controller;

	class Nota extends Controller {

		public function __construct(){
			parent::__construct();
			
		}

		public function listarNota()
		{
			$notas = $this->model->listarNota();
			$this->view->render(explode("\\", get_class($ths))[1], "listar", $notas, $this->get_errores);
		}

		public function crear($params=array())
		{
			if(isset($params['incidencia']) && isset($params['fecha']))
			{
				$this->view->render(explode("\\", get_class($this))[1], "crear", $this->getErrores());
			}
		}

		public function crearNota($params)
		{
			$incidencia = $params['incidencia'];
			$fecha = $params['fecha'];

			if(count($this->errores)==0)
			{
				try
				{
					$this->model->crearNota($incidencia, $fecha);
				}
				catch(\Exception $e)
				{
					$this->errores['global']=$e->getMessage();
				}
			}
		}

		public function nuevanota()
		{
			$notas = $this->model->listarNotas();
			
			$this->view->render(explode("\\",get_class($this))[1], "nuevoC", $notas, $this->getErrores());
		}

		public function listarPeticiones()
		{
			$peticiones = $this->model->listarPeticiones();
			
			$this->view->render(explode("\\",get_class($this))[1], "nuevoC", $peticiones, $this->getErrores());
		}



	}