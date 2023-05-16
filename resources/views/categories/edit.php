<?php
#$connect = mysqli_connect('localhost','root','','firstapp');
#$id = $_GET['id'];
#$query = 'SELECT * FROM categories WHERE id='.$id;
#$result = mysqli_query($connect,$query);
#$fetch = mysqli_fetch_row($result);
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
    <link rel="stylesheet" href="../src/css/style.css">
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


    <?php
    echo '<p>'.$fetch[1].'</p>';
    ?>

    <form action="/categories/update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $fetch[0]?>">
        <div class="form-group">
        <label for="name" class="col-form-label">Name</label>
        <input type="text" name="name" class="form-control" style="border: 1px solid #ddd" id="name" required>
        </div>
       
        <div class="form-group">
            <button type="submit"  class="btn btn-primary">Update</button>
        </div>
        
    </form>
    </div>
</body>
</html>