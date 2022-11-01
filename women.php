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
                <img src="images/wo1.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Cant People Today T-Shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 275</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(73)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=73" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/wo2.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Customizable Round Neck T Shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 499</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(74)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=74" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/wo3.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Women's Heather Rose Varsity Half Sleeve Round Neck T-shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(75)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=75" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/wo4.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Upbeat Blue Abstract AOP Half Sleeve T-shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 549</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(76)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=76" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                <img src="images/wo6.jpg" alt="shirt">
                <div class="caption pb-4">
                    <h3>White T-Shirts</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 349</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(77)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=77" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/wo5.jpg" alt="top">
                <div class="caption pb-4">
                    <h3>Dreamer Ducks Boyfriend T-shirt (DL)</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(78)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=78" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/wo7.jpg" alt="top">
                <div class="caption pb-4">
                    <h3>Pocket Astronaut Boyfriend T-Shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 259</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(79)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=79" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/wo8.jpg" alt="top">
                <div class="caption pb-4">
                    <h3>Jerry Hyper Print T-Shirt (TJL) Black</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(80)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=80" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                <img src="images/wo9.jpg" alt="watch">
                <div class="caption pb-4">
                    <h3>Can't People Today Half Sleeve T-Shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 275</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(81)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=81" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/wo10.jpg" alt="track">
                <div class="caption pb-4">
                    <h3>Cutie Chip Half Sleeve T-Shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 349</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(82)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=82" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/wo11.jpg" alt="pants">
                <div class="caption pb-4">
                    <h3>Sofasana Half Sleeve T-Shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 359</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(83)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=83" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/wo13.jpg" alt="watch">
                <div class="caption pb-4">
                    <h3>Pocket Astronaut Round Neck 3-4 Sleeve T-Shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 325</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(84)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=84" name="add" value="add" class="btn btn-primary">Add to cart</a>
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