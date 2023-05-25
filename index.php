<?php

$connect = mysqli_connect('localhost','root','','firstapp');
$query = mysqli_query($connect,'SELECT * FROM categories');
$categories = mysqli_fetch_all($query);

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
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
  ?>
    <div class="container">
        <div>
                 <form action="/categories/create" method="POST">
                       <input type="submit" value="Create" class="btn btn-primary">
                        </form> 
          
        </div>
        <table class="table">
            <thead>
               
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                 <?php
                    foreach($categories as $key => $category){
                ?>
                <tr>
                    <td><?php echo $category[0] ?></td>
                    <td><?php echo $category[1] ?></td>
                    <td>
                        <form action="/categories/edit" method="POST">
                       <input type="hidden" name="id" value="<?php echo $category[0]?>">
                       <input type="submit" value="edit" class="btn btn-primary">
                        </form> 
                         <form action="/categories/delete" method="POST">
                       <input type="hidden" name="id" value="<?php echo $category[0]?>">
                       <input type="submit" value="Delete" class="btn btn-danger">
                        </form> 
                      
                    </td>
                </tr>
                <?php 
                } ?>
            </tbody>
        </table>
    </div>
   
<script src="/src/js/jquery.min.js"></script>
<script src="/src/js/popper.js"></script>
<script src="/src/js/bootstrap.min.js"></script>
<script src="/src/js/main.js"></script>

</body>
</html>

