<?php
// if already logged in, go to products page
if(isset($_SESSION["email_id"])){
header("location: index.php");
}
require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="/images/carts.jpg" type="image/icon type">
<title>VStore</title>
</head>
<body>
<?php
require './includes/header.php';
?>
<div class="row pt-1">
<img src="./images/banner01.jpg" class="img-fluid">
</div>
<div class="row pt-2 me-1 ms-1">
<div class="col me-3">
<a href="men.php">
<img src="./images/mens1clo.jpg" class="img-fluid rounded float-start " alt="...">
</a>
</div> 
<div class="col">
<a href="women.php">
<img src="./images/womencloth.jpg" class="img-fluid rounded float-end" alt="...">
</a>
</div>
</div>
<div class="jumbotron" style="margin-top: 90px">
<center><h1>Shop By Themes</h1></center></br>
</div>
<div class="row text-center">
<div class="col-md-4 col-sm-4">
<div class="thumbnail">
<a href="anime.php"><img src="./images/anime.jpg" class="img-fluid"></a>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="thumbnail">
<a href="marvel.php"><img src="./images/Marvel.jpg" class="img-fluid"></a>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="thumbnail">
<a href="dc.php"><img src="./images/DC.jpg" class="img-fluid"></a>
</div>
</div>
</div></br></br></br>
<?php
require "./includes/footer.php";
?>

</body>
</html>
