<html>
    <head><title>使用者管理</title></head> # 設定網頁標題
    <body>
    <?php
        error_reporting(0); # 關閉錯誤訊息顯示
        session_start(); # 啟用 session 功能，驗證登入狀態

        if (!$_SESSION["id"]) { # 如果使用者尚未登入
            echo "請登入帳號"; # 顯示提示訊息
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; # 3 秒後跳轉至登入頁面
        }
        else{   # 如果已登入，顯示管理介面
            echo "<h1>使用者管理</h1> # 顯示標題
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br> # 顯示功能選單
                <table border=1> # 建立表格（有邊框）
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>"; # 表格標題列

            $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); # 建立資料庫連線

            $result = mysqli_query($conn, "select * from user"); # 查詢 user 資料表的所有資料

            while ($row = mysqli_fetch_array($result)) { # 用迴圈逐筆讀取查詢結果
                # 顯示每一筆資料，提供修改與刪除連結
                echo "<tr><td>
                    <a href=19.user_edit_form.php?id={$row['id']}>修改</a>|| # 修改連結（傳入 id）
                    <a href=17.user_delete.php?id={$row['id']}>刪除</a> # 刪除連結（傳入 id）
                    </td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>"; # 顯示帳號與密碼
            }

            echo "</table>"; # 結束表格
        }
    ?> 
    </body>
</html>
