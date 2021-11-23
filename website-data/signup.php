<?php
include_once "header.php";
?>

<section class="signup-form">
  <h2>Sign Up</h2>
  <div class="signup">
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="name" placeholder="Full Name">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="uid" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwdrepeat" placeholder=" RepeatPassword">
      <button type="submit" name="submit">Sign Up</button>
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
</section>




<?php
include_once "footer.php";
?>