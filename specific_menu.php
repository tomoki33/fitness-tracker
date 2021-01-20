<?php
include 'classes/menu.php';
$menu =new Menu();
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
    <div class="container mt-5">
        <div class="card w-75 mx-auto text-center">
            <div class="card-header">
                SELECT MENU
                <form action="" method ="post">
                    <select name="id">
                        <?php
                        foreach($results as $row){
                            $id = $row['id'];
                            echo "<option value ='$id'>".$row['training_name']."</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" name="search" value="Search">
                </form>
            </div>
            <div class="card-body">
                <?php
                    if(isset($_POST['search'])){
                        // $menu = $_POST['menu'];
                        $id = $_POST['id'];

                        echo $id;
                        
                       $specificMenu = $menu->searchSpecificMenu($id);


                        echo "ID:" .$specificMenu['id']."<br>";
                        echo "TRAINING DATE:" .$specificMenu['training_date']."<br>";
                        echo "TRAINING NAME:" .$specificMenu['training_name']."<br>";
                        echo "SETS:" .$specificMenu['training_sets']."<br>";
                        echo "REPS:" .$specificMenu['training_reps']."<br>";

                        unset($_SESSION['menu']);

                        echo"<a href='update_menu.php?id=$id'>
                            <p class ='btn-success mt-3'>Update</p>
                            </a>";
                            echo "<a href ='deletemenu.php?id=$id'>
                            <p class ='btn-danger mt-1'>Delete</p>
                            </a>";
                    }else{
                        echo"<p class ='text-danger'>Choose a training from the list.</p>";
                    }


               
                ?>
            </div>
        </div>
    </div>
</body>
</html>

