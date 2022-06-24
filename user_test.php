<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color: red;}
    </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $genderErr = $numberErr = "";
    $name = $email = $gender = $comment = $number = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) {
            $nameErr = "此為必填欄位";
        }else{
            $name = test_input($_POST["name"]); 
        }
        if (!preg_match("/^['a-zA-Z-']*$/", $name)) {
            $nameErr = "輸入無效字元";
        }
    }

        if (empty($_POST["email"])) {
            $emailErr = "此為必填欄位";
        }else{
            $email = test_input($_POST["email"]);

        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $emailErr = "無效電子郵件";
        }
        
    

        if (empty($_POST["number"])) {
            $numberErr = "此為必填欄位";
        }else{
            $number = test_input($_POST["number"]);

        }

        if (empty($_POST["gender"])) {
            $genderErr = "此為必填欄位";
        }else{
            $gender = test_input($_POST["gender"]);
        }
        if (empty($_POST["comment"])) {
            $comment = "";
        }else{
            $comment = test_input($_POST["comment"]);
        }
        
       

    
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>會員註冊資訊</h2>
    <p><span class="error">*請留意紅字為必填欄位</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
     中文姓名 Name: <input type="text" name="name">
     <span class="error">*<?php echo $nameErr?></span>
     <br><br>
     電子郵件 Email: <input type="text" name="email">
     <span class="error">* <?php echo $emailErr?></span>
     <br><br>
     聯繫資訊 Phone number: <input type="text" name="number">
     <span class="error">* <?php echo $numberErr?></span>
     <br><br>
     其他說明事項 Comment: <textarea name="comment" cols="40" rows="5"></textarea>
     <br><br>
     性別 Gender:
     <input type="radio" name="gender" value="female">女性 Female
     <input type="radio" name="gender" value="male"> 男性 male
     <input type="radio" name="gender" value="other"> 其他 other
     <span class="error">* <?php echo $genderErr?></span>
     <br><br>
     <input type="submit" name="Submit" value=" 提交 Submit">

</form>

     <?php
     echo "<h2>感謝您的填寫</h2>";
     echo $name;
     echo "<br>";
     echo $email;
     echo "<br>";
     echo $number;
     echo "<br>";
     echo $comment;
     echo "<br>";
     echo $gender;


     ?>
</body>
</html>