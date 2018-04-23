<?php
// criar Sessão
session_start();
//conectar ao banco de dados
require 'config.php';
//alto load controlar as class das paginas

spl_autoload_register(function($class){
	//Verificar se o arquivo tem nas pasta e carregar
	if(file_exists('controllers/'.$class.'.php')){
		require  'controllers/'.$class.'.php';

	}else if(file_exists('models/'.$class.'.php')){
		require  'models/'.$class.'.php';

	}else if(file_exists('core/'.$class.'.php')){
		require  'core/'.$class.'.php';
	}
});

$core = new Core();
$core->run();



?>