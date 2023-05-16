<?php 

#use App\Models\Car;
#use App\Models\Category;


/*$car = new Car();
$category = new Category();

$categorylist = $category->get();
$carlist = $car->get();

#$connect = mysqli_connect('localhost','root','','firstapp');


#$query = mysqli_query($connect,'SELECT * FROM categories');
#$categories = mysqli_fetch_all($query);

foreach ($categorylist as $key => $category) {
    $query = mysqli_query($connect,'SELECT * FROM cars WHERE categoria_id ='.$category[0]);
    $cars = mysqli_fetch_all($query);
    $categories[$key]['cars'] = $cars;
}
  /*echo '<pre>';
  print_r($categories);
  echo '</pre>';*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
     <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/src/css/style.css">
    <style>
        #sidebar a {
            text-decoration: none;
            color: black !important;
        }
        #sidebar {
            background-color: white;
            color: black;
            border-right: 1px solid #ddd !important;
        }
    </style>
</head>
<body class="antialiased">
    <?php 
       require_once '../resources/views/navigation.php';
     #print_r($_SERVER['DOCUMENT_ROOT']); 
     ?>

    <div class="container">
        <?php foreach ($categories as  $category) {
           if ($category['cars']) {
         ?>
        <div class="col-md-12">
            <h3><?php echo $category[1] ?></h3>
        </div>
        <div class="row justify-content-center">
            <?php
            foreach ($category['cars'] as  $car){
                
                    // code...
                
            ?>

            <div class="col-md-4" style="padding: 15px; border: 1px solid #ddd;">
                
                <div>
                    <img src="../images/<?php echo $car[4]?> " class="w-100" height="220" alt="">
                </div>
                <div>
                    <h5><?php echo $car[1] ?></h5>
                </div>
                 <div>
                    <p><?php echo $category[1] ?></p>
                </div>
                <div>
                    <p><?php echo $car[2] ?></p>
                </div>
                <div>
                    <p>
                        <b><?php echo $car[3] ?></b>
                    </p>
                </div>
                <div>
                   <form action="/cars/edit" method="POST">
                       <input type="hidden" name="id" value="<?php echo $car[0]?>">
                       <input type="submit" value="Edit" class="btn btn-primary">
                   </form> 

                  <form action="/cars/delete" method="POST">
                       <input type="hidden" name="id" value="<?php echo $car[0]?>">
                       <input type="submit" value="Delete" class="btn btn-danger">
                   </form> 
                   
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    <?php } } ?>
    </div>
   
<script src="src/js/jquery.min.js"></script>
<script src="src/js/popper.js"></script>
<script src="src/js/bootstrap.min.js"></script>
<script src="src/js/main.js"></script>

</body>
</html>

