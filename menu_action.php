<?php

    include 'classes/menu.php';
    $menuObj = new Menu;


    if(isset($_POST['save_menu'])){
        $training_date = $_POST['training_date'];
        $trainingName =$_POST['training_name'];
        $Sets =$_POST['sets'];
        $Reps =$_POST['reps'];

        $menuObj->addMenu($training_date,$trainingName,$Sets,$Reps);


    }elseif(isset($_POST['update_menu'])){
        $id =$_POST['id'];
        $trainingName =$_POST['training_name'];
        $training_date = $_POST['training_date'];
        $Sets =$_POST['sets'];
        $Reps =$_POST['reps'];

        $menuObj->updateMenu($id,$trainingName,$training_date,$Sets,$Reps);
    

    }elseif(isset($_POST['delete_menu'])){
        $id =$_POST['id'];
        $trainingName =$_POST['training_name'];
        $training_date = $_POST['training_date'];
        $Sets =$_POST['sets'];
        $Reps =$_POST['reps'];

        $menuObj->deleteMenu($id,$trainingName,$training_date,$Sets,$Reps);
    

    }elseif(isset($_POST['display_menu'])){
        $trainingName =$_POST['training_name'];
        $Sets =$_POST['sets'];
        $Reps =$_POST['reps'];

        $menuObj->displayMenu($trainingName,$Sets,$Reps);
    
    }
?>