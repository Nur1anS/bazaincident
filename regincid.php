<?php
session_start();



require "con.php";
?>
 <html>

<style>
   body {
    background: #c7b39b url(img/ib.jpeg); /* Цвет фона и путь к файлу */
    color: #fff; /* Цвет текста */
   }
  </style>

 <body>
 <link rel="stylesheet" href="css/main.css" href="">
<form action="create.php" method="post" enctype="multipart/form-data">
  
<span><a href="logout.php" class="logout">Выход</a></span>
<br>
<br>
  <h1>Время когда произошел инцидент</h1>

  <input type="datetime-local" name="dataproiz">

<h1>Краткое Описание инцидента</h1>

  <textarea name="description"></textarea> 
  
<h1>Ответственный сотрудник за инцидент</h1>
<input type="text" name="otvets"></br>

 <h1>Время когда устранили инцидент</h1>

  <input type="datetime-local" name="dataustr">

<h1>Прикрепить файл,если имеется </h1>
<input type="file" name="doc"></br></br>


</br>

<button type="submit" name="do_signup" value="Upload"> Внести в базу</button>

<h1><a href="basa.php" class="logout" color: #fff>Все инциденты</a></h1>
</body>

</form>
 


       

 
   
   
 </head>
 </br></br>
 </body>
</html>