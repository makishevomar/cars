<?php
namespace App\Controllers;
use App\Models\Car;
use App\Models\Category;


class CategoriesController extends Controller
{
	public $template = '../resources/views/';

	public function categoryF(){
		$categoryObject = new Category();
		$categories = $categoryObject->get();
		include '../resources/views/categories/index.php';
	}
		public function editCategory(){

			print_r('/resources/views/edit.php');
			$id = $_POST['id'];
			
			$carObject = new Car();

			$categoryObject = new Category();
		
			$fetch = $categoryObject->where('id',$id);
		
			#$categories = $categoryObject->get();

			include '../resources/views/categories/edit.php';
	
	}
		public function update(){
		$categoryObject = new Category();
		$categoryObject->update($_POST);

		}
		public function deleteCategory(){
		$id = $_POST['id'];
		$categoryObject = new Category();
		$categoryObject->delete($id);
		
	}	
		public function createCategory(){
			$categoryObject = new Category();
			$categories = $categoryObject->get();

			include '../resources/views/categories/create.php';

		}
		public function storeCategory(){
				$categoryObject = new Category();
				$categoryObject->storeCategory($_POST);
		}


}

?>