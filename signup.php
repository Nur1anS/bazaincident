 





<?php

  //print_r($_FILES);
session_start();
$message = ''; 
error_reporting(E_ALL);
require_once 'con.php';


$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
 

$path = 'uploads/' . time() . $_FILES['avatar']['name'];
move_uploaded_file($_FILES['avatar']['tmp_name'],$path);


$password=md5($password);

mysqli_query($connect,"INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', $path')");

//header('Location : index.php');

  
 <pre>

<?php
print_r($_FILES);
?>
 </pre>



 ?>


 