<?php

    $connect = mysqli_connect('localhost', 'admin', '123', 'test');

    if (!$connect) {
        die('Error connect to DataBase');
    }
    ?>