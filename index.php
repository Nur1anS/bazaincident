<?php
session_start();
if ($_SESSION['user']) {
    header("Location: basa.php");
}
require "con.php";
?>

<!DOCTYPE html>
<html>
 <head>
           

  <meta charset="utf-8" />
  <title>Авторизация и регистрция</title>
  <link rel="stylesheet" href="css/main.css" href="">
   <form >
   <label>Login</label>
   <input type="text"  name="login"  placeholder="Введите логин">
   <label>Password</label>
   <input type="password" name="password" placeholder="Введите пароль" >
   <button type="submit" class="login-btn">ENTER</button>
  

</form>
<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
  
   
 </head>
 

 



 
</html>

 
