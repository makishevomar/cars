<?php
namespace App\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Commentary;
/**
 * 
 */
class CarsController extends Controller
{
	public $template = '../resources/views/';

	public function indexAll()
	{
	
		$commentaryObjects = new Commentary();

		

		$categoriesObject = new Category();
		$carsObject = new Car();
		$cars = $carsObject->get();
		$categories = $categoriesObject->get();

		/*foreach ($cars as $key => $car) {

			$commentaries = $commentaryObjects->where('car_id',$car[0]);
		}*/
		/*foreach ($commentaries as $key => $comment) {
			$commentaries[$key]['cars'] = $carsObject->whereAll('id',$comment[3]);
		}*/
		
		//print_r($commentaries);

		foreach ($categories as $key => $category) {
			$categories[$key]['cars'] = $carsObject->whereAll('categoria_id',$category[0]);
		}
		

		

		
		include '../resources/views/index.php';
	}
	public function index()
	{
		$categoriesObject = new Category();
		$carsObject = new Car();

		$categories = $categoriesObject->get();

		foreach ($categories as $key => $category) {
			$categories[$key]['cars'] = $carsObject->whereAll('categoria_id',$category[0]);
		}
		include '../resources/views/admin/cars/index.php';
	}
	
	public function editCar(){

			print_r('/resources/views/edit.php');
			$id = $_POST['id'];
			
			$carObject = new Car();

			$categoryObject = new Category();
		
			$fetch = $carObject->where('id',$id);
		
			$categories = $categoryObject->get();

			include '../resources/views/admin/cars/edit.php';
	
	}
	public function createCar(){
			$categoryObject = new Category();
			$categories = $categoryObject->get();

			include '../resources/views/admin/cars/create.php';
	}
	public function deleteCar(){
		$id = $_POST['id'];
		$carObject = new Car();
		$carObject->delete($id);
		header('Location: /admin/cars');
		
	}
	public function update(){
		$carsObject = new Car();
		$carsObject->updateCar($_POST);
		header('Location: /admin/cars');

	}
	public function storeCar(){
		$carsObject = new Car();
		$carsObject->storeCar($_POST);
		
	}
	
}



?>





