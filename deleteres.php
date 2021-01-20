<?php 
include 'classes/res.php';
$resID = $_GET['id'];
$res = new Res;

$res->deleteRes($resID);

?>