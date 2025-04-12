<?php
    error_reporting(0); #取消錯誤或警告
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#提供了資料庫伺服器地址、使用者名稱、密碼和資料庫名稱
    $result=mysqli_query($conn, "select * from bulletin");#從 bulletin 表格中選取所有資料
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";#邊框為 2 ,標題欄：佈告編號、佈告類別、標題、佈告內容、發佈時間。 
    while ($row=mysqli_fetch_array($result)) #查詢結果中逐行提取資料，並將每一行的資料顯示在 HTML 表格中。
    {
        echo "<tr><td>";
        echo $row["bid"]; #顯示bid
        echo "</td><td>";
        echo $row["type"]; #顯示type
        echo "</td><td>"; 
        echo $row["title"]; #顯示title
        echo "</td><td>";
        echo $row["content"];  #顯示content
        echo "</td><td>";
        echo $row["time"]; #顯示time
        echo "</td></tr>";
    }
    echo "</table>" #關閉 HTML 表格標籤
?>
