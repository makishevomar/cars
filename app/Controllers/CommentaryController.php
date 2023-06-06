<?php

namespace App\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Commentary;

class CommentaryController extends Controller
{
	public function index(){
		$commentaryObjects = new Commentary();
		$commentaries = $commentaryObjects->get();

		include '../resources/views/index.php';
	}
}


?>