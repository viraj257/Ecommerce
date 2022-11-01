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
                <img src="images/sony.jpg" alt="camera">
                <div class="caption">
                    <h3>Sony NEW Alpha 7S III </h3>
                    <p>Price: <i class="fa fa-rupee"></i> 334,990</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(25)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/camera2.png" alt="camera">
                <div class="caption">
                    <h3> Nikon D780 DSLR Camera </h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1,65,000</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(26)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=26" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/camera3.jpg" alt="camera">
                <div class="caption">
                    <h3>Canon EOS 200D II</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 50,000</p></br>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(27)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=27" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/camera4.jpg" alt="camera">
                <div class="caption">
                    <h3>Fujifilm Instax Mini 11 </h3>
                    <p>Price: <i class="fa fa-rupee"></i> 5,999</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(28)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=28" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                <img src="images/camera5.jpg" alt="camera">
                <div class="caption">
                    <h3>GoPro Hero 9 Action Camera</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 36,999</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(29)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=29" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/camera6.jpg" alt="camera">
                <div class="caption">
                    <h3>Canon EOS M50 Mark ||</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 57,999</p></br>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(30)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=30" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/camera7.jpeg" alt="camera">
                <div class="caption">
                    <h3>NIKON D5600</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 51,450</p></br></br>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(31)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=31" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/camera8.jpg" alt="camera">
                <div class="caption">
                    <h3>Nikon Z50</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 99,999</p></br>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(32)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=32" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                <img src="images/camera9.jpg" alt="camera">
                <div class="caption">
                    <h3>Canon EOS M200</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 44,151</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(33)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id33" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/camera10.jpg" alt="camera">
                <div class="caption">
                    <h3>Sony ILCE 6000L DSLR Camera</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 42,990</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(34)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=34" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/camera11.webp" alt="camera">
                <div class="caption">
                    <h3>Canon PowerShot DSLR Camera</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 17,899</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(35)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=35" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/camera12.webp" alt="camera">
                <div class="caption">
                    <h3>Samsung Digital Camera</h3>
                    <p>Price: <i class="fa fa-rupee"></i>43,999</p></br>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(36)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=36" name="add" value="add" class="btn btn-primary">Add to cart</a>
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