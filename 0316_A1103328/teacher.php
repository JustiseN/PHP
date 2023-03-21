<?php
session_start();

if($_SESSION["login"] == "Teacher" || "headmaster"){

}
else{
    header("Location:error.php");
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>老師管理頁面</title>
</head>
<body>
  <h1>老師管理頁面</h1>
  <img src="https://cdn.shopify.com/s/files/1/2562/6932/articles/teacher-meme-wait_til_its_quiet.jpg?v=1515905092" alt="老師梗圖">
  <p>歡迎來到老師管理頁面！</p>
  <input type ="button" onclick="history.back()" value="回到上一頁"></input>
  </body>
  </html>