<?php
    if(isset($_POST['submit']))
    {
        $name     = $_POST['name'];
        $style    = $_POST['style'];
        $email    = $_POST['email'];
        $message  = $_POST['message'];
        $no_wa    = $_POST['noWa'];
        header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0DStyle:%20$style%20%0DEmail:%20$email%20%0DDeskripsi:%20$message");
    }
