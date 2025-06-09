<?php

error_reporting(0); # 關閉錯誤報告，避免使用者看到錯誤訊息
session_start(); # 啟用 session 功能，用來判斷是否登入

if (!$_SESSION["id"]) { # 如果 session 裡沒有 id，表示尚未登入
    echo "請登入帳號"; # 顯示提示訊息
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; # 3秒後自動跳轉到登入頁面
}
else{    

   # mysqli_connect() 建立資料庫連線（參數：主機, 使用者, 密碼, 資料庫）
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); # 建立與遠端 MySQL 資料庫的連線

   # 建立 SQL 新增語法，把表單送來的帳號與密碼新增到 user 表
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')"; # 準備 SQL 新增指令

   # 如果執行 SQL 指令失敗，顯示錯誤訊息
   if (!mysqli_query($conn, $sql)) { # 使用 mysqli_query() 執行 SQL，若失敗回傳 false
     echo "新增命令錯誤"; # 顯示錯誤訊息
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁"; # 顯示成功訊息
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; # 3秒後跳轉到使用者列表頁面
   }
}
?>
