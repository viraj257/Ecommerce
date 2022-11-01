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
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
   <meta name="description" content=" The project for E-commerce with the help of HTML, CSS, BOOTSTRAP, PHP, MYSQL">
   <link rel="canonical" href="virajtaywade.000webhostapp.com/first.php" />
      <meta name="keywords" content="3VMStore, PROJECT, HTML, CSS, BOOTSTRAP, PHP, MYSQL">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
    <link rel="icon" href="/images/carts.jpg" type="image/icon type">
<title>Project  - On HTML,CSS,BOOTSTRAP 5,PHP,MYSQL. | VKart</title>
</head>
<body>
<?php
require './includes/header.php';
require './includes/check-if-added.php';
?>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
<div class="carousel-item active">
<img src="https://cdn.shopify.com/s/files/1/0591/4365/1495/files/home-office-desktop.jpg?v=1630749843" alt="Los Angeles" class="d-block w-100 .img-fluid. max-width: 100%;">
<div class="carousel-caption">

<div id="banner-content ">
<a href="products.html" class="btn btn-warning btn-lg active">Shop Now</a>
</div>
</br></br></br></br></br>
<h3>Laptops</h3>
<p>The coolest laptops are here</p>
</div>
</div>
<div class="carousel-item">
<img src="https://cdn.shopify.com/s/files/1/0591/4365/1495/files/cases-banner_web1.jpg?v=1630771942 " alt="Chicago" class="d-block w-100 .img-fluid. max-width: 100%;">
<div class="carousel-caption">

<div id="banner-content">
<a href="phone.php" class="btn btn-warning btn-lg active">Shop Now</a>
</div>
</br></br></br></br></br>
<h3>Mobiles</h3>
<p>Home to India's best best selling Phones</p>
</div>
</div>
<div class="carousel-item">
<img src="https://cdn.shopify.com/s/files/1/0591/4365/1495/files/macbook-hardshell-banner-desktop-01_1512x604.jpg?v=1630749286" alt="New York" class="d-block w-100 .img-fluid. max-width: 100%;">
<div class="carousel-caption">

<div id="banner-content">
<a href="products.html" class="btn btn-warning btn-lg active">Shop Now</a>
</div>
</br></br></br></br></br>
<h3>Laptop Covers</h3>
<p>The coolest laptop covers are here</p>
</div>
</div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>



</div>

<!-----Jumbotron----->
<div class="">
<div class="jumbotron" style="margin-top: 90px">
<center><h1>Welcome to our VKart!</h1></center>
<center><p>The search for yor Tshirt is finished.</p></center>
</div>
<br/>
<br/>
<div id="banner-image" class=".img-fluid. max-width: 100%;">
</div>
<br/>
<div class="container pt-4">
    <br><br><center><h2>New Arrivals in Fashion</h2></center>
    </div>
</br>
<div class="row grid gap-3">
        <div class="col-md-3 col-sm-6 mx-auto pt-5">
            <div class="thumbnail">
                <a href="anime.php">
                <img src="images/naruto09.jpg" class="zoom1 img-fluid" alt="cloth">
                </a>        
            </div>
            </div>
        
        <div class="col-md-3 col-sm-6  mx-auto pt-5">
            <div class="thumbnail">
                <a href="marvel.php">
                <img src="images/marvel09.jpg" class="zoom1 img-fluid" alt="cloth">
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6   mx-auto pt-5">
            <div class="thumbnail">
                <a href="dc.php">
                <img src="images/dc09.jpg" class="zoom1 img-fluid" alt="cloth">
                </a>
            </div>
        </div>
</div>

<h3 class="text-center pt-5 pb-5">The Official Merchandise</h3>
<div class="line">
  <div class="item ps-5">
    <a href="marvel.php">
    <img src="./images/marvel08.jpg" class="zoom1" alt="..">
</a>
  </div>
  <div class="item ps-3">
    
    <img src="./images/disney00.jpg" href="disney.php" class="zoom1" alt="..">

  </div>
  <div class="item ps-3"><a href="harry.php">
    <img src="./images/harrypotter00.jpg" class="zoom1" alt="..">
</a>
  </div>
  <div class="item ps-3">
    <a href="dc.php">
    <img src="./images/dc01.jpg" class="zoom1" alt="..">
</a>
  </div>
  <div class="item ps-3">
    <a href="wwe.php">
    <img src="./images/wwe00.jpg" class="zoom1" alt="..">
</a>
  </div>
  <div class="item ps-3 px-5">
    <a href="starwar.php">
    <img src="./images/starwars00.jpg" class="zoom1" alt="..">
</a>
  </div>
 
  </div>
</div>
</br</br>
<h3 class="text-center pt-5">Shop By Gender</h3>
<div class="row">
  <div class="col ps-2 pt-5" > <a href="men.php">
    <img src="./images/mens1clo.jpg" class="img-fluid zoom1" alt=".."></a>
  </div>
  <div class="col pt-5"><a href="women.php">
    <img src="./images/womencloth.jpg" class="img-fluid zoom1" alt=".."></a>
  </div>
</div>


<div class="container">
<div class="jumbotron" style="margin-top: 90px">
<center><h2>Welcome To Electronics</h2></center>
</div>
</div><br/><br/>

<img src="./images/hp00.jpg" class="img-fluid" alt="..">
</br></br>
<div class="line1">
  <div class="item">
    <a href="marvel.php">
    <img src="./images/camera00.jpg" class="img-fluid zoom1" alt="..">
</a>
  </div>
  <div class="item ps-3">
  <a href="marvel.php">
    <img src="./images/computer.jpg" class="img-fluid zoom1" alt="..">
</a>
  </div>
  <div class="item ps-3"><a href="harry.php">
    <img src="./images/head.jpg" class="img-fluid zoom1" alt="..">
</a>
  </div>
</div></br></br></br>
<div class="container"><a href="phone.php">
  <img src="./images/mob.gif" class="img-fluid zoom1"></a>
  </div>
<div class="container-fluid pt-5">
<div class="row">
<div class="col-sm-5 bg-warning">
<div class="thumbnail "><img src="https://down.imgspng.com/download/0720/question_mark_PNG63.png" alt=""/></div>
</div>
    <div class="col-sm-6" style="background: #323231">
      <center><h3 style="color:#FFC107">Why us?</h3></center><br>
      <h4 class="p-4" style="color: #FFC107"> <big>We</big> here at VKart, believe
        in  providing the best quality 
        products so you can express 
        your trend. 
        Build yourself with VStore. 
        Become trendy whatever you buy.</h4></pre>
    </div>
  </div>
</div>
</div>
</br>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>