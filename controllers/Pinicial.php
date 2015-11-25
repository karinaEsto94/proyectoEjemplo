<?php
	namespace controllers;	
	use libs\Controller;

	class Pinicial extends Controller 
	{
		
		//Metodo que jala la vista Cliente
		public function VerInicio()
		{

			$this->view->render(explode("\\",get_class($this))[1], "InicioP", $this->getErrores());

		}
	}