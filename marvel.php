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
    <img src="./images/marvel00.jpg" class="img-fluid" alt="DC">
    <div class="container panel-margin">
        <div class="jumbotron pt-4 text-secondary">
            <h4>Marvel Comics Official Merchandise </h4>
            <h6>VKart(12 item)</h6>
           
        </div></br>
    </div>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/ironman.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Iron Man Of War Half Sleeve T-Shirt (AVL)</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(37)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=37" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/stark1.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Men's Black Marvel Stark Industries Hoodie</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1299</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(38)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=38" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/marvel44.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3> Marvel Official Hoodie</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1099</p></br>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(39)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=39" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/balckpanther.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Black Panther Half Sleeve T-Shirt Black</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1299</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(40)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=40" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                <img src="images/marvel12.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Captain America Official Hoodies</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1099</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(41)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=41" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/marvel66.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Marvel Spider Full Sleeve T-shirt (SPL)</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 499</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(42)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=42" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/marvel7.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Striped Captain America Hoodi</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1049</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(43)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=43" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/marvel6.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Stark Industries Logo Marvel Official Hoodie</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1099</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(44)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=44" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                <img src="images/marvel9.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Avengers All Star (AVL) Full Sleeve Hoodie T-shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 599</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(45)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=45" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/marvel10.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3> Half Sleeve T-Shirt (AVL) Black</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 349</p></br>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(46)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=46" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/marvelca.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Captain America: Mechanical Shield Marvel Official Hoodie</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1099</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(47)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=47" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/marvel13.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Iron Man of War (AVL) Full Sleeve Hoodie T-shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 599</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(48)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=48" name="add" value="add" class="btn btn-primary">Add to cart</a>
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