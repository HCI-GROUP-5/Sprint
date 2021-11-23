<!DOCTYPE html>
<html>

<head>
    <title>Bikinlagi ID | Register</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="logo/logo.png">
</head>

<body>
    <img class="wave" src="img/wavy.png">
    <div class="container">
        <div class="img">
            <img src="img/bg2.png">
        </div>
        <div class="login-content">
            <form action="includes/signup.inc.php" method="post">
                <img src="logo/brand.png" class="brand img-fluid" >
                <h2 class="title">Join US</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas"></i>
                    </div>
                    <div class="div">
                        <h5>Full Name</h5>
                        <input type="text" name="name" class="input">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" name="email" class="input">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="uid" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="pwd" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Enter password again</h5>
                        <input type="password" name="pwdrepeat" class="input">
                    </div>
                </div>
                <a href="login.php">Already have an account? Login here</a>
                <input type="submit" name="submit" class="btn" value="Sign Up">
            </form>
        </div>
        <?php

        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Isi Semua Form</p>";
            } else if ($_GET["error"] == "notmatchingpassword") {
                echo "<p>Password tidak sama</p>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username Telah Diambil</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>User Signed Up</p>";
            }
        }
        ?>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
