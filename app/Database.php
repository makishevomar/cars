<?php
namespace App;
use App\Database\Connection;

abstract class Database{
	public $connect;
	function __construct(){
		$this->connect = Connection::getInstance()->connect();
	}

	abstract function get();
	abstract function whereAll($key,$value);
	abstract function where($key,$value);
	abstract function delete($post);

}
?>