<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>
    <?php echo ("Hello"); ?>
    <?php echo '<h1>Welcome to HTTP 5225</h1>' ?>
    <?php echo '<p>We will learn PHP in this class</p>' ?>

    <!-- <h1>Welcome to HTTP 5225</h1>
    <p>We will learn PHP in this class</p>
    <p>We will learn the following</p> -->

    <?php echo '<ul>
        <li>PHP</li>
        <li>SQL</li>
        <li>Laravel</li>
    </ul>'; ?>

    <?php
        $fname = 'ayushi';
        $lname = 'behl';
        $names['firstName'] = 'Alka';
        $names['lastName'] = 'Behl';
    ?>

    <?php 
        echo 'Hello ' . $fname . ' ' . $lname;
        echo 'Hello ' . $names['firstName'] . ' ' . $names['lastName'];
    ?>
    
</body>
</html>