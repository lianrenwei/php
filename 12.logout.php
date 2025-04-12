<?php
    session_start();
    unset($_SESSION["id"]); #刪除session變數
    echo "登出成功...."; #告訴用戶登出成功
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
           #等待 3 秒鐘後，頁面將自動重定向到 2.login.html 頁面
?>
