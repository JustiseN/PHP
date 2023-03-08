<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone =$_POST['phone'];
$food = $_POST['food'];
$message = $_POST['message'];


echo "<h1>感謝你的報名!</h1>";
echo "<p>姓名: $name</p>";
echo "<p>電郵: $email</p>";
echo "<p>電話: $phone</p>";
if($food == 'meat'){
	echo "<p>食物喜好: 肉類</p>";
}
else if($food == 'vegetarian'){
	echo "<p>食物喜好: 素食</p>";
}
else{
	echo "<p>食物喜好: 其他</p>";
}
echo "<p>Message: $message</p>";
?>