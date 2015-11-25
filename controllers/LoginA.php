<?php
	namespace controllers;	
	use libs\Controller;

	class LoginA extends Controller 
	{
		
		//Metodo que jala la vista Cliente
		public function VerLoginA()
		{

			$this->view->render(explode("\\",get_class($this))[1], "login-admin", $this->getErrores());

		}
	}