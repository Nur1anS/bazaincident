<?php

session_start();

if (!$_SESSION['user']) {
    header("Location: /");
}
require "con.php";

$incid_id = $_GET['id'];
$incid = mysqli_query($connect, "SELECT * FROM `incid` where `id` = '$incid_id'");
$incid = mysqli_fetch_assoc($incid);
//print_r($crud);


?>



<!DOCTYPE html>
<html class="basa">
 <head>
<style>
   body {
    background: #c7b39b url(img/ib2.jpeg); /* Цвет фона и путь к файлу */
    color: #00ff00 /*wвет текста */
   }
  </style>


  <body class="basa" >
  <meta charset="utf-8" />
  <title>База данных Обновление</title></br>
  <link rel="stylesheet" href="css/main.css" href="">
 

   <title>Update PRODUCT</title>
<form action="update2.php" method="post">


<input type="hidden" name="id" value="<?= $incid['id'] ?>">
   <h1>Время когда устранили инцидент</h1>

  <input type="datetime-local" name="dataustr" value="<?= $incid['dataustr'] ?>">
<h1>Краткое описание инцидента</h1>

  <textarea name="description"><?=$incid['description']?></textarea> </br></br>
  
 
<button type="submit"> Обновить информацию</button>




</form>
 </head>
 </br></br>
 </body>
</html>

 
