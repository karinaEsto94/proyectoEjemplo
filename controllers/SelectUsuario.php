<?php
	namespace controllers;	
	use libs\Controller;

	class Menu-a extends Controller 
	{
		//Metodo que jala la vista Cliente
		public function PrincipalAdmin()
		{
			//hacer if para seleccionar usuario :v
			$this->view->render(explode("\\",get_class($this))[1], "menu-admin", $this->getErrores());

		}
	}