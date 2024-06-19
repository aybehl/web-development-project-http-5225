<?php 
    include('functions.php');

    //print_r($_POST);
    //Array ( [schoolName] => sjdnfj [schoolType] => dns [phone] => jsdnvj [email] => ayushi.behl94@gmail.com )
    if(isset($_POST['addSchool'])) {
        $schoolName = $_POST['schoolName'];
        $schoolType = $_POST['schoolType'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
    
        include('../reusable/connection.php');
    
        $query = "INSERT INTO Schools 
            (`School Name`, `School Type`, `Phone`, `Email`) 
            VALUES (
            '" . mysqli_real_escape_string($connect, $schoolName). "',
            '" . mysqli_real_escape_string($connect, $schoolType) . "',
            '" . mysqli_real_escape_string($connect, $phone) . "',
            '" . mysqli_real_escape_string($connect, $email) . "')";
            // '$schoolName', '$schoolType', '$phone', '$email')";
    
        $school = mysqli_query($connect, $query);
    
        if($school){
            set_message('School was added successfully', 'success');
            header("Location: ../index.php"); //window.location.href
        } else {
            echo "Failed " . mysqli_error($connect);
        }
    } else {
        echo "You are not allowed";
    }



   
   