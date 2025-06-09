<?php
    error_reporting(0); # 關閉錯誤回報，避免顯示警告或錯誤訊息
    session_start(); # 啟用 session 功能，讓系統能讀取登入狀態

    if (!$_SESSION["id"]) { # 如果沒有登入（session 中沒有 id）
        echo "請登入帳號"; # 提示使用者需要登入
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; # 3 秒後自動跳轉回登入頁面
    }
    else{   
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); # 建立與資料庫的連線

        $sql = "delete from user where id='{$_GET["id"]}'"; # 建立刪除使用者的 SQL 語句（根據網址中的 id 參數）

        # echo $sql; # 可取消註解來除錯，檢查實際執行的 SQL

        if (!mysqli_query($conn, $sql)) { # 執行 SQL 語句，如果失敗則進入此區塊
            echo "使用者刪除錯誤"; # 顯示錯誤訊息
        } else {
            echo "使用者刪除成功"; # 顯示成功訊息
        }

        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; # 3 秒後跳轉回使用者列表頁面
    }
?>
