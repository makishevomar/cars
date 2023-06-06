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
                    <img src="../images/<?php echo $car[4]?>" class="w-100" height="220" alt="">
                </div>
                <div>
                    <h5><?php echo $car[1]?></h5>
                </div>
                 <div>
                    <p><?php echo $category[1]?></p>
                </div>
                <div>
                    <p><?php echo $car[2] ?></p>
                </div>
                <div>
                    <p>
                        <b><?php echo $car[3] ?> $</b>
                    </p>
                </div>
                 <input type="submit" value="Book"  class="btn btn-primary">
               <!--  <form action="/comment" method="post">
                    <input type="hidden" name="car_id" value="<?php echo $car[0]?>">
                  
                    <input type="text" name="comment" class="form-control" style="border: 1px solid #ddd" id="name" width="10"><br>
                    <input type="submit" value="comment"  class="btn btn-primary">
                 <?php  foreach ($commentaries as $key => $comment) {
                    
                  ?>
                    <div class="koment">
                        <div class="user_comment"><?php echo $comment[2]  ?> </div>
                        <div class="message"><?php echo $comment[1]  ?> </div>
                    </div>
                    <?php   }?>
                </form>-->
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

