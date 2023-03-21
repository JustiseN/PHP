<?php
session_start();
$id=$_POST["id"];
$pwd=$_POST["pwd"];
$head_ID="headmaster";
$head_PWD="a111111";
$teach_ID="teacher";
$teach_PWD="b222222";
$std_ID="student";
$std_PWD="c333333";

if(($head_ID==$id)&&($head_PWD==$pwd)){
    $_SESSION["login"]="Headmaster";
    header("Location:headmaster_entrance.php");
}
else if(($teach_ID==$id)&&($teach_PWD==$pwd)){
    $_SESSION["login"]="Teacher";
    header("Location:teacher_entrance.php");
}
else if(($std_ID==$id)&&($std_PWD==$pwd)){
    $_SESSION["login"]="Student";
    header("Location:student_entrance.php");
}
else{
    $_SESSION["login"]="No";
    header("Location:fail.php");
}

?>