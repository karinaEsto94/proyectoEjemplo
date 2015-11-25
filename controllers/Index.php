<?php
	namespace controllers;
	use libs\Controller;

	class Index extends Controller
	{	
 		public function index()
 		{
 			//Renderizando la vista asociada
 			$a = explode("\\", get_class($this))[1]; 	//$a = Index		
 			$this->view->render($a, "inicio", null, $this->getErrores());
 		}
	}
?>