<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Noto+Sans+JP:wght@100;300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2c1c1e575.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <!--- NAV-->
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="index.php" >ElectroStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      My Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="account.html">Profile</a>
                      <a class="dropdown-item" href="#">Orders</a>
                      <a class="dropdown-item" href="#">Wishlists</a>
                    </div>
                  </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Wishlists</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-shopping-cart"></i>Cart</a>
                </li>

            </ul>



        </div>
    </nav>  
    <!--Sub nav-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3"><a id="unnav" href="mobile.html">Mobiles</a></div>
            <div class="col-lg-3 col-md-3 col-sm-3"><a id="unnav" href="laptop.html">Laptops</a></div>
            <div class="col-lg-3 col-md-3 col-sm-3"><a id="unnav" href="camera.html">Cameras</a></div>
            <div class="col-lg-3 col-md-3 col-sm-3"><a id="unnav" href="other.html">Accessories</a></div>
        </div>

    </div>
    

    <!-- Form -->
    <div id="form_section">

    
    <form method="post" action="register.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="number" name="number">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
    </div>
    






























</body>
</html>