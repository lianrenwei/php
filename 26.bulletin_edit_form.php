<?php
    error_reporting(0); # 關閉錯誤訊息顯示
    session_start(); # 啟動 session，檢查登入狀態

    if (!$_SESSION["id"]) { # 若尚未登入（session 中無 id）
        echo "please login first"; # 顯示提示訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; # 三秒後跳回登入頁面
    }
    else {
        # 若已登入，開始處理顯示編輯表單
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); # 建立資料庫連線

        # 根據 GET 參數 bid 查詢對應的佈告資料
        $result = mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}"); 
        $row = mysqli_fetch_array($result); # 把查詢結果存到陣列 $row 中

        # 根據佈告類型的值，決定哪個 radio button 要預先勾選
        $checked1 = ""; # 預設為空字串
        $checked2 = "";
        $checked3 = "";

        if ($row['type'] == 1)
            $checked1 = "checked"; # 若類型是 1，勾選系上公告
        if ($row['type'] == 2)
            $checked2 = "checked"; # 若類型是 2，勾選獲獎資訊
        if ($row['type'] == 3)
            $checked3 = "checked"; # 若類型是 3，勾選徵才資訊

        # 輸出 HTML 表單，並將資料填入欄位中供修改
        echo "
        <html>
            <head><title>新增佈告</title></head> # HTML 頁面標題
            <body>
                <form method=post action=27.bulletin_edit.php> # 表單送出到 bulletin_edit.php 處理修改
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br> # 顯示 bid 並用 hidden 傳送
                    標    題：<input type=text name=title value={$row['title']}><br> # 標題欄位預設原資料
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br> # 內容欄位預設原資料
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告  # 根據類型加上 checked
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p> # 預設原發布時間
                    <input type=submit value=修改佈告> <input type=reset value=清除> # 提交與清除按鈕
                </form>
            </body>
        </html>
        ";
    }
?>
