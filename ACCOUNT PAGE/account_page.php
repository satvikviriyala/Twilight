<?php
    session_start();
    if(!isset($_SESSION['loggedin'])) {
        header('location: ../index.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="account_page.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;0,900;1,200;1,700&display=swap" rel="stylesheet">
    <title>Account</title>
</head>
<body>
    <p class="welcome">Welcome,</p><p class="name"><?php echo $_SESSION['username'] ?></p>

    <!-- Pic, name, address, subscription status, most played song -->
    <div class="container">
        <img src="" alt="">
        <h3>Name: <span class="username"><?php echo $_SESSION['username'] ?></span> </h3>
        <h3>Address: <span class="address"><?php echo $_SESSION['Email'] ?></span> </h3>
        <h3>Subscription: <span class="subscription">ACTIVE </span> </h3>
        <!--<h3>Most Played Song: <span class="mostplydsong"> SNAP by Rosa Linn</span> </h3>-->
    </div>
    
</body>
</html>

