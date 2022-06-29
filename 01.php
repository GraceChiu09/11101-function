<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 練習連線資料庫，前後台分離 -->
    <?php

    $servername = "localhost";
    $username = "member";
    $password = "123456";
    $dbname = "member";//資料庫

    // 建立連線
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // 測試連線是否成功

    if (!$conn) {
        die('連線失敗' . mysqli_connect_error());
    }
    echo "連線成功";

    // 選取要撈取的資料，*代表全部
    $sql = 'SELECT * FROM usermemebr';

    // 用PHP result的語法
    $result = mysqli_query($conn, $sql);

    // 判斷資料表有沒有內容，如果是空的就不執行查詢
    // if (mysqli_num_rows($result) > 0) {
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo "<br>";
    //         echo $row['id'] . "<br>";
    //         echo $row['name'] . "<br>";
    //         echo $row['註冊時間'] . "<br>";
    //         echo $row['email'] . "<br>";
    //     }
    // }else{
    //     echo "沒有資料內容";
    
    // }

    // 每次連線都要關閉，不然伺服器負載會過大
    mysqli_close($conn);

    // 新增加一個PHP陣列，用來轉成Json格式
    $myarray = array();

    // 判斷資料表有沒有內容，如果是空的就不要查詢
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            // echo $row[]
             $myarray[] = $row;
        }
        echo json_encode($myarray);
    }else{
       echo '沒有資料內容';
    }
    ?>
</body>
</html>