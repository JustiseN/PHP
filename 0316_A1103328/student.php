<?php
session_start();

if($_SESSION["login"] == "Teacher" || "headmaster" || "Student"){

}
else{
    header("Location:error.php");
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>學生管理頁面</title>
</head>
<body>
  <h1>學生管理頁面</h1>
  <img src="https://image.winudf.com/v2/image/d3d3LnN0dWRlbnRtZW1lc19zY3JlZW5fMF8xNTI0MjY4ODU3XzA1NQ/screen-0.jpg?fakeurl=1&type=.webp" alt="老師梗圖">
  <p>歡迎來到學生管理頁面！</p>
  <input type ="button" onclick="history.back()" value="回到上一頁"></input>
  </body>
  </html>