<?php
 $con=mysqli_connect("localhost","root","","test");
$name = $_POST['name'];
echo $name;
$result = mysqli_query($con,"INSERT INTO `accounts`(`name`) VALUES ('$name')");

if($result){
echo "successfully regestered";	
	
}
?>