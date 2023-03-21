<?php
session_start();

if($_SESSION["login"] == "Headmaster"){

}
else{
    header("Location:error.php");
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>校長管理頁面</title>
</head>
<body>
  <h1>校長管理頁面</h1>
  <img src="https://i.imgflip.com/1fl62y.jpg" alt="校長梗圖">
  <p>歡迎來到校長管理頁面！</p>
  <input type ="button" onclick="history.back()" value="回到上一頁"></input>
  </body>
  </html>