<?php
include('connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['userMsg'];
echo $name;
echo $email;
echo $msg;
$result = mysqli_query($con,"INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$msg')");
?>