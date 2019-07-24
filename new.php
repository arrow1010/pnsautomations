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
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
#Messages {background-color: #338ebd;}
#Registration {background-color: #fofofo;}
#Messages {background-color: #338ebd;}

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
<button class="tablink" onclick="openPage('Contact', this, 'orange')" >contact</button>
<button class="tablink" onclick="openPage('About', this, 'orange')" >about</button>


<div id="Registration" class="tabcontent " height="100%">

  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" placeholder="Name" class="materialize-textarea"></textarea>
       
        </div>
      </div>
    </form>
  </div>
       
</div>
<div id="Messages" class="tabcontent">
    afsf
    
</div>

<div id="Contact" class="tabcontent">
asffas
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

    <script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
  $('#textarea1').val('New Text');
  M.textareaAutoResize($('#textarea1'));

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
</script>

</body>
</html>

<?php } 
?>