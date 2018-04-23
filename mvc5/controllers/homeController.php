<?php

	class homeController extends controller {
		
		public function index() {
				//chamar o models Anuncios
				$anuncios = new Anuncios();
				$usuarios = new Usuarios();
				//enviar dados variaveis para views
				$dados = array(
					'quantidade' => $anuncios->getQuantidade(),
					'nome' => $usuarios->getNome(),
					'idade' => $usuarios->getIdade()
					);

			$this->loadTemplate('home',$dados);
			
		}





	}

?>