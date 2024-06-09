<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Connection</title>
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', 'root', 'php-week5');
        if(!$connect){
            echo "Erro code: " . mysqli_connect_errorno();
            echo "Erro Message: " . mysqli_connect_error();
            exit;
        } 
        
        $query = "SELECT `Name`, `Hex` FROM colors";
        //$query = "SELECT 'Name', 'Hex' FROM colors"; //INCORRECT SQL STATEMENT
        $results = mysqli_query($connect, $query);
        echo $results;
        if(mysqli_num_rows($results) > 0){
            echo "Total records found:" . mysqli_num_rows(($results));
            echo "<br>";
            foreach($results as $color){
                echo $color['Name'];
                echo '
                <div style="height: 30px; width: 100px; background-color:' . $color['Hex'] . '"></div>
                ';
            }
        } else {
            echo "Error Message: - ". mysqli_error($connect);
        }
    
    ?>
</body>
</html>