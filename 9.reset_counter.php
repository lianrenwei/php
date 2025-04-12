<?php
    session_start(); #讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    unset($_SESSION["counter"]); #銷毀 session 中的變數
    echo "counter重置成功...."; #計數器重置
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
        #等待 2 秒鐘後，將用戶重定向到 8.counter.php 頁面
?>
