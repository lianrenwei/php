<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);#mysqli_fetch_array($result) 從查詢結果中提取一筆資料儲在 $row 變數中
    echo $row["id"] . " " . $row["pwd"]."<br>"; #輸出 user 第一行資料的帳號（id）和密碼（pwd）
    $row=mysqli_fetch_array($result);#mysqli_fetch_array($result) 來提取第二行資料
    echo $row["id"] . " " . $row["pwd"]; #顯示帳號和密碼
?>
