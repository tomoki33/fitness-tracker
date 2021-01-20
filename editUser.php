<?php
include 'classes/user.php';
$user = new User();

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
<title>Sign Up</title>
</head>
<body>

    <div style="height:100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 mx-auto my-auto">
                <div class="card-header text-success">
                    <h1 class="card-title h3 mb-0">Sign Up</h1>
                </div>
                <div class="card-body">
                    <form action="user-action.php" method ="post">

                        <label for="firstName" class="small">First name</label>
                        <input type="text" name="firstName" id="firstName" class="form-control mb-2" required autofocus> 

                        <label for="lastName" class="small">Last name</label>
                        <input type="text" name="lastName" id="lastName" class="form-control mb-2" required> 


                        <label for="username" class="small font-weight-bold">Username</label>
                        <input type="text" name="username" id="username" class="form-control mb-2 font-weight-bold" maxlength="15" required> 


                        <label for="passw" class="small">Password</label>
                        <input type="password" name="passw" id="passw" class="form-control mb-2"  required> 


                        <label for="confirmPassw" class="small">Confirm Password</label>
                        <input type="password" name="confirmPassw" id="confirmPassw" class="form-control mb-5"  required> 


                        <a href="login.php" class="large">Log in</a>
                        <br>
                        <a href="Powerindex.php" class="large">Back to Home</a>

                        <button type="submit" name="btnSignUp" class="btn btn-success btn-sn float-right">Sign Me Up!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>