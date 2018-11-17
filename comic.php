<?php
session_start();

if(!isset($_SESSION['user']))
{
  header("Location: index.php");
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
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 align-self-end">
        <!-- <div class="login-background-image"></div> -->
          <form class="form-signin" name="loginForm" id="loginForm">
                      <div class="form-wrapper" style="margin:10px;">
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9" style="margin-bottom:5px;">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mQV5ymUVrhw" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        <a href="logout.php?logout=true" class="btn btn-lg btn-primary btn-block" name="logoutBtn" id="logoutBtn">Logout</a>
                        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                      </div>
          </form>
        </div>
    </div>
    </div>

  </body>
</html>
