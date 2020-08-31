
<?php
session_start();



require "con.php";
?>


<!DOCTYPE html>
<html>
 <head>
  <body>
   
  <meta charset="utf-8" />
  <title>RJNFR</title>
 


  

   <form action="signup.php" method="post" enctype="multipart/form-data">

   <label>Введите Свое полное имя</label>
   <input type="text" name="full_name" placeholder="Введите свое полное имя"></br></br>

   <label>Введите  Логин</label>
   <input type="text" name="login"  placeholder="Введите свой логин"></br></br>



   <label>Введите Свое email</label>
   <input type="email" name="email"  placeholder="Введите  email"></br></br>


   <label>Изображение профиля </label>
   <input type="file" name="avatar"></br></br>
  

   <label>Password</label>
   <input type="password"   name="password" placeholder="Введите пароль" ></br></br>
    

   <label>Password2</label>
   <input type="password"  name=password_confirm  placeholder=" Подтвердите  пароль" >

   <button type="submit" name="do_signup" value="Upload">Зарегистрироватся</button>

     <p>  <a href="/"> Авторизация</a> </p></br>

<div class="msg none"> ffff </div>

</form>

<script src="js/jquery-3.4.1.min.js"></script>
    

</body>
 </head>
 
</html>

 
