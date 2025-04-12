<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        echo "登入成功"; #如果帳號為john密碼為john1234 顯示登入成功
    else
        echo "登入失敗"; #如果帳號不是為john密碼不是為john1234 顯示登入失敗 
?>
