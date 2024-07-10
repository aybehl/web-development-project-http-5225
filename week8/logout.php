<?php
    include('inc/functions.php');

    session_destroy();//to delete all the variables in your session
    header('Location: login.php');