 <?php

include ('connection.php');
 session_start();
$name=$_POST['name'];
$no=$_POST['number'];
$_SESSION['name']=$name;
$_SESSION['no']=$no;
$result=mysqli_query($con,"SELECT * FROM `certified` WHERE `name` = '$name' AND `number` = '$no'  ");
$row=mysqli_fetch_array($result);
if($row["name"]==$name && $row["number"]==$no)
{
	header("Location:certificate.php?user=");
    exit();
}else
{
	$name=null;
$rno=null;
$_SESSION['name']=null;
$_SESSION['no']=null;
	echo "result not found";
	
	}

?>