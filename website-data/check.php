<?php
session_start();

if( !isset($_SESSION['name']) ){
    die( "Login required." );
}
else{
    echo "WElcome";
}

    ?>