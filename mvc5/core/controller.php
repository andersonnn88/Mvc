<?php
class controller {


	// view carregar as paginas dinamica

	public function loadView($viewName, $viewData = array()){
		//transforma chave do array em uma variavel
		extract($viewData);
		//chama o arquivo html no view
		require 'views/'.$viewName.'.php';
	}


	// template padrao
	public function loadTemplate($viewName, $viewData = array()){

		require 'views/template.php';

	}

	public function loadViewInTemplate($viewName, $viewData = array()){

		extract($viewData);
		
		require 'views/'.$viewName.'.php';

	}
}

?>