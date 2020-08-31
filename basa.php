<?php
session_start();

if (!$_SESSION['user']) {
    header("Location: /");
}
require "con.php";
?>



<!DOCTYPE html>
<html class="basa">
 <head>
   <link rel="stylesheet" href="css/main.css" href="">

<form>
      <input class="place_for_search" type="text" id="text-to-find" value="" placeholder="Search" autofocus> 
      <input class="button_for_turn_back" type="button" onclick="javascript: FindOnPage('text-to-find',false); return false;" value="   " title="Отменить поиск">
      <input class="button_for_search" type="submit" onclick="javascript: FindOnPage('text-to-find',true); return false;" value="Начать поиск" title="Начать поиск">
      <a href="logout.php" class="logout">Выход</a>
<span><a href="regincid.php" class="logout">Зарегистрировать инцидент</a></span>

</form>
  <body class="basa" >
  <meta charset="utf-8" />
  <title>База данных</title></br>
  <link rel="stylesheet" href="css/main.css" href="">
 
   <title>BAZA</title>
<style>
*{
 
left: 100;
bottom: 100;

}
th, td {

padding: 10px;

}
th {
  background: #606060;
  text-align: left;
}

td{


  background: #b5b5b5b;
}






</style>





   <table>

<tr>
  
        <th>ID</th>

        <th>Время инцидента</th>

        <th>Краткое описание</th>


        <th>Ответственный за инцидент</th>


        <th>Время устранения инцидента</th>

        <th>Файл</th>
        <th>Обновить Статус</th>
</tr>

 
<?php


$incid = mysqli_query($connect, "SELECT * FROM `incid` ORDER BY id DESC");
$incid = mysqli_fetch_all($incid);
foreach ($incid as   $incid) {
        ?>

        <tr>
                <td><?= $incid[0] ?></td>
                <td><?= $incid[1] ?></td>
                <td><?= $incid[2] ?></td>
                <td><?= $incid[3] ?></td>
                <td><?= $incid[4] ?></td>
                <td><a href="<?= $incid[5] ?>" download="">Скачать</td>
                <td><a href="update.php?id=<?= $incid[0] ?>">update</td>
</tr>
<?php

}

 
?>

   </table>



<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/js.js"></script>

</body>
</br>
</br>


 
