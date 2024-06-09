<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>User Information</h2>
        </div>
        <div class="row">
            <?php
            function getUsers() {
                $url = "https://jsonplaceholder.typicode.com/users";
                //$url = 'users.json';
                $data = file_get_contents($url);
                //echo $data;
                return json_decode($data, true);
            }
            $users = getUsers();

            if(!empty($users)){
                for($i = 0; $i < count($users); $i++){
                    echo '
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">' . $users[$i]['name']. '</h5>
                                    <p class="card-text">' . $users[$i]['email']. '</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    ';
                }
            } else {
                echo 'Users not found';
            }
        ?>
        </div>
    </div>
    
</body>
</html>