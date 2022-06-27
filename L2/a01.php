<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is a test</h1>
    <!-- action method type -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <!-- type name id value -->
        <input type="file" name="fileload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>