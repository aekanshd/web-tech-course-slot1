<?php

session_start();

if(isset($_SESSION['user'])!="")
{
  header("Location: comic.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Haruhi Suzumiya Season 3 Script!</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <div class="container-fluid">
    <div class="row h-100">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 align-self-end login-box">
          <!-- example 5 left and center only with empty space right -->
          <!-- example 6 - center on mobile -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="d-flex flex-grow-1">
                  <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
                  <a class="navbar-brand d-lg-inline-block" href="#">
                      Haruhi Suzumiya
                  </a>
		        <div class="w-100 text-right">
		            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
		                <span class="navbar-toggler-icon"></span>
		            </button>
		        </div>
              </div>
              <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                  <ul class="navbar-nav nav-pills ml-auto flex-nowrap">
                      <li class="nav-item">
                          <a href="#" class="nav-link m-2 menu-item active">Home</a>
                      </li>
                      <li class="nav-item">
                          <a href="about-comic.php" class="nav-link m-2 menu-item">About</a>
                      </li>
                      <li class="nav-item">
                          <a href="about-author.php" class="nav-link m-2 menu-item">Author</a>
                      </li>
		              <li class="nav-item">
		              	  <a class="nav-link m-2 menu-item" href="details.php">Details</a>
		              </li>
                  </ul>
              </div>
          </nav>
        <!-- <div class="login-background-image"></div> -->
          <form class="form-signin" name="loginForm" id="loginForm">
                      <div class="form-wrapper" style="margin:10px;">
                        <h1 class="h3 mb-3 text-uppercase">Sign In<br><small class="subtitle">To view exclusive content.</small></h1>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                        <button class="btn btn-lg btn-primary btn-block" name="loginBtn" id="loginBtn" type="submit">Sign in</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                      </div>
          </form>
        </div>
    </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
