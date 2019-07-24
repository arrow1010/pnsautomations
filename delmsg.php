<?php
include ('connection.php');
$result=mysqli_query($con,"TRUNCATE contact");
 header("Location:profile.php");

?>