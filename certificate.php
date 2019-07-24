  <!DOCTYPE html>
  
<?php
include ('connection.php');
 session_start();
if(empty($_SESSION['name']))
{
 
}
else
{
    $name=$_SESSION['name'];
	 $no=$_SESSION['no'];
	$result=mysqli_query($con,"SELECT * FROM `certified` WHERE `name` = '$name' AND `number` = '$no'  ");
	$row=mysqli_fetch_array($result);
   } ?>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

	<div class="container">
	    <div class="row z-depth-5" style="solid;border-width:10px;padding-top:60px">
			<div class="col l12 s12 center">
				<img src="images/logo.png">
			</div>
			<div class="col l12 s12 center">
				<div class="row">
					
					<div class="col l12 s12 flow-text">
					<font class="blue-text text-darken-3"  size="20px">Automation<br>Training & Live Project</font>
				    </div>
				</div>
			</div>
			<div class="col l12 s12 center">
				<b>This is to certify Mr/Ms <font class="blue-text"><?php echo $row['name']; ?></font> registration number <font class="blue-text"><?php echo $row['rno']; ?></font> of college <font class="blue-text"> <?php echo $row['college']; ?> </font> has successfully completed the training program  with full practical exposures.</b><br>
				<br>
			</div>
			
			<div class="col l12 s12 center">
              <b>Registration Number :  <font class="blue-text"><?php echo $row['rno']; ?></font> </b><br><br>
			  <b>College :  <font class="blue-text"><?php echo $row['college']; ?></font>  </b><br><br>
			  <b>Branch :  <font class="blue-text"><?php echo $row['branch']; ?></font>  </b><br><br>
			  <b>Course :  <font class="blue-text"><?php echo $row['course']; ?></font>  </b><br><br>
			  <b>Email :  <font class="blue-text"><?php echo $row['email']; ?></font>  </b><br><br>
			</div><br><br>
			<div class="col l12 s12 left">
				<b>2nd floor siraj complex<br>
				Near Central Bank Matiyari <br>
				Chauraha Lucknow :- 226028<br>
				Phone No:- 8419003734<br></b>
				
			</div>
			<div class="col l12 s12 center">
			<a href="index.php">Back</a>
				<br><br>
				<br><br>
			</div>
			<br><br>
			<br><br>
		</div>
	</div>
	
	
	
	
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
  
