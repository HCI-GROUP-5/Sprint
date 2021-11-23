<?php
  include_once "header.php";
?>
<?php

$serverName ="localhost";
$dBUSername ="root";
$dBPassword ="";
$dBName     ="bikinlagi";

$conn = mysqli_connect($serverName, $dBUSername,$dBPassword,$dBName);

if(!$conn){
    die("connection failed :");

}

?>

<?php
error_reporting(0);




session_start();



if(isset($_POST['submit'])){
    $uid = $_POST['uid'];
    $password = ($_POST['pwd']);

    $sql = "SELECT * FROM `users` WHERE uid='$uid' AND pwd='$password'";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows> 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];
        header("Location: index.php");
    }
    else{
        echo"<script>alert('Email atau Password Salah.')</script>";
    }
}

?>

<div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800">Login</p>
            <div class="input-group">
                <input type="text" name="uid" placeholder="Username" value="<?php echo $uid; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" name="pwd" placeholder="Password" value="<?php echo $_POST['pwd']; ?>"required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Tidak Memiliki Akun? <a href="register.php">Daftar</a></p>
        </form>
    </div>

  <?php
  include_once "footer.php";
?>