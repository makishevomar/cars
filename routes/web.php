<?php
use App\Controllers\CarsController;
use App\Controllers\CategoriesController;
use App\Controllers\UsersController;
use App\Controllers\CommentaryController;
use App\Route;
$route = $_SERVER['REQUEST_URI'];
$template = '../resources/views/';
$commentController = new CommentaryController();
$carsController = new CarsController();
$categoryController = new CategoriesController();
$usersController = new UsersController();

#var_dump($_SERVER);
#print_r($route);
#Route::get('/','SiteController@index'); 
if($route=='/'){
	$carsController->indexAll();
	
}
elseif($route=='/cars/edit'){
	$carsController->editCar();

}
elseif($route=='/categories'){
	$categoryController->categoryF();
}
elseif($route=='/categories/edit'){
	$categoryController->editCategory();
	
}
elseif($route=='/categories/delete'){
	$categoryController->deleteCategory();
	header('Location: /categories');
}
elseif($route=='/categories/update'){
	$categoryController->update();
	 header('Location: /categories');
}
elseif($route=='/categories/create'){
	$categoryController->createCategory();
}
elseif($route=='/categories/store'){
	$categoryController->storeCategory();
	 header('Location: /categories');
}
elseif($route=='/cars/create'){
	$carsController->createCar();
}
elseif($route=='/cars/delete'){
	$carsController->deleteCar();
	header('Location: /admin/cars');
}
elseif($route=='/cars/store'){
	$carsController->storeCar();
	header('Location: /admin/cars');

}
elseif($route=='/update/cars'){
	$carsController->update();
	header('Location: /admin/cars');

}
elseif($route=='/admin/login'){
	$usersController->index();
	
}
elseif($route=='/admin/auth'){
	$usersController->login();
	//header('Location: /admin/login');
}

elseif($route=='/admin'){
	include '../resources/views/admin/index.php';
}
elseif($route=='/admin/cars'){
	$carsController->index();
}
elseif($route=='/admin/categories'){
	$categoryController->categoryF();
}elseif ($route =='/admin/logout') {
	$usersController->logout();
	header('Location: /');
}
elseif($route=='/admin/register'){
	include '../resources/views/admin/register.php';
	
}	
elseif($route=='/admin/regacc'){
		$usersController->storeUser();
		header('Location: /admin/login');
		}
elseif($route=='/comment'){
	$usersController->storeUser();
header('Location: /');
}
?>