<?php
    session_start(); #呼叫session_start()，才能夠跨網頁 
    if (!isset($_SESSION["counter"])) #檢查 $_SESSION["counter"] 是否已經被設置
        $_SESSION["counter"]=1; #如果沒有設置則初始化 $_SESSION["counter"] 為 1
    else
        $_SESSION["counter"]++; #已經設置則計數器會自動增加 1

    echo "counter=".$_SESSION["counter"]; #顯示目前的計數器值
    echo "<br><a href=9.reset_counter.php>重置counter</a>"; #重定向到 9.reset_counter.php 頁面，這個頁面會用來重置 counter 計數器
?>
