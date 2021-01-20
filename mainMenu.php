<?php
// include 'classes/user.php';
//

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Power</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
<!-- brand -->
    <h1 class="navbar-brand">Power</h1>
<!-- button -->
    <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
<!-- links -->
    <div class="collapse navbar-collapse" id="mainMenu">

<!-- leftlist -->
        <ul class="navbar-nav ;">
            <li class="nav-item">
                <a href="menuindex.php" class="nav-link">CreateMenu</a>
            </li>
            <li class="nav-item">
                <a href="specific_menu.php" class="nav-link">SearchMenu</a>
            </li>
            <li class="nav-item">
                <a href="menu_list.php" class="nav-link">TrackMenu</a>
            </li>
            <li class="nav-item">
                <a href="snshomepage.php" class="nav-link">SNS</a>
            </li>
            <li class="nav-item">
                <a href="reshome.php" class="nav-link">RESERVATION</a>
            </li>
        </ul>

<!-- right lists -->

        <ul class="navbar-nav ml-auto">
           
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Log out</a>
            </li>
        </ul>
    </div>
</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>