<?php
include 'classes/user.php';
    $user = new User();
    $userlist = $user->displayUser();

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
    <title>Users</title>
</head>
<body>
    <?php include "mainMenu.php"; ?>
        <main class="py-5">
            <div class="container">
                <h2 class="h3 text-muted">User list</h2>

                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>USERNAME</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                       <?php
                        foreach($userlist as $row){
                       ?>
                       <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['first_name']?></td>
                            <td><?=$row['last_name']?></td>
                            <td><?=$row['username']?></td>
                            <td>
                          <a href="editUser.php?id=<?= $row['id']?>" class="btn btn-outline-secondary btn-sm">Edit</a>
                          <a href="removeUser.php?id=<?= $row['id']?>"class="btn btn-outline-danger btn-sm">Remove</a>
                            </td>
                       </tr>
                       <?php
                         }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>