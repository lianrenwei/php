<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result))
    {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     } #檢查資料庫帳號與密碼和提交的資料是否匹配
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"]; #用戶的帳號儲存到 PHP 會話中，這樣在整個會話期間你可以訪問該用戶的帳號。
    echo "登入成功";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   } #使用 <meta http-equiv=REFRESH> 標籤在 3 秒後自動重定向到 11.bulletin.php

  else{
    echo "帳號/密碼 錯誤"; #沒有找到匹配的帳號和密碼
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  } #使用<meta http-equiv=REFRESH> 標籤在 3 秒後將頁面重定向回 2.login.html
?>
