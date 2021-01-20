<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Powerphp.css">
</head>
<body>
<?php include "mainMenu.php"; ?>
 
    <div class="container mt-5">
        <div class="card w-50 mx-auto">
            <div class="card-header">
                <p class="lead">
                    CREATE MENU
                </p>
            </div>
            <div class="card-body">
                <form action="menu_action.php" method="post">
                    <input type="date" name="training_date" class="form-control mt-3">
                    <br>
                    <input type="text" name="training_name"  placeholder="TRAINING NAME"class="form-control mt-3">
                    <br>
                    <input type="text" name="sets"  placeholder="SETS"class="form-control mt-3">
                    <br>
                    <input type="text" name="reps"  placeholder="REPS"class="form-control mt-3">
                    <br>
                    <button type="submit" name="save_menu"class="btn btn-outline-info btn-block">SAVE</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>



