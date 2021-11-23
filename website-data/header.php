<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bikin Lagi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="source/logo.png" alt="logo" width="60" height="60">
          Bikinlagi.ID
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex search">
          <input class="" type="search" placeholder="Search" aria-label="Search">
          <button type="submit">
            <img src="source/search.png" alt="search">
          </button>
        </form>
        <div class="collapse navbar-collapse fw-normal fs-5 text-center" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
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
            <li class="nav-item">
              <a class="nav-link active" href="logout.php">Logout</a>
            </li>
            <?php } else { ?>
             <li class="nav-item">
              <a class="nav-link active" href="signup.php">Sign Up
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.php">Log In
              </a>
            </li>
            <?php } ?>
            
          </ul>
        </div>
      </div>
    </nav>
  </header>