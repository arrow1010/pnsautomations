<?php
include ('connection.php');

$name=$_POST['name'];
$college=$_POST['college'];
$branch=$_POST['branch'];
$number=$_POST['number'];
$email=$_POST['email'];
$rno=$_POST['rno'];
$course= " ";

if(!empty($_POST['course'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['course']);
echo $name;
echo "    ";
echo "You have selected following ".$checked_count." course: <br/>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['course'] as $selected){
echo "<p>".$selected ."</p>";
$course=$course . " " . $selected ;
}
}


	  $result = mysqli_query($con,"INSERT INTO `certified`(`name`, `college`, `branch`, `number`, `email`, `rno`,`course`) VALUES ('$name','$college','$branch','$number','$email','$rno','$course')");

?>