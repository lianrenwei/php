<?php
    error_reporting(0); # 關閉錯誤訊息顯示
    session_start(); # 啟用 session 功能，管理使用者登入狀態
    if (!$_SESSION["id"]) { # 若 session 中無登入 id，代表未登入
        echo "請登入帳號"; # 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; # 3 秒後跳轉回登入頁面
    }
    else {   
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); # 連接資料庫
        $sql = "delete from bulletin where bid='{$_GET["bid"]}'"; # 建立刪除佈告的 SQL 語句，根據 GET 參數 bid
        #echo $sql; # 可用於除錯，顯示 SQL 指令
        
        if (!mysqli_query($conn, $sql)){ # 執行刪除指令，若失敗
            echo "佈告刪除錯誤"; # 顯示錯誤訊息
        } else {
            echo "佈告刪除成功"; # 顯示刪除成功訊息
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; # 3 秒後跳轉回佈告列表頁面
    }
?>
