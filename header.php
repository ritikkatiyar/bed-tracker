<!DOCTYPE html>
<html>
<head>
<title>Hospital Bed Tracking System</title>

<!-- CSS -->
<link href="style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie7.css" /><![endif]-->

<!-- JavaScripts-->
<script type="text/javascript" src="style/js/jquery.js"></script>
<script type="text/javascript" src="style/js/jNice.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
	#wrapper{
		display:center;
		padding:50px;
		background-color:#D3D3D3;
	}
</style>

<body>
	
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<!-- <h1><span><font color="#5494af">Hospital Bed</font> <font color="#c66653">Tracking System</font></span></h1> -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="logo.jpeg" alt="" width="30" height="30">
    </a>
    <a class="navbar-brand" href="http://localhost/Hosptal-Bed-Management-master/hospital-bed-tracker/#">Healthify</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Hosptal-Bed-Management-master/hospital-bed-tracker/AboutUs.php">About us</a>
        </li>
        
        
      </ul>
      <form class="d-flex">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <button class="btn btn-outline-danger" type="submit" formaction="http://localhost/Hosptal-Bed-Management-master/hospital-bed-tracker/otp.php">Emergency</button>
          
      </form>
    </div>
  </div>
</nav>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->