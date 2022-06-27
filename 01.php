<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // server name usert pw
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // $conn = new mysqli($servername, $username, $password);

    // if ($conn) {
    //     die("Connection failed:" . mysqli_connect_error());
    // }
    // echo "Connected successfully";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }


    ?>
</body>
</html>