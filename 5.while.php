<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) #while 迴圈會持續執行，直到資料集中的資料已經提取完畢為止 
   {
     echo $row["id"]." ".$row["pwd"]."<br>";
   } #id 和 pwd 是 user的欄位名稱，$row["id"] 和 $row["pwd"] 會提取對應欄位的資料
?>
