<?php
/*
 * Copyright (c) 2018 by HexCoin (contact@hexco.in)
 * WebEngine 1.0
*/

  // REQUIRES
  require_once("config/config.php");

  //SET CONTENT PAGE
  if(!empty($_GET['page'])) {
    if(file_exists("pages/".$_GET['page'].".php")) {
      $page = $_GET['page'].".php";
    } else {
      $page = "404.php";
    }
  } else {
    $page = "index.php";
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo($a['title']); ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <!-- NAVIGATION -->
    <nav class="navbar sticky-top navbar-dark bg-dark navbar-expand-md">
      <a class="navbar-brand" href="<?php echo($a['subdir']); ?>"><?php echo($a['title']);?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo($a['subdir']); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo($a['subdir']); ?>?page=block">Blocks</a>
          </li>
        </ul>
      </div>
    </nav>

    <?php require_once("pages/".$page); ?>

    <!-- FOOTER -->
    <footer class="container">
      <hr>
      <p><?php echo($a['copyright']);?> | Version: <?php echo($a['version']); ?></p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
