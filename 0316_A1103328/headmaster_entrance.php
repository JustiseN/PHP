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
        <meta charset="utf-8">
</head>
<body>
    成功登入!<br/>
    <?php
    echo "身份:".$_SESSION["login"]."<br>";
    ?>
    可檢視頁面:
    <a href="headmaster.php">校長</a>
    <a href="teacher.php">老師</a>
    <a href="student.php">學生</a>
    <a href="logout.php">登出</a>
</body>
</html>