<?php
namespace App;

abstract class Database{
	public $connect;
	function __construct(){
		$this->connect = mysqli_connect('localhost','root','','firstapp');
	}

	abstract function get();
	abstract function whereAll($key,$value);
	abstract function where($key,$value);
	abstract function delete($post);

}
?>