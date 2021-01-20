<?php


include 'classes/res.php';
$resObj = new Res;



if(isset($_POST['save_res'])){
    $trainerName = $_POST['trainerName'];
    $date =$_POST['date'];
    $time =$_POST['time'];

    $resObj->addRes($trainerName,$date,$time);


}elseif(isset($_POST['update_res'])){
    $id =$_POST['id'];
    $trainerName = $_POST['trainerName'];
    $date =$_POST['date'];
    $time =$_POST['time'];

    $resObj->updateRes($id,$trainerName,$date,$time);


}elseif(isset($_POST['delete_res'])){
    $trainerName = $_POST['trainerName'];
    $date =$_POST['date'];
    $time =$_POST['time'];

    $resObj->deleteRes($trainerName,$date,$time);


}elseif(isset($_POST['display_res'])){
    $trainerName = $_POST['trainerName'];
    $date =$_POST['date'];
    $time =$_POST['time'];

    $resObj->displayRes($trainerName,$date,$time);

}
?>