<?php
include ('connection.php');
 session_start();
if(empty($_SESSION['uid']))
{
  header("Location:admin.php");
}
else
{
    

?>
<html>
<head>
<title>PNS Automation</title>
 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	   <link type="text/css" rel="stylesheet" href="css/transition2.css"  media="screen,projection"/>


<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
	  <style>
	  
	  .container1 {
    position: relative;
}

/* Bottom right text */
.text-block {
    position: absolute;
    bottom: 20px;
    right: 20px;
	
    background-color: ;
    color: white;
    padding-left: 20px;
    padding-right: 20px;
}
	  
	  /* Set height of body and the document to 100% to enable "full page tabs" */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: ;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: black;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Registration {background-color: #fofofo;}
#Messages {background-color: #fofofo;}
#Contact {background-color: #fofofo;}
#About {background-color: #fofofo;}


	  </style>
</head>
<body>
<div class="container1">
  <img src="images/pns5.jpg"  style="width:100%;height:23%;">
  <div class="text-block"> 
    <h4>PNS Automation</h4>
    <p>Admin Panel</p>
  </div>
</div>
<button class="tablink flow-text" onclick="openPage('Registration', this, 'red')" id="defaultOpen">Register</button>
<button class="tablink" onclick="openPage('Messages', this, 'orange')" >Messages</button>
<button class="tablink" onclick="openPage('Contact', this, 'orange')" >Student</button>
<button class="tablink" onclick="openPage('About', this, 'orange')" >about</button>
<div id="Registration" class="tabcontent " height="100%">
    <div class="row ">
        <div class="col l6 s6">
  <h2 class="flow-text"> REGISTERED STUDENTS  </h2><br></div>
  <div class="col l6 s6"  ><a href="del.php" class="btn">Delete</a><a href="logout.php" class="btn">Logout</a> </div>
  <div class="col s12 l12">
	   <?php
	   $result=mysqli_query($con,"SELECT * FROM register");
	  while($row = mysqli_fetch_array($result))
	  {
		?><div class="z-depth-5 flow-text"><?php
		 echo "<b>";
		 echo "NAME:         ";
		 echo "</b>"; 
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
         echo $row['name'];
		 echo "</br>";
		 echo "<b>";
		 echo "COLLEGE:       ";
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
		 echo "</b>";
		 echo $row['college'];
		 echo "</br>";
		 echo "<b>";
		 echo "BRANCH:         ";
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
		 echo "</b>";
		 echo $row['branch'];
		 echo "</br>";
		 echo "<b>";
		 echo "CONTACT NUMBER:         ";
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
		 echo "</b>";
		 echo $row['number'];
		 echo "</br>";
		 echo "<b>";
		 echo "EMAIL:         ";
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
		 echo "</b>";
         echo $row['email'];
		 echo "</br>";
		 echo "<b>";
		 echo "COURSE:           		";
		 echo "</b>";
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
		 echo $row['course'];
		?></div>
		
		<?php  
		echo "</br>";
	  }
    ?>
</div>
</div>
</div>
<div id="Messages" class="tabcontent">
 <div class="row"><div class="col s6 l6 " > <h3 class="flow-text">MESSAGES</h3></div><div class="col l6 s6"> <a href="delmsg.php" class="btn">Delete</a><a href="logout.php" class="btn">Logout</a></div></div>
     <?php
	   $result=mysqli_query($con,"SELECT * FROM contact");
	  while($row = mysqli_fetch_array($result))
	  {
		  if(!($row['name'])){
			  echo "0 Messages";
			  break;
		  }
		?><div class="z-depth-5"><?php
		 echo "<b>";
		 echo "NAME:         ";
		 echo "</b>"; 
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
         echo $row['name'];
		 echo "</br>";
		 echo "<b>";
		 echo "EMAIL:         ";
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
		 echo "</b>";
         echo $row['email'];
		 echo "</br>";
		 echo "<b>";
		 echo "MESSAGE:           		";
		 echo "</b>";
		 echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
		 echo $row['message'];
		?></div>
		
		<?php  
		echo "</br>";
	  }
    ?>
    
    
</div>

<div id="Contact" class="tabcontent">
	<div class="row">
	  <h3>Student Information:</h3>
		<div class="col s12 l6">
		
				  <div class="row">
    <form class="col s12" enctype="multipart/form-data" action="post.php" method="post">

      <div class="row">
        <div class="input-field col s12">
          <input name="name" type="text" class="validate" placeholder="Name" required>
         
        </div>
      </div>
	      <div class="row">
        <div class="input-field col s12">
          <input name="college" type="text" class="validate" placeholder="College" required>

        </div>
      </div>
	        <div class="row">
        <div class="input-field col s12">
          <input name="branch" type="text" class="validate" placeholder="Branch" required>

        </div>
      </div>
	        <div class="row">
        <div class="input-field col s12">
          <input name="number" type="text" class="validate" placeholder=" Number" required>

        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate" placeholder="Email" required>

        </div>
      </div>

       
   
  </div>
			
		</div>
		<div class="col s12 l6" style="padding-left:5%">
			  <h5>Registration Number</h5>
		    <div class="file-field input-field black-text">
             <input type="text" name="rno" required>
    </div>
			  <h5>Courses:</h5>
			  <div class="row">
        <div class="col s12 l6">
	       <p>
      <label>
        <input type="checkbox"  name="course[]" value="PLC+SCADA"/>
        <span>PLC+SCADA</span>
      </label>
    </p>
		       <p>
      <label>
        <input type="checkbox"  name="course[]" value="EMBEDED"/>
        <span>EMBEDED</span>
      </label>
    </p>
		       <p>
      <label>
        <input type="checkbox"  name="course[]" value="MATLAB"/>
        <span>MATLAB</span>
      </label>
    </p>
		       <p>
      <label>
        <input type="checkbox"  name="course[]" value="ROBOTICS"/>
        <span>ROBOTICS</span>
      </label>
    </p>
   <p>
      <label>
        <input type="checkbox" name="course[]" value="IOT"/>
        <span>IOT</span>
      </label>
    </p>	       <p>
      <label>
        <input type="checkbox" name="course[]" value="SMT"/>
        <span>SMT</span>
      </label>
    </p>	 	</div>
		     <div class="col s12 l6">       <p>
      <label>
        <input type="checkbox" name="course[]" value="PANEL"/>
        <span>PANEL</span>
      </label>
    </p>
		       <p>
      <label>
        <input type="checkbox"  name="course[]" value="RELAY"/>
        <span>RELAY</span>
      </label>
    </p>	       <p>
      <label>
        <input type="checkbox" name="course[]" value="MOTOR"/>
        <span>MOTOR</span>
      </label>
    </p>	       <p>
      <label>
        <input type="checkbox" name="course[]" value="DRIVE"/>
        <span>DRIVE</span>
      </label>
    </p>	       <p>
      <label>
        <input type="checkbox" name="course[]" value="AUTOCAD"/>
        <span>AUTOCAD</span>
      </label>
    </p>
	
	 <p>
      <label>
        <input type="checkbox" name="course[]" value="FULL AUTOMATION"/>
        <span>FULL AUTOMATION</span>
      </label>
    </p>
       </div>
     <input type="submit" class="btn waves-effect" name="Submit">
    </form>
	</div>
</div>
	</div>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


  $('#textarea1').val('New Text');
  M.textareaAutoResize($('#textarea1'));
  
    $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
      
        
</script>

</body>
</html>

<?php } 
?>