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
    <img src="./images/dc00.jpg" class="img-fluid" alt="DC">
    <div class="container panel-margin">
        <div class="jumbotron pt-4 text-secondary">
            <h4>DC Comics Official Merchandise </h4>
            <h6>VKart(12 item)</h6>
           
        </div></br>
    </div>
    <div class="row text-center">
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc1.jpg"class="img-fluid" alt="cloth">
                <div class="caption pt-3 pb-4">
                    <h4>Classic Flash Logo Half Sleeve T-Shirt (FL)</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(61)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=61" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc2.jpg" class="img-fluid" alt="cloth">
                <div class="caption pt-3 pb-4">
                    <h4>Batman Outline Logo Full Sleeve T-Shirt (BML) Black</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 499</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(62)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=62" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc3.jpg" class="img-fluid" alt="cloth">
                <div class="caption pt-3 pb-4">
                    <h4>Batman Outline Logo Hoodie Sweatshirt</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 1049</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(63)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=63" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc4.jpg" class="img-fluid" alt="cloth">
                <div class="caption pt-3 pb-4">
                    <h4>Bat Knight Full Sleeve T-Shirt</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 499</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(64)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=64" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
    </div>
    </div></br></br>
    <div class="row text-center">
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc5.jpg" alt="shirt">
                <div class="caption pt-3 pb-4">
                    <h4>Logo Batman Glow In Dark Full Sleeve T-Shirt (BML)</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(65)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=65" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc6.jpg" class="img-fluid" alt="cloth">
                <div class="caption pt-3 pb-4">
                    <h4>Bat Knight Half Sleeve T-Shirt</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 349</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(66)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=66" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc7.jpg" alt="top">
                <div class="caption pt-3 pb-4">
                    <h4>Batman Outline Logo(BML) Full Sleeve Hoodie T-shirt</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 599</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(67)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=67" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc8.jpg" alt="top">
                <div class="caption pt-3 pb-4">
                    <h4>Logo Batman Glow In Dark Half Sleeve T-Shirt (BML)</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(68)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=68" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
    </div>
    </div></br></br>

    <div class="row text-center">
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc9.jpg" class="img-fluid" alt="cloth">
                <div class="caption pt-3 pb-4">
                    <h4>My World Superman Half Sleeve T-shirt</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(69)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=69" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc10.jpg" alt="track">
                <div class="caption pt-3 pb-4">
                    <h4>Justice League Triad Full Sleeve Hoodie T-shirt</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 599</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(70)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=70" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc11.jpg" alt="pants">
                <div class="caption pt-3 pb-4">
                    <h4>Batman Outline Logo Crewneck Sweatshirt</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 999</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(71)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=71" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 pt-5">
            <div class="thumbnail">
                <img src="images/dc12.jpg" alt="watch">
                <div class="caption pt-3 pt-3 pb-4">
                    <h4>Classic Flash Logo Full Sleeve Hoodie T-shirt</h4>
                    <p>Price: <i class="fa fa-rupee"></i> 599</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(72)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=72" name="add" value="add" class="btn btn-primary">Add to cart</a>
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