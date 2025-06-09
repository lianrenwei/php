<?php
    error_reporting(0); # 關閉錯誤訊息顯示
    session_start(); # 啟動 session，檢查使用者是否登入

    if (!$_SESSION["id"]) { # 如果使用者尚未登入
        echo "please login first"; # 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; # 3 秒後跳轉回登入頁面
    }
    else {
        # 如果已登入，顯示新增佈告的表單
        echo "
        <html>
            <head><title>新增佈告</title></head> # 設定網頁標題為「新增佈告」
            <body>
                <form method=post action=23.bulletin_add.php> # 表單送出到 23.bulletin_add.php 處理新增
                    標    題：<input type=text name=title><br> # 文字輸入欄位：佈告標題
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br> # 多行輸入欄位：佈告內容
                    佈告類型：<input type=radio name=type value=1>系上公告  # 單選：系上公告
                            <input type=radio name=type value=2>獲獎資訊   # 單選：獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br> # 單選：徵才資訊
                    發布時間：<input type=date name=time><p></p> # 日期輸入欄位：發布時間
                    <input type=submit value=新增佈告> <input type=reset value=清除> # 送出與清除按鈕
                </form>
            </body>
        </html>
        ";
    }
?>
