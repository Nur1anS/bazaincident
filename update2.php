<?php

//session_start();

//if (!$_SESSION['user']) {
    ///("Location: /");
require "con.php";


$id = $_POST['id'];

$dataustr = $_POST['dataustr'];
$description = $_POST['description'];
//$price = $_POST['price'];

mysqli_query($connect, "UPDATE `incid` SET `dataustr` = '$dataustr',  `description` = '$description' WHERE `incid`.`id` = '$id'");

header("Location:basa.php");
?>