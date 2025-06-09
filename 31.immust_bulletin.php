<html> <!-- HTML文件開始 -->
    <head><title>明新科技大學資訊管理系</title> <!-- 頁面標題 -->
    <meta charset="utf-8"> <!-- 設定編碼為UTF-8 -->
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet"> <!-- 載入Flexslider CSS -->
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script> <!-- 載入jQuery -->
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script> <!-- 載入Flexslider JS -->       
    <script>
        $(window).load(function() {  # 當視窗載入完成時
            $('.flexslider').flexslider({  # 啟動flexslider插件
                animation: "slide",  # 設定動畫效果為滑動
                rtl: true  # 右到左方向
            });
        });
    </script>
    <style>
        *{
            margin:0;  # 清除所有元素外距
            color:gray;  # 設定文字顏色為灰色
            text-align:center;  # 文字置中
        }
        /* top */
        .top{
             background-color: white;  # 頂部區塊背景白色
        }
        .top .container{
            display: flex;  # 使用flexbox排版
            align-items: center;  # 垂直置中
            justify-content: space-between;  # 兩端對齊，中間空隙自動調整
            padding:10px;  # 內距10px
        }
        .top .logo{
            /*border:1px solid red;*/  # 偵錯用邊框（註解中）
            font-size: 35px;  # 文字大小35px
            font-weight: bold;  # 文字加粗
        }
        .top .logo img{
            width: 100px;  # logo圖片寬度100px
            vertical-align: middle;  # 圖片垂直置中
        }
        .top .top-nav{
            /*border:1px solid red;*/  # 偵錯用邊框（註解中）
            font-size: 25px;  # 文字大小25px
            font-weight: bold;  # 文字加粗       
        }
        .top .top-nav a{
            text-decoration: none;  # 取消連結底線
        }
        /* nav */
        .nav {
            background-color:#333;  # 導覽列背景色深灰
            display: flex;  # 使用flex排版
            justify-content: center;  # 置中對齊
        }
        .nav ul {
            list-style-type: none;   # 取消項目符號
            margin: 0;  # 外距0
            padding: 0;  # 內距0
            overflow: hidden;  # 隱藏溢出內容
            background-color: #333;  # 背景色深灰
        }
        .nav li {
            float: left;  # 項目向左浮動排列
        }
        .nav li a {    
            display: block;   # 區塊元素
            color: white;   # 文字白色
            text-align: center;   # 文字置中
            padding: 14px 16px;   # 內距上下14px左右16px
            text-decoration: none;   # 無底線
        }
        .nav li a:hover {
            background-color: #111;  # 滑鼠移入背景變深灰
        }
        /*下拉式選單*/
        .dropdown:hover .dropdown-content {
            display: block;   /*使用block呈現上下排列*/
        }
        li.dropdown:hover{
            background-color: #333;  /*設定背景顏色*/
        }
        .dropdown-content {  /*設定下拉選單內容格式*/
            display: none;  # 預設隱藏
            position: absolute;  # 絕對定位
            background-color: #333;  # 背景深灰
            min-width: 160px;  # 最小寬度160px
            z-index: 1;  # 層級1，避免被蓋住
        }
        .dropdown-content a {/*設定下拉選單連結內容格式*/
            color: black;  # 文字黑色
            padding: 12px 16px;  # 內距上下12px左右16px
            text-decoration: none;  # 無底線
            display: block;  # 區塊元素排列
            text-align: left;  # 文字靠左
        }

        /* slider */
        .slider{
            background-color: black;  # 幻燈片背景黑色
        }
        /* banner*/
        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF);  # 漸層背景色由淺藍至深藍
            padding:30px;  # 內距30px
        }
        .banner h1{
            padding: 20px;  # 內距20px
        }        
        /*faculty*/
        .faculty {
            display: block;  # 區塊顯示
            justify-content: center;  # 置中對齊（flex屬性，這裡無效因為非flex容器）
            background-color:white;  # 背景白色
            padding:40px;  # 內距40px
        }
        .faculty h2 {
            font-size: 25px;  # 文字大小25px
            color: rgb(50,51,52);  # 文字色深灰
            padding-bottom:40px;  # 下方內距40px
        }
        .faculty .container {
            /*border:1px solid red;*/  # 偵錯用邊框（註解中）
            display: flex;  # 使用flex排版
            justify-content: space-around;  # 子元素左右平均分配間距
            align-items: center;  # 垂直置中
        }
        .faculty .teacher{
            /*border:1px solid blue;*/  # 偵錯用邊框（註解中）
            display:block;  # 區塊顯示
            text-decoration: none;  # 取消超連結底線
        }
        .faculty .teacher img{
            height: 200px;  # 圖片高200px
            width: 200px;  # 圖片寬200px
        }
        .faculty .teacher h3{
            color: White;  # 文字白色
            background-color: rgba(39,40,34,.500);  # 半透明深色背景
            text-align: center;   # 文字置中          
        }
        /*contact*/
        .contact {
            display: block;  # 區塊顯示
            justify-content: center;  # 置中對齊（flex屬性，這裡無效因為非flex容器）
            margin-top: 30px;  # 上方外距30px
            margin-bottom: 30px;   # 下方外距30px             
        }
        .contact h2{
            color: rgb(54, 82, 110);  # 深藍色文字
            font-size: 25px;  # 文字大小25px
        }
        .contact .infos{
            display:flex;  # 使用flex排版
            margin-top: 30px;   # 上方外距30px
            justify-content: center;  # 置中對齊
        }
        .contact .infos .left{
            display:block;  # 區塊顯示
            text-align: left;  # 文字靠左
            margin-right: 30px;  # 右方外距30px
        }
        .contact .infos .left b{
            display:block;  # 區塊顯示
            text-align: left;  # 文字靠左
            margin-top: 10px;  # 上方外距10px
            te
