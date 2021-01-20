<?php 
include 'user-action.php';
$loginID = $_SESSION['login_id'];
$currentUser = $userObj->getLoggedInUser($loginID);

//print_r($currentUser);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    
    <title>Document</title>
</head>
<body>
<?php include "mainMenu.php"; ?>

Hello: <?php echo $currentUser['first_name'].' '.$currentUser['last_name'] ?>
    <form action="user-action.php" method="post">
    POST SOMETHING!
    <br>
    <input type="text" name="user_post" id="">
    <br>
    <button type="submit" name="post">POST!</button>
    </form>



    <br>
    OTHER USER'S POST!

    <?php 
        $userObj->getAllPost();
    ?>
</body>
</html>