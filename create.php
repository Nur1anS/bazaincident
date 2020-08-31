

<?php
session_start();
error_reporting(E_ALL);
if (!$_SESSION['user']) {
    header("Location: /");
}
require_once "con.php";

$dataproiz = $_POST['dataproiz'];
$description = $_POST['description'];
$otvets = $_POST['otvets'];
$dataustr	= $_POST['dataustr'];	

$path = 'uploads/' . time() . $_FILES['doc']['name'];
move_uploaded_file($_FILES['doc']['tmp_name'],$path);

mysqli_query($connect,"INSERT INTO `incid` (`id`, `dataproiz`, `description`,`otvets`,`dataustr`,`file`) VALUES (NULL, '$dataproiz', '$description', '$otvets', '$dataustr','$path')");

header("Location:basa.php");


 
?>
 