 <?php

include ('connection.php');
 session_start();
$name=$_POST['name'];
$rno=$_POST['rno'];

$result=mysqli_query("SELECT * FROM `certified` WHERE `name` = '$Nname' AND `number` = '$rno'  ");
if($result!=null)
{
	header("Location:fetchcertificate.php?user=");
    exit();
}else
{
	$name=null;
$rno=null;
	echo "result not found";
	}

?>