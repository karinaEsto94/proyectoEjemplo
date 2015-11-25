<?php
	namespace controllers;
	use libs\Controller;

	class Peticion extends Controller
	{	
		public function __construct(){
			parent::__construct();
			$this->loadModel();
		}

 		public function listarPeticiones()
 		{
 			//Renderizando la vista asociada
 			$a = explode("\\", get_class($this))[1]; 	//$a = Peticion
			$peticiones = $this->model->listarPeticiones();		
 			$this->view->render($a, "listar", $peticiones, $this->getErrores());
 		}

 		public function asignarMateriales()
 		{
 			//Renderizando la vista asociada
 			$a = explode("\\", get_class($this))[1]; 	//$a = Peticion
			$peticiones = $this->model->listarPeticiones();
			$this->view->render($a, "asignarMateriales", $peticiones, $this->getErrores());
			
 		}
 		
	}
?>