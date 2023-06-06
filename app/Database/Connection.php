<?php

namespace App\Database;

class Connection{

	private static $instance;

	private $connect;

	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function connect(){

		if(!$this->connect){
			$this->connect = mysqli_connect('localhost','root','','firstapp');
		}
		return $this->connect;
	}
}

?>