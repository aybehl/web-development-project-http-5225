<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'schoolDB');

    if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
    }