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
<img src="./images/anime00.jpg" class="img-fluid" alt="DC">
    <div class="container panel-margin">
        <div class="jumbotron pt-4 text-secondary">
            <h4>Dragon Ball Official Merchandise </h4>
            <h6>VKart(12 item)</h6>
           
        </div></br>
    </div>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime1.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Sacrifice 2.0 Half Sleeve T-Shirt White</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(49)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=49" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime2.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Shit Feelings Anime Black Sweatshirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 899</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(50)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=50" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime3.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Men's Black Half Sleeves Cotton T-shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 599</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(51)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=51" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime5.jpg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Stoned 420 Anime Black Sweatshirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 899</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(52)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=52" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
    </div>
    </div></br></br>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime50.jpg" alt="shirt">
                <div class="caption pb-4">
                    <h3> Chaotic Anime Black T-shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 499</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(53)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=53" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime6.jpg" alt="top">
                <div class="caption pb-4">
                    <h3>Kakashi Casual Jogger Pants</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 1049</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(54)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=54" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime7.jpg" alt="top">
                <div class="caption pb-4">
                    <h3>Monster Round Neck Half Sleeve T-shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 299</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(55)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=55" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime8.jpg" alt="top">
                <div class="caption pb-4">
                    <h3>Sacrifice Round Neck Vest Black</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(56)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=56" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
    </div>
    </div></br></br>

    <div class="row text-center">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime9.jpg" alt="watch">
                <div class="caption pb-4">
                    <h3>Sacrifice 2.0 Round Neck Vest</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(57)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=57" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime10.jpg" alt="track">
                <div class="caption pb-4">
                    <h3>I Only Care About Anime Tshirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(58)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=58" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime11.jpg" alt="pants">
                <div class="caption pb-4">
                    <h3>Sakura Half Sleeve T-Shirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 299</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(59)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=59" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="images/anime12.jpg" alt="watch">
                <div class="caption pb-4">
                    <h3>Atatsuki Anime Tshirt</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 399</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(60)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=60" name="add" value="add" class="btn btn-primary">Add to cart</a>
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