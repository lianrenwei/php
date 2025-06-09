<html>
    <head><title>修改使用者</title></head> # 設定網頁標題為「修改使用者」
    <body>
    <?php
    error_reporting(0); # 關閉 PHP 錯誤訊息顯示
    session_start(); # 啟用 session 功能，用來確認是否已登入

    if (!$_SESSION["id"]) { # 如果使用者尚未登入（session 沒有 id）
        echo "請登入帳號"; # 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; # 3 秒後跳轉到登入頁面
    }
    else {   
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); # 連接資料庫

        $result = mysqli_query($conn, "select * from user where id='{$_GET['id']}'"); # 從 user 資料表中查詢指定 id 的使用者資料

        $row = mysqli_fetch_array($result); # 取得查詢結果的第一筆資料（即該使用者）

        echo "
        <form method=post action=20.user_edit.php> # 建立表單，資料送出到 20.user_edit.php
            <input type=hidden name=id value={$row['id']}> # 隱藏欄位，儲存使用者 id，送出時使用
            帳號：{$row['id']}<br> # 顯示使用者帳號（不允許修改）
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p> # 顯示原密碼，允許修改
            <input type=submit value=修改> # 送出按鈕
        </form>
        ";
    }
    ?>
    </body>
</html>
