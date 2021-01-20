<?php 
include 'classes/menu.php';
$menuID = $_GET['id'];
$menu = new Menu;

$menu->deleteMenu($menuID);

?>