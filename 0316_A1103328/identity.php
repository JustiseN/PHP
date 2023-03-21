<?php
session_start();

if($_SESSION["login"] == "Headmaster" ||$_SESSION["login"] == "Teacher" || $_SESSION["login"] == "Student"){

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
    <?php
    echo $_SESSION["login"];
    ?>
    成功登入!<br/>
    <a href="logout.php">Logout</a>
</body>
</html>