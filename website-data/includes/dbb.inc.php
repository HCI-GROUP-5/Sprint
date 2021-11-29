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