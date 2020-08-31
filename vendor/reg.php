
<?php
session_start();


require "con.php";
?>


<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Авторизация и регистрция</title>
  <link rel="stylesheet" href="css/main.css" href="">


  

   <form action="signup.php" method="POST" enctype="multipart/form-data">

   <label>Введите Свое полное имя</label>
   <input type="text" name="full_name" placeholder="Введите свое полное имя">

   <label>Введите  Логин</label>
   <input type="text" name="login"  placeholder="Введите свой логин">



   <label>Введите Свое email</label>
   <input type="email" name="email"  placeholder="Введите  email">


   <label>Изображение профиля </label>
   <input type="file" name="avatar">
  

   <label>Password</label>
   <input type="password"   name="password" placeholder="Введите пароль" >
    

   <label>Password2</label>
   <input type="password"  name=password_confirm  placeholder=" Подтвердите  пароль" >

   <button type="submit" name="do_signup">Зарегистрироватся</button>

     <p>  <a href="/"> Авторизация</a> </p></br>

<div class="msg"> 
  <?= $_SESSION['message'] ?> 
  </div>

 </head>
 <body>
  
 </body>
</html>

 
