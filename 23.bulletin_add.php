<?php
    error_reporting(0); # 關閉錯誤訊息顯示
    session_start(); # 啟用 session 功能，用於登入狀態驗證

    if (!$_SESSION["id"]) { # 如果 session 中沒有 id，表示尚未登入
        echo "please login first"; # 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; # 3 秒後跳轉回登入頁面
    }
    else {
        # 已登入，開始處理新增佈告
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); # 建立資料庫連線

        # 建立新增佈告的 SQL 指令
        $sql = "insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')"; # 將表單資料插入 bulletin 資料表

        if (!mysqli_query($conn, $sql)) { # 執行 SQL 指令，如果失敗
            echo "新增命令錯誤"; # 顯示錯誤訊息
        }
        else {
            echo "新增佈告成功，三秒鐘後回到網頁"; # 顯示成功訊息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; # 3 秒後跳轉回佈告列表頁面
        }
    }
?>
