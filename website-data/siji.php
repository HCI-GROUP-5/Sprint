<!DOCTYPE html>
<html>

<head>
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="siji.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>

<body>
    <video autoplay muted loop id="myVideo" class="img-fluid">
        <source src="source/hexagon-bg.mp4" type="video/mp4">
    </video>
    <div class="container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>Contact Us</h2>
                <form action="send.php" method="post" target="_blank">
                <input type="text" name="name" class="field" placeholder="Name">
                <input type="text" name="style" class="field" placeholder="Style">
                <input type="email" name="email" class="field" placeholder="Email">
                <textarea placeholder="Desc Art" name="message" class="field"></textarea>
                <input type="hidden" name="noWa" value="6281387896469">
                <button type="submit" name="submit" class="btn">Send</button>
            </form>
            </div>
        </div>
    </div>
</body>

</html>