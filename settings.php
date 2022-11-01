<?php
require './includes/common.php';
// check  if logged in
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
?></br></br></br>
<div class="container panel-margin">
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Change Password</h2>
</div></br></br>
<div class="panel-body">
<form actiom="settings_script.php" method="post">
<div class="form-group">
<input type="password" class="form-control" name="old_pass" placeholder="Old Password" required>
</div></br>
<div class="form-group">
<input type="password" class="form-control" name="new_pass" placeholder="New Password" required>
</div></br>
<div class="form-group">
<input type="password" class="form-control" name="retype_new_pass" placeholder="Re-type New Password" required>
</div></br>
<button type="submit" class="btn btn-primary">Change</button>
</form>
</div></br></br></br></br>
</div>
</div>
<?php
require './includes/footer.php';
?>
</body>
</html> 