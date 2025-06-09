<?php

    error_reporting(0); # 關閉錯誤訊息顯示
    session_start(); # 啟用 session 功能

    if (!$_SESSION["id"]) { # 如果沒有登入（session 中沒有 id）
        echo "請登入帳號"; # 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; # 3 秒後跳回登入頁面
    }
    else {   
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); # 建立資料庫連線

        # 執行更新 bulletin 表格的 SQL 語句
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")) {
            echo "修改錯誤"; # 更新失敗，顯示錯誤訊息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; # 3 秒後回到佈告欄列表
        } else {
            echo "修改成功，三秒鐘後回到佈告欄列表"; # 更新成功提示
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; # 3 秒後回到佈告欄列表
        }
    }

?>
