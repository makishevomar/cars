<?php
namespace App\Controllers;

use App\Models\Car;
use App\Models\Category;

/**
 * 
 */
class CarsController extends Controller
{
	public $template = '../resources/views/';

	public function index()
	{
		$categoriesObject = new Category();
		$carsObject = new Car();

		$categories = $categoriesObject->get();

		foreach ($categories as $key => $category) {
			$categories[$key]['cars'] = $carsObject->whereAll('categoria_id',$category[0]);
		}
		include '../resources/views/cars/index.php';
	}
	
	public function editCar(){

			print_r('/resources/views/edit.php');
			$id = $_POST['id'];
			
			$carObject = new Car();

			$categoryObject = new Category();
		
			$fetch = $carObject->where('id',$id);
		
			$categories = $categoryObject->get();

			include '../resources/views/cars/edit.php';
	
	}
	public function createCar(){
			$categoryObject = new Category();
			$categories = $categoryObject->get();

			include '../resources/views/cars/create.php';
	}
	public function deleteCar(){
		$id = $_POST['id'];
		$carObject = new Car();
		$carObject->delete($id);
		
	}
	public function update(){
		$carsObject = new Car();
		$carsObject->updateCar($_POST);

	}
	public function storeCar(){
		$carsObject = new Car();
		$carsObject->storeCar($_POST);
	}
	
}



?>





