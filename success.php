<?php
require './includes/common.php';
// check if signed in
if(!isset($_SESSION["email_id"])){
header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="/images/carts.jpg" type="image/icon type">
<title>VStore</title>
</head>
<body>
<?php
require './includes/header.php';

// check all items to confirmed
$user_id = $_SESSION["id"];
$query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

while($row = mysqli_fetch_array($result)){
$item_id = $row["item_id"];
$query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";

$result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
}
?>
<div>
<div id="pro-image">
<div class="container ">
<div>
<center></br></br></br></br></br></br></br>
<div id="pro-content">
<h5>
Your order is confirmed. Thank you for shoppingwith us.<br><a href="index.php"> Click here</a> to purchase any other item.</p>
</h5>
</div>


</div>
</center>
</div>
</div>
</div>
<?php
require './includes/footer.php';
?>
</body>
</html>