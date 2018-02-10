<?php
$con=mysqli_connect("localhost","root","","raj");
$email=$_POST['email'];
$pass=$_POST['password'];
$query="select * from 5m8 where email = '$email'";
$row = mysqli_query($con,$query);
$res = mysqli_fetch_assoc($row);
if($pass == $res['password']){
	echo "welcome ".$email;
}
else{
	echo "invalid";
}
?>
