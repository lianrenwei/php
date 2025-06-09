<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0); #關閉錯誤回報（避免顯示錯誤訊息）
    error_reporting(0); 
    session_start();    #啟用 session 功能，以便使用 $_SESSION 變數
    if (!$_SESSION["id"]) {  #如果尚未登入（$_SESSION["id"] 不存在），顯示提示並3秒後跳轉到登入頁面
        echo "請登入帳號"; 
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    } #自動轉跳到登入頁面（2.login.html），3秒後跳轉
    else{    #如果已登入，顯示新增使用者的表單
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
    </body>
</html>
