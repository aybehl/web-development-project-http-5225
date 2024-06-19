<?php 
    include('functions.php');

    //print_r($_POST);
    //Array ( [schoolName] => sjdnfj [schoolType] => dns [phone] => jsdnvj [email] => ayushi.behl94@gmail.com )
    if(isset($_POST['updateSchool'])) {
        $schoolId = $_POST['id'];
        $schoolName = $_POST['schoolName'];
        $schoolType = $_POST['schoolType'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
    
        include('../reusable/connection.php');
        $query = "UPDATE Schools
            SET `School Name` = '" . mysqli_real_escape_string($connect, $schoolName). "',
                `School Type` = '" . mysqli_real_escape_string($connect, $schoolType). "',
                `Phone` = '" . mysqli_real_escape_string($connect, $phone). "',
                `Email` = '" . mysqli_real_escape_string($connect, $email). "'
            WHERE `id` = $schoolId
            ";
    
        $school = mysqli_query($connect, $query);
    
        if($school){
            set_message('School was updated successfully', 'success');
            header("Location: ../index.php"); //window.location.href
        } else {
            echo "Failed " . mysqli_error($connect);
        }
    } else {
        echo "You are not allowed";
    }



   
   