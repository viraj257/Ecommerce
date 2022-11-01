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
                <img src="images/cloth11.png" alt="cloth">
                <div class="caption pb-4">
                    <h3>Men Riding Jacket</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 900</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(1)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/cloth12.webp" alt="cloth">
                <div class="caption pb-4">
                    <h3>Harry Potter Hoodie</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 899</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(2)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/cloth13.webp" alt="cloth">
                <div class="caption pb-4">
                    <h3>Harry Potter Hoodie</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 859</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(3)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/cloth14.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Men's Casual Blazer</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1299</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(4)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                <img src="images/cloth15.jpg" alt="shirt">
                <div class="caption pb-4">
                    <h3>Men's Jacket-Lightweight Casual</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1299</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(5)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/avengers1.jpg" alt="top">
                <div class="caption pb-4">
                    <h3>Avengers Quantum Suits Jacket</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 2099</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(6)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/men7.jpg" alt="top">
                <div class="caption pb-4">
                    <h3>Avengers Endgame Tshirts for Men</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 999</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(7)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/men9.jpg" alt="top">
                <div class="caption pb-4">
                    <h3>Marvel Hoodies</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1099</p></br>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(8)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                <img src="images/men10.jpg" alt="watch">
                <div class="caption pb-4">
                    <h3>Harry Potter T-Shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 599</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(9)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/cloth20.jpg" alt="track">
                <div class="caption pb-4">
                    <h3>Men's Cotton Men Slim Fit Athletic Track Pants</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 589</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(10)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/cloth21.jpg" alt="pants">
                <div class="caption pb-4">
                    <h3>Men's Regular Fit Formal Trousers</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 759</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(11)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/cloth22.jpg" alt="watch">
                <div class="caption pb-4">
                    <h3>AD & AV Men's Regular Trousers (Pack of 2)</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 859</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(12)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary">Add to cart</a>
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