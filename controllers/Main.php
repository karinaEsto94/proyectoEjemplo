<?php
		namespace controllers;
		use libs\Controller;
		use libs\AuthenticationUtils;

	class Main extends Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
 		{
 			//Renderizando la vista asociada
 			if (!AuthenticationUtils::isAuthenticated()) 
 			{
 				$this->redirect("Authentication","showLogin");
 			}	
 			$this->view->render(explode("\\", get_class($this))[1],"index", null, $this->getErrores());
 		} 	

	}

?>