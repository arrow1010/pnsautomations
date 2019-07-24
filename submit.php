
<?php
include('connection.php');
$name=$_POST['name'];
$college=$_POST['college'];
$branch=$_POST['branch'];
$number=$_POST['number'];
$email=$_POST['email'];


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
$result = mysqli_query($con,"INSERT INTO `register`(`name`, `college`, `branch`, `number`, `email`, `course`) VALUES ('$name','$college','$branch','$number','$email','$course')");
echo "<br/><b>Note :</b> <span>Successfully Registered.</span>";
}
else{
echo "<b>Please Select Atleast One Option.</b>";
}





?>
