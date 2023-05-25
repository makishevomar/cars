<?php
namespace App\Controllers;
use App\Models\User;



class UsersController extends Controller
{
	public function index(){

		include '../resources/views/admin/login.php';

	}
	public function login(){

		session_start();
		$userObject = new User();
		if($_POST){

		$login = $_POST['login'];
			print_r($_POST);
		$password = $_POST['password'];
		print_r($password);
		if(!$login){
    		echo "login doesnt exist";
    		die;
		}
		if(!$password){
   			 echo "password doesnt exist";
 		   die;
			} 
			 # $pass = crypt($password);
			  #print_r($pass);
			print_r($_SERVER['DOCUMENT_ROOT']); 
		}
		$user = $userObject->where('login',$login);
		$pass = $user[4];
		if(!$user){
			echo "this user doesnt exist";
		}
		if($password==$pass){
			echo "password correct";
			$_SESSION['admin'] = $user;
			echo '<meta http-equiv="refresh" content="1; url=/admin">';
		}
		else{
			echo "password incorrect";
		}
		include '../resources/views/admin/login.php';


	}
	public function logout(){
		session_start();
		unset($_SESSION['admin']);
	}
	public function storeUser(){

		$userObject = new User();
		$userObject->storeUser($_POST);
	}
}