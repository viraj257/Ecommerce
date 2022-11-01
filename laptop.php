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
            <h1>Welcome to our VStore</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt
                around, we have all in one place.</p>
        </div></br></br>
    </div>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/l1.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>HP Pavilion Ryzen 7 Octa Core</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 89,990</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(85)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=85" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/l2.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>Acer Nitro 5 Ryzen 5</h3></br>
                    <p>Price: <i class="fa fa-rupee"></i> 94,800</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(86)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=86" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/l3.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>ASUS Vivobook Pro 14 Ryzen 7 </h3>
                    <p>Price: <i class="fa fa-rupee"></i> 96,690</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(87)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=87" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/l4.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>ASUS TUF Gaming A15 Ryzen 7 Octa Core 4800H</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 89,990</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(88)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=88" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                <img src="images/l5.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>HP Pavilion Gaming Core i7 11th Gen</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 97,990</p></br>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(89)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=89" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/l6.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>ASUS ROG Ryzen 7</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 99,990</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(90)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=90" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/l7.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>ASUS ZenBook S Core i7 8th Gen</h3></br></br>
                    <p>Price: <i class="fa fa-rupee"></i> 98,990</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(91)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=91" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/l8.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>acer Swift 5 Core i7 11th Gen Intel EVO</h3></br></br></br>
                    <p>Price: <i class="fa fa-rupee"></i> 94,190</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(92)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=92" name="add" value="add" class="btn btn-primary">Add to cart</a>
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
                <img src="images/l9.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>MSI Katana GF66 Core i7 11th Gen</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 94,990</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(93)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=93" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/l10.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>APPLE 2020 Macbook Air M1</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 88,990</p></br>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(94)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=94" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/l11.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>APPLE 2020 Macbook Air M1 - (8 GB/256 GB SSD/Mac OS Big Sur)</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 85,990</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(95)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=95" name="add" value="add" class="btn btn-primary">Add to cart</a>
                    <?php }
} ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 pt-5">
            <div class="thumbnail">
                <img src="images/l12.jpeg" alt="cloth">
                <div class="caption pb-4">
                    <h3>DELL Core i7 11th Gen 16 GB/512 GB SSD/Windows 11 Home</h3>
                    <p>Price: <i class="fa fa-rupee"></i> 88,990</p>
                    <?php if(!isset($_SESSION["email_id"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                    <?php }else{ ?>
                    <?php if(check_if_added_to_cart(96)){ ?>
                    <a href="#" class="btn btn-success" disabled>Added to cart</a>
                    <?php }else{ ?>
                    <a href="cart-add.php?id=96" name="add" value="add" class="btn btn-primary">Add to cart</a>
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