<?php
$con=mysqli_connect("localhost","root","","raj");
$name=$_POST['name'];
$roll=$_POST['roll'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$query="insert into 5m8 values('$name','$roll','$mobile','$email','$password')";
echo $query;
mysqli_query($con,$query);
echo $email;
?>
