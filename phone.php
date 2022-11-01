<?php
require './includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>VStores</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="/images/carts.jpg" type="image/icon type">
</head>
<body>
<?php
require './includes/header.php';
require './includes/check-if-added.php';
?>
</br></br>
<div class="container panel-margin">
<div class="jumbotron text-center">
<h1>Welcome to our VKart</h1>
<p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
</div></br></br>
</div>
<div class="row text-center">
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/iphone11.jpg" alt="phone">
<div class="caption">
<h3>Apple iPhone 13 Pro Max (128GB)</h3>
<p>Price: <i class="fa fa-rupee"></i> 1,29,000</p>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(13)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id=13" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/iPhone13Pro.png" alt="phone">
<div class="caption">
<h3> iPhone 13 Pro(256GB)</h3>
<p>Price: <i class="fa fa-rupee"></i> 1,19,000</p></br>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(14)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id=14" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/iPhone13Pro200x200.png" alt="phone">
<div class="caption">
<h3>iPhone 13(128GB)</h3>
<p>Price: <i class="fa fa-rupee"></i> 76,000</p>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(15)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id=15" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/iphone1311.jpg" alt="phone">
<div class="caption">
<h3>Apple iPhone 13 Mini</h3>
<p>Price: <i class="fa fa-rupee"></i> 69,900</p>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(16)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id=16" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>
</div>
</div></br></br>
<div class="row text-center">
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/200x200.jpg" alt="phone">
<div class="caption">
<h3>Samsung Galaxy S20 Ultra 5G (128GB)</h3>
<p>Price: <i class="fa fa-rupee"></i> 105,999</p>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(17)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id=17" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/sam1.jpg" alt="phone">
<div class="caption">
<h3>Samsung S20 Fe 5g (cloud Navy, 128 Gb)</h3>
<p>Price: <i class="fa fa-rupee"></i> 37,999</p>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(18)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id=18" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/note20.png" alt="phone">
<div class="caption">
<h3>Samsung Galaxy Note 20 Ultra 5G</h3>
<p>Price: <i class="fa fa-rupee"></i> 97,990</p>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(19)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id=19" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/86126.jpg" alt="phone">
<div class="caption">
<h3>Samsung Galaxy Z Fold 3 </h3>
<p>Price: <i class="fa fa-rupee"></i> 1,49,999</p>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(20)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id=20" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>
</div>
</div></br></br>

<div class="row text-center">
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/realme.jpg" alt="phone">
<div class="caption">
<h3>Realme GT 5G</h3>
<p>Price: <i class="fa fa-rupee"></i> 26,990</p>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(21)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id21" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/11_13_07_Asus_ROG_Phone_5.jpg" alt="phone">
<div class="caption">
<h3>Asus ROG Phone 5 Ultimate</h3>
<p>Price: <i class="fa fa-rupee"></i> 79,999</p>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(22)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id=22" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/4559.jpeg" alt="phone">
<div class="caption">
<h3>Samsung Galaxy A30</h3>
<p>Price: <i class="fa fa-rupee"></i> 17,899</p>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(23)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id=23" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 pt-5">
<div class="thumbnail">
<img src="images/rt.jpg" alt="phone">
<div class="caption">
<h3>OnePlus 9RT</h3>
<p>Price: <i class="fa fa-rupee"></i> 42,999</p>
<?php if(!isset($_SESSION["email_id"])){ ?>
<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
<?php }else{ ?>
<?php if(check_if_added_to_cart(24)){ ?>
<a href="#" class="btn btn-success" disabled>Added to cart</a>
<?php }else{ ?>
<a href="cart-add1.php?id=24" name="add" value="add" class="btn btn-primary">Add to cart</a>
<?php }
} ?>
</div>
</div>
</div>

</div>
</div>
</div></br></br>
<?php
require './includes/footer.php';
?>
</body>
</html>