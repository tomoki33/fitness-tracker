 <?php 
 include 'res_action.php';
 $result = $resObj->displayRes();
 
 
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "mainMenu.php"; ?>
        <main class="py-5">
            <div class="container">
                <h2 class="h3 text-muted">Reservation List</h2>

                <table class="table table-hover">
                    <thead class="thead-light ">
                        <tr>
                            <th>#</th>
                            <th>TRAINER NAME</th>
                            <th>DATE</th>
                            <th>TIME</th>
                        </tr>
                    </thead>
            <tbody>
            <?php
                 foreach($result as $row){
                     $id =$row['id'];
                    echo"<tr>";
                        echo"<td>" .$row['id']."</td>";
                        echo"<td>" .$row['trainer_name']."</td>";
                        echo"<td>" .$row['date']."</td>";
                        echo"<td>" .$row['time']."</td>";
                        echo"<td>";
                            echo "<a href = 'update_res.php?id=$id'class='btn btn-outline-secondary btn-sm mr-2'>UPADATE RESERVATION</a>";
                            echo "<a href = 'deleteres.php?id=$id'class='btn btn-outline-secondary btn-sm'>DELETE RESERVATION</a>";

                        echo"</td>";
                    echo"</tr>";
                 } 
                ?>  
            </tbody>
        </table>
    </div>
</body>
</html>