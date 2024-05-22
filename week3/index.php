<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>
    <?php 
        // $hour = date('H');
        // echo $hour;

        // if($hour < 12){
        //     echo 'Good Morning';
        // } else {
        //     echo 'Good Afternoon';
        // }

        // $day = date('D');
        // echo $day;
            
        //Based on the hour, output greetings
        // $hour = rand(1, 24);
        // echo $hour;
        // //echo '( ' . $hour . ' )';
        // echo '<br>';

        // if($hour >= 0 && $hour <= 12){
        //     echo "Good Morning";
        // } else if($hour > 12 && $hour <= 15){
        //     echo "Good Afternoon";
        // } else if($hour > 15 && $hour <= 18){
        //     echo "Good evening";
        // } else if($hour > 18 && $hour <= 24){
        //     echo "Good night";
        // }

        //The Magic Number Game
        $magicNum = rand(1, 1000);
        echo $magicNum;

        if($magicNum % 3 == 0 && $magicNum % 5 == 0){
            echo 'FizzBuzz';
        } else if($magicNum % 3 == 0){
            echo 'Fizz';
        } else if($magicNum % 5 == 0){
            echo 'Buzz';
        }
    ?>
</body>
</html>