<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET YOUR ART</title>
    <link rel="icon" href="logo/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>

    <video autoplay muted loop id="myVideo" class="img-fluid">
        <source src="source/hexagon-bg.mp4" type="video/mp4">
    </video>
    <div class="ctnr">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>GET YOUR ART</h2>
                <form action="send.php" method="POST" target="_blank">
                <input type="text" name="name" class="field" placeholder="Name">

                <input type="text" name="style" class="field" placeholder="Style">
                <input type="email" name="email" class="field" placeholder="Email">
                <textarea placeholder="Desc Art" name="message" class="field"></textarea>
                <input type="hidden" name="noWa" value="6281387896469">
                <button type="submit" class="btn">Send</button>
            </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>