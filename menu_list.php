<?php
include 'classes/menu.php';
    $menu = new Menu();

    $results = $menu->displayMenu();
?>


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
        <main class="py-5">
            <div class="container">
                <h2 class="h3 text-muted">Training List</h2>

                <table class="table table-hover">
                    <thead class="thead-light ">
                        <tr>
                            <th>#</th>
                            <th>TRAINING DATE</th>
                            <th>TRAINING NAME</th>
                            <th>SETS</th>
                            <th>REPS</th>

                        </tr>
                    </thead>
            <tbody>
            <?php
                 foreach($results as $row){
                     $id =$row['id'];
                    echo"<tr>";
                        echo"<td>" .$row['id']."</td>";
                        echo"<td>" .$row['training_date']."</td>";
                        echo"<td>" .$row['training_name']."</td>";
                        echo"<td>" .$row['training_sets']."</td>";
                        echo"<td>" .$row['training_reps']."</td>";
                        echo"<td>";
                            echo "<a href = 'update_menu.php?id=$id'class='btn btn-outline-secondary btn-sm mr-2'>UPADATE MENU</a>";
                            echo "<a href = 'deletemenu.php?id=$id'class='btn btn-outline-secondary btn-sm'>DELETE MENU</a>";

                        echo"</td>";
                    echo"</tr>";
                 } 
                ?>  
            </tbody>
        </table>
    </div>
</body>
</html>