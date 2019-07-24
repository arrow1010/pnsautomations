<?php
include ('connection.php');
$result=mysqli_query($con,"TRUNCATE register");
 header("Location:profile.php");

?>