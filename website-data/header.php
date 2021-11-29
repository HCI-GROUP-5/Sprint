<?php

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bikinlagi ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="logo/logo.png">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="source/logo.png" alt="logo" width="60" height="60">
                <img src="source/brand.png" alt="brand" class="img-fluid" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex search-box img-fluid mx-auto d-block">
              <input class="" type="search" placeholder="Search" aria-label="Search">
              <button type="submit">
                <img src="source/sbutton.png" alt="search">
              </button>
            </form>
            <div class="collapse navbar-collapse fw-normal fs-7 text-center" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a href="cart.php" class="cart">
                    <img src="source/cart.png" alt="cart" width="27" class="img-fluid mt-1">
                  </a>
                </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                  <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Anime</a></li>
                    <li><a class="dropdown-item" href="#">3d Character</a></li>
                    <li><a class="dropdown-item" href="#">Painting</a></li>
                    <li><a class="dropdown-item" href="#">Drawing</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Gallery</a>
              </li>
              <?php if (isset($_SESSION['name']) && !empty($_SESSION['name'])) {
              ?>
              <li class="nav-item nav-link active">
                <a href="logout.php">
                <button type="button" class="btn btn-warning register-button">Logout
                </button>
                </a>
              </li>
              <?php } else { ?>
              <li class="nav-item">
                <a href="login.php">
                <button type="button" class="btn btn-outline-warning login-button">Login
                </button>
                </a>
              </li>
              <li class="nav-item">
                <a href="signup.php">
                <button type="button" class="btn btn-warning register-button">Register
                </button>
                </a>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
  </header>