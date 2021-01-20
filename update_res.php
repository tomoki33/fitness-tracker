<?php 
include 'res_action.php';
$id =  $_GET['id']

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateres</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
</head>
<body>
<?php include "mainMenu.php"; ?>
  
  <div class="container mt-5">
      <div class="card w-50 mx-auto">
          <div class="card-header">
              <p class="lead">
                  UPDATE RESERVATION
              </p>
          </div>
          <div class="card-body">
              <form action="res_action.php?id=<?php //echo $id ?>" method="post">
              <input type="hidden" name="id" value="<?php echo $id ?>">    
                  <input type="text" name="trainerName"  placeholder="TRAINER NAME"class="form-control mt-3">
                  <br>
                  <input type="date" name="date" class="form-control mt-3">
                  <br>
                  <input type="time" name="time" placeholder="TIME"class="form-control mt-3">
                  <br>
                  <button type="submit" name="update_res"class="btn btn-outline-info btn-block">UPDATE RESERVATION</button>
              </form>
          </div>
      </div>
  </div>
</body>
</html>