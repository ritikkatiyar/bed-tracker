<?php
	session_start();
	require_once('connect.php');
	if(!isset($_SESSION['user_id'])){ Redirect('index.php'); }
	else
	{
		require_once('header.php');
	}
?>

        <ul id="mainNav">
        	<li><a href="UserDashboard.php" class="active">DASHBOARD</a></li> <!-- Use the "active" class for the active menu item  -->
        
        	<li><a href="beds.php">BEDS</a></li>
        	<li class="logout"><a href="logout.php">LOGOUT</a></li>
        </ul>
		
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<div id="sidebar">
                	<ul class="sideNav">
                    	<li><a>Welcome, <?php echo $_SESSION['name']; ?></a></li>
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
<div id="location">
<button onclick="getLocation()">your location</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>
<br>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Near by hospital</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="http://localhost/Hosptal-Bed-Management-master/hospital-bed-tracker/nims.php">NIMS</a>
    <a href="http://localhost/Hosptal-Bed-Management-master/hospital-bed-tracker/yatharth.php">YATHARTH HOSPITAL</a>
   
  </div>
</div>
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>


 <!-- // #main -->
  