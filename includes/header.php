<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <link rel="icon" href="https://t4.ftcdn.net/jpg/04/06/91/91/360_F_406919161_J0pGxe1sewqnk5dnvyRS77MKmEd6SVac.jpg" type="image/icon type">
    <div class="container-fluid">
      <a class="navbar-brand" href="first.php">
        <img src="/images/carts.jpg" alt="Logo" style="width:40px;" class="rounded-pill"> 
      </a>
      <a class="navbar-brand" href="index.php">VKart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Items</a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="cloth1.php">Clothes</a></li>
                <li><a class="dropdown-item" href="camera.php">Camera</a></li>
                <li><a class="dropdown-item" href="phone.php">Phones</a></li>
            </ul>
            </li>
		
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<?php
				if(isset($_SESSION["email_id"])){ 
			?>
			
					<li class="nav-item">
					<a class="nav-link" href="cart.php">Cart</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="settings.php">Settings</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="logout.php"> Logout</a>
					</li>

			<?php
				}else{
			?>
		
					<li class="nav-item">
					<a class="nav-link" href="login.php"> Login</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="signup.php"> SignUp</a>
					</li>
			
			<?php
				}
			?>
				</ul>
		</div>
			</div>
	</div>
</nav>