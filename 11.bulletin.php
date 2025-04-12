<?php
    error_reporting(0); #關閉錯誤報告
    session_start(); #開始或恢復會話。在這行程式碼之後，PHP 可以訪問與用戶相關的 session 變數
    if (!$_SESSION["id"])  
    {
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; #自動跳轉到登入頁面（2.login.html）3秒後
    }
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>"; #用戶已經登入，會顯示歡迎訊息以及一些操作連結
        $result=mysqli_query($conn, "select * from bulletin"); #從 bulletin 表格中獲取所有資料
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)) #資料庫查詢到的資料動態地創建 HTML 表格
        {
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>"; #每個佈告項目都有修改刪除兩個選項
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
