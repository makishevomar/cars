<?php
namespace App;

class Route{

	static public function get($uri,$move){
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method=='GET' && $uri == $_SERVER['REQUEST_URI']) {#сравниваем #равна ли с регистрациионной ссылкой тогда можем перенаправлять в наш контроллер
			$controller = explode('@', $move)[0];
			$method = explode('@', $move)[1];
			$controller = '\App\Controllers\\'.$controller;
			$objectController = new $controller;
			$objectController->$method();
		}
	}

	static public function post(){
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method=='POST') {
			# code...
		}
	}
}


?>