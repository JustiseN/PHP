<?php ob_start();?>
<?php 
session_start();
if($_SESSION["login"]=="No"){
    
}
else{
    header("Location:error.php");
}
 ?>

<html>
    <head>
        <meta charset="uft-8">
</head>

<body>
    <?php
    echo $_SESSION["login"];
    ?>
    登入失敗!<br/>
    網頁會在三秒後轉回登入頁面或<br>
    <a href="logout.php">點這裡</a>
    <?php
    header("refresh:3,url=logout.php")
    ?>
    </body>
    </html>
    <?php ob_flush();?>