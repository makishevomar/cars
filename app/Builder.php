<?php

namespace App;

class Builder extends Database{

	function get(){
		$result = mysqli_query($this->connect,"SELECT * FROM $this->table");
		return mysqli_fetch_all($result);
	}
	function whereAll($key,$value){
		$result = mysqli_query($this->connect,"SELECT * FROM $this->table WHERE $key='$value'");
		return mysqli_fetch_all($result);
	}
	function where($key,$value){
		$result = mysqli_query($this->connect,"SELECT * FROM $this->table WHERE $key='$value'");
		return mysqli_fetch_row($result);
	}
	function delete($id){
		mysqli_query($this->connect,"DELETE FROM $this->table WHERE id='$id'");
		
	}

	function create($data){
		$columns = '';
		$values = '';
		foreach ($data as $key => $value) {
			$columns .= $key.',';
			$values .="'$value',";
		}
		$columns = rtrim($columns,',');
		$values = rtrim($values,',');
		#print_r("INSERT INTO $this->table($columns) VALUES ($values)");
		mysqli_query($this->connect,"INSERT INTO $this->table($columns) VALUES($values)");
	}
	function update($data){
		print_r($data);
		$id = $data['id'];

		$values = '';
		foreach ($data as $key => $value) {
			$values .= "$key = '$value',";
		}
		$values = rtrim($values,',');
		mysqli_query($this->connect,"UPDATE $this->table SET $values WHERE id = $id");
	}
	function updateCar($data){
		$filename = $_FILES['image']['name'];
		$file = $_FILES['image']['tmp_name'];
		move_uploaded_file($file,'C:\OSPanel\domains\firstapp\images\\'.$filename);
		$name = $data['name'];
		$description = $data['description'];
		$price = $data['price'];
		$id = $data['id'];
		$categoria_id = $data['categoria_id'];

		$query = "UPDATE cars SET name = '".$name."', description ='".$description."', price = '".$price."', image = '".$filename."', categoria_id= '".$categoria_id."' WHERE id=".$id;

		$result = mysqli_query($this->connect,$query);
	}
	function storeCar($data){
		$connect = mysqli_connect('localhost','root','','firstapp');
		$filename = $_FILES['image']['name'];
		$file = $_FILES['image']['tmp_name'];

		if ($filename) {
			move_uploaded_file($file, 'C:\OSPanel\domains\firstapp\images\\'.$filename);
			} else{
				$filename = 'test.png';
			}
			$name = $data['name'];
			$categoria_id = $data['categoria_id'];
			$description = $data['description'];
			$price = $data['price'];
			$query = "INSERT INTO cars(name,description,price,image,categoria_id) VALUES ('$name','$description','$price','$filename','$categoria_id')";
			$result = mysqli_query($this->connect,$query);
	}
	function storeCategory($data){
		$name = $data['name'];//$_POST
		$query = "INSERT INTO categories(name) VALUES('$name')";
		$result = mysqli_query($this->connect,$query);

	}
	function storeUser($data){
		$name = $data['name'];
		$lastname = $data['lastname'];
		$login = $data['login'];
		$password = $data['password'];
		$query = "INSERT INTO users(name,lastname,login,password) VALUES ('$name','$lastname','$login','$password')";
		$result = mysqli_query($this->connect,$query);
	}

}

?>