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

  <body>
   <div class="container white-bg" style="padding: 15px;">

      <div class="jumbotron" style="padding-top: 10px;">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-comic.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-author.php">Author</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Details</a>
            </li>
          </ul>
        </nav>
        <h1 class="display-3">What about <i>me</i>?</h1>
        <p class="lead">[Narrating] Self-proclaimed humanoid interface created by aliens [Referring to Yuki]. Self-proclaimed time-traveling girl [Referring to Mikuru]. Self-proclaimed squad of ESPer boys [Referring to Itsuki]. They've shown me enough proof that I may now safely remove the words "self-proclaimed" from their titles. The three of them, each for their own reasons, mind you, are currently focused on Haruhi Suzumiya. Even if I believe everything I've seen, I still can't figure out one thing: <b>why me?</b></p>
        <a class="btn btn-lg btn-success" href="comic.php" role="button">Watch Now!</a>
      </div>

      <div class="row marketing">
        <div class="col-lg-6 text-justify">
          <h4>Wiki Pulled from Database.</h4>
          <p>
            <table class="table table-striped">
              <tbody>
            <?php
                $servername = "localhost";
                $username = "id4362835_root";
                $password = "root123";
                $database = "id4362835_webtechproject";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                
                $query = "SELECT * FROM info;";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['property'] . "</td><td>" . $row['value'] . "</td></tr>";
                  }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>
          </tbody>
          </table>
          </p>
        </div>

        <div class="col-lg-6 text-justify">
          <h4>More on Wiki</h4>
          <p><blockquote class="embedly-card"><h4><a href="https://en.wikipedia.org/wiki/Haruhi_Suzumiya">Haruhi Suzumiya - Wikipedia</a></h4><p>Haruhi Suzumiya is a series of light novels written by Nagaru Tanigawa and illustrated by Noizi Ito and which were adapted into other media. Initially released in Japan in 2003 with the novel The Melancholy of Haruhi Suzumiya, it was followed by ten additional volumes, an anime television series adaptation, four manga series, an animated film, two original net animation series and several video games.</p></blockquote><script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script></p>
        </div>
      </div>

      <footer class="footer"><hr>
        <p>&copy; <a href="http://aekansh.in/">Aekansh Dixit</a> 2018</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
