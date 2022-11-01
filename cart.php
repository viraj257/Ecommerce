<?php
    require './includes/common.php';
    // check if logged in
    if(!isset($_SESSION["email_id"])){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <title>VStore</title>
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
            $user_id = $_SESSION["id"];
            $query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";

            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if(mysqli_num_rows($result) == 0){
                echo '<h4 class="container panel-margin text-center"></br></br></br></br></br></br>
                Add products to cart first.</br> Goto <a href="index.php">Products</a> page.
                </br></br></br></br></br></br></br></br></br></br></h4>';
            }else{
                $total = 0;
        ?>  
        </br></br>
        <section class="vh-100" style="background-color: #9A616D></br></br>
        <div class="container panel-margin">
            <table class="table  table-hover">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php $total += $row["price"]; echo $row["price"] ?></td>
                    <td><a href="cart-remove.php?id=<?php echo $row["id"]; ?>">Remove</a></td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total: <i class="fa fa-rupee"></i> <?php echo $total; ?></td>
                    <td><a href="cart2.php" class="btn btn-primary">Confirm Order</a></td>
                </tr>
            </table>
        </div>
        </section>
       
        <?php
            }
            require './includes/footer.php';
        ?>
    </body>
</html>