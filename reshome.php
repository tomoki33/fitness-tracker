<?php
include 'classes/res.php';
$res = new Res();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
</head>
<body>
<?php include "mainMenu.php"; ?>
    
<div style="height:100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 mx-auto my-auto">
                <div class="card-header text-danger">
                    <h1 class="card-title h3 mb-0">RESERVATION FORM</h1>
                </div>
                <div class="card-body">
                    <form action="res_action.php" method ="post">

                        <label for="trainerName" class="small">Trainer Name</label>
                        <input type="text" name="trainerName" id="trainerName" class="form-control mb-2" required autofocus> 

                        <label for="date" class="small">Date</label>
                        <input type="date" name="date" id="date" class="form-control mb-2" required> 


                        <label for="time" class="small font-weight-bold">Time</label>
                        <input type="time" name="time" id="time" class="form-control mb-2 font-weight-bold" maxlength="15" required> 

                        <a href="res-list.php" class="small">CHECK LIST</a>

                        <button type="submit" name="save_res" class="btn btn-danger btn-sn float-right">Reserve</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>