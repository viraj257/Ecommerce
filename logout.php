<?php
require './includes/common.php';

// destroy the session if present
if(!isset($_SESSION["email_id"])){
header("location: index.php");
}else{
session_unset();
session_destroy();
}
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
<title>VKart</title>
</head>
<body>
<?php
require './includes/header.php';
?>
<section class="vh-100" style="background-color: #FFC107;">
<div class="container py-5 h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col col-xl-10">
<div class="card" style="border-radius: 1rem;background-color:#2B2D42">
<div class="row g-0">
<div class="col-md-6 col-lg-5 d-none d-md-block">
<img
src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img1.jpg"
alt="login form"
class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
/>
</div>
<div class="col-md-6 col-lg-7 d-flex align-items-center">
<div class="card-body p-4 p-lg-5 text-black">
<div class="alert" style="color:000000; background-color:#FFFDFA">
You have successfully logged out. Click <a href="index.php">here</a> to go back to index page.
</div>





</div>
</div>
</div>
</div>
</section>

</div>
</div>
<?php
require './includes/footer.php';
?>
</body>
</html>