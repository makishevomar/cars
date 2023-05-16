
<?php
#$connect = mysqli_connect('localhost','root','','firstapp');
#$query = mysqli_query($connect,'SELECT * FROM categories');
#$categories = mysqli_fetch_all($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"
    />
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
    require_once '../resources/views/navigation.php';?>
<div class="container">
    <form action="/cars/store" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        <label for="name" class="col-form-label">Name</label>
        <input type="text" name="name" class="form-control" style="border: 1px solid #ddd" id="name" required>
        </div>
        
        <div class="form-group">
        <label for="category" class="col-form-label">Category</label>
        <select class="form-control" name="categoria_id" id="categoria_id" style="border: 1px solid #ddd">
            <?php foreach ($categories as $key => $category) {
            ?>
            <option value="<?php echo $category[0] ?>" style="border: 1px solid #ddd"><?php echo $category[1] ?></option>
             <?php } ?>
        </select>
        </div>
       
        <div class="form-group">
        <label for="description" class="col-form-label">Description</label>
        <textarea type="text" name="description" class="w-100" style="border: 1px solid #ddd" id="description" required></textarea>
        </div>
        <div class="form-group">
        <label for="price" class="col-form-label">Price</label>
        <input type="text" name="price" class="form-control" style="border: 1px solid #ddd" id="price" required>
        </div>
        <div class="form-group">
        <label for="image" class="col-form-label">Add image</label>
        <input type="file" name="image" class="form-control" style="border: 1px solid #ddd" id="image">
        </div>
        <div class="form-group">
            <button type="submit"  class="btn btn-primary">Create</button>
        </div>
        
    </form>
    </div>
</body>
</html>