<?php
require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Vkart</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require "./includes/header.php";
?>
<section class="vh-100">
    <div class="container py-5 h-100">
    <div class="col col-xl-10">
<div class="card" style="border-radius: 1rem; background-color:#f0e40a">
<div class="row g-0">
<div class=" d-none d-md-block align-items-center">
        <form action="pay.php" method="POST">
           <center> <h3 clas="ps-3">How do you want to make payment</h3> </center>
            <label class="ps-4 pt-5 ">Payment Type</label></br></br></br>
            <input type="radio" name="pay" value="1"/>COD</br></br>
            <input type="radio" name="pay" value="2"/>PAY ONLINE</br></br>
            <input type="submit" name="ins" class="bt1 btn-primary"/></br>
        </form>
    </div>
</div>
</div>
</div>
</div>
</section>
<?php
require './includes/footer.php';
?>
</body>
</html> 

