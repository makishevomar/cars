<?php
use App\Controllers\CarsController;
use App\Controllers\CategoriesController;
use App\Route;
$route = $_SERVER['REQUEST_URI'];
$template = '../resources/views/';

$carsController = new CarsController();
$categoryController = new CategoriesController();
#var_dump($_SERVER);
#print_r($route);
#Route::get('/','SiteController@index');
if($route=='/'){
	$carsController->index();
}
if($route=='/cars/edit'){
	$carsController->editCar();

}
if($route=='/categories'){
	$categoryController->categoryF();
}
if($route=='/categories/edit'){
	$categoryController->editCategory();
	
}
if($route=='/categories/delete'){
	$categoryController->deleteCategory();
	header('Location: /categories');
}
if($route=='/categories/update'){
	$categoryController->update();
	 header('Location: /categories');
}
if($route=='/categories/create'){
	$categoryController->createCategory();
}
if($route=='/categories/store'){
	$categoryController->storeCategory();
	 header('Location: /categories');
}
if($route=='/cars/create'){
	$carsController->createCar();
}
if($route=='/cars/delete'){
	$carsController->deleteCar();
	header('Location: /');
}
if($route=='/cars/store'){
	$carsController->storeCar();
	header('Location: /');

}
if($route=='/update/cars'){
	$carsController->update();
	header('Location: /');

}
?>