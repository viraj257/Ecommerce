<?php
require './includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="/images/carts.jpg" type="image/icon type">
<title>VStore</title>
</head>
<body>
    <?php
    require './includes/header.php';
    require './includes/check-if-added.php';
    ?>
    <div class="container-fluid pt-5">
    <div class="row">
        <div class="col-6 ps-5">
            <img src="./images/anime50.jpg" class="img-fluid" alt="..">
        </div>
        <div class="col float-end">
            <h3>Product Name</h3>
            <h4 class="pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit nulla non quidem modi qui unde! Consequuntur saepe rem quo! Eveniet perspiciatis inventore quibusdam voluptatum dignissimos.</h4>
            <hr>
            <h5>M.R.P: ₹250</h5>
            <p class="text-secondary">Inclusive all Taxes</p>
            <hr>
            <input type="number" class="form-control" name="contact" placeholder="Qty" value="1" style="width:5rem" required></br>
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
<div class="pt-5">
                </br>
</div>
<?php
require './includes/footer.php';
?>
</body>
</html>