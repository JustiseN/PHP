<?php ob_start();?>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="uft-8">
</head>

<body>
    Invaild login!<br/>
    網頁會在三秒後轉回登入頁面或<br>
    <a href="logout.php">點這裡</a>
    <?php
    header("refresh:3,url=auth.php")
    ?>
    </body>
    </html>
    <?php ob_flush();?>