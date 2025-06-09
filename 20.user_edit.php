<?php

    error_reporting(0); # 關閉錯誤回報，避免顯示警告訊息
    session_start(); # 啟用 session 機制，讓程式可以存取登入狀態

    if (!$_SESSION["id"]) { # 如果 session 中沒有登入者的 id，表示未登入
        echo "請登入帳號"; # 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; # 3 秒後跳轉回登入頁面
    }
    else {   
        # 建立與資料庫的連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); # 連接遠端資料庫

        # 執行 SQL 指令：根據傳入的 id 修改對應的密碼
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")) {
            echo "修改錯誤"; # 顯示錯誤訊息
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; # 3 秒後跳轉回使用者管理頁面
        } else {
            echo "修改成功，三秒鐘後回到網頁"; # 顯示成功訊息
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; # 3 秒後跳轉回使用者管理頁面
        }
    }

?>
