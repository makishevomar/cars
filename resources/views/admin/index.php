<?php

session_start();

if($_SESSION['admin']){
	$user = $_SESSION['admin'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php echo "$user[1] $user[2]" ?></h1>
<a href="/admin/cars">Cars</a>
<a href="/admin/categories">Categories</a>
<a href="/admin/logout">logout</a>
</body>
</html>
