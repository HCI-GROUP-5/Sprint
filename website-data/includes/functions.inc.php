<?php

function emptyInputSignup($name,$email,$username,$pwd,$pwdrepeat){
    $result;
    if (empty($name) || empty($email) || empty($username) ||empty($pwd) || empty($pwdrepeat)) {
        $result = true;
    }
    else{
        $result=false;
    }
    return $result;
}

function pwdmatch($pwd,$pwdrepeat){
    $result;
    if ($pwd !== $pwdrepeat) {
        $result = true;
    }
    else{
        $result=false;
    }
    return $result;
}

function uidExists($conn,$username, $email){
    $sql = "SELECT * FROM users WHERE uid = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row  = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn,$name,$email, $uid, $pwd){
    $sql = "INSERT INTO `users`( `name`, `email`, `uid`, `pwd`) VALUES ('$name','$email','$uid','$pwd')";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss",$name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else{
        $result=false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn,$username, $username);

    if ($uidExists == false) {
        header("location : ../login.php=wronglogin");
        exit();
    }

    $pwd = $uidExists["pwd"];
    $checkPwd = password_verify($pwd, $pwd);

    if ($checkPwd == false) {
        header("location : ../login.php=wronglogin");
        exit();
    }
    elseif ($checkPwd == true) {
        session_start();
        $_SESSION["id"] = $uidExists["id"];
        $_SESSION["uid"] = $uidExists["uid"];
        header("location : ../index.php");
        exit();

    }
}