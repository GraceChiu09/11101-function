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
    $target_dir = "uploads/backgrounds.jpg";
    $target_file = $target_dir . basename($_FILES["D:\web 8.1.6\calendar_v01"]["name"]);
    $uploadOk = 1;
    $imageFileType = 
    strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }else{
         echo "File is not an image.";
         $uploadOk = 0;
    }
    }
    ?>
</body>
</html>