<!DOCTYPE html>
<html>

<head>
    <title>Bikinlagi ID | Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="logo/logo.png">
</head>

<body>
    <?php

    $serverName = "localhost";
    $dBUSername = "root";
    $dBPassword = "";
    $dBName     = "bikinlagi";

    $conn = mysqli_connect($serverName, $dBUSername, $dBPassword, $dBName);

    if (!$conn) {
        die("connection failed :");
    }

    ?>

    <?php
    error_reporting(0);




    session_start();



    if (isset($_POST['submit'])) {
        $uid = $_POST['uid'];
        $password = ($_POST['pwd']);

        $sql = "SELECT * FROM `users` WHERE uid='$uid' AND pwd='$password'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['name'] = $row['name'];
            header("Location: index.php");
        } else {
            echo "<script>alert('Email atau Password Salah.')</script>";
        }
    }

    ?>


    <img class="wave" src="img/wavy.png">
    <div class="container">
        <div class="img">
            <img src="img/bg.png">
        </div>
        <div class="login-content">
            <form action="" method="post">
                <img src="logo/brand.png" class="brand"><!--dah bisa-->
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="uid" class="input" value="<?php echo $uid; ?>" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="pwd" class="input" value="<?php echo $_POST['pwd']; ?>" required>
                    </div>
                </div>
                <a href="signup.php">Doesn't have account? Register here</a>
                <input type="submit" name="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>
