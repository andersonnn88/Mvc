<?php
Class Core {

	public function run(){
		//1->controller
		//2->action
		//3-> parametros

		$url = '/';
		if(isset($_GET['url'])){
			//sem enviado algum parametro concatena url
			$url .= $_GET['url'];
		}

		$params = array();
		//refere-se aos paramentros enviado pela url
		if(!empty($url) && $url != '/'){
			//dividir a url tirando as barras
			$url = explode('/', $url);
			// remover o primeiro registro do array
			array_shift($url);
			//print_r($url);
			//recebo parametro da url e chamo a class no controler
			$currentController = $url[0].'Controller';
			//remove novamente
			array_shift($url);

			//verifica se enviado mais algum parametro e cria action
			if(isset($url[0]) && $url[0] != '/'){
				$currentAction = $url[0];
				//remove novamente
				array_shift($url);
			}else {
				$currentAction = 'index';
			}

			if(count($url) > 0){
				$params = $url;
			}

		}else{
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		//Definir o Conroller

		$c = new $currentController();

		call_user_func_array(array($c, $currentAction), $params);

		/*
		echo '<hr/>';
		echo "CONTROLLER: ".$currentController."<br/>";
		echo "Action: ".$currentAction."<br/>";
		echo "PARAMS: ".print_r($params, true)."<br/>";
		*/
	}
}

?>
