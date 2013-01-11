<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
 <html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
 <head> 
	<?php include ("noRightClick.js");?>
 	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
	<link href="style.css" type="text/css" rel="stylesheet"/>
	<title>Photography Niche</title> 
	
	<?php include("GalleryHead.js");?>
	 
 </head> 
<body>
	<div class="page">
		<h1><i>Photography Niche</i></h1>
		<h2><i>by Nichelle Bailey</i></h2><br/>
	<hr id="border"/>
	
	<div class="menu">
		<ul>
			<li><a href ="index.php">Home</a></li>
			<li><a href="AboutMe.php">About Me</a></li>
			<li class="selected">Gallery</li>
			<li>Session Advice</li>
			<li>Pricing</li>
			<li>Contact Me</li>
		</ul>
	</div>
	<hr id="gray"/>
	
	<?php 
session_start(); 
include("password.php"); 

if (!isset($_POST['submit'])){
?>
	<form action="login.php" method="post"><input type="hidden" name="ac" value="log">
     Username: <input type="text" name="username" /><br/>
     Password:  <input type="password" name="password" /><br/> 
     <input type="submit" name="submit" value="Login" />
    </form>
<?php
	}else{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	if ($_POST["ac"]=="log") { /// do after login form is submitted  
     if ($USERS[$user]==$pass) { /// check if submitted username and password exist in $USERS array 
          if ($user == 'username1'){
			header( 'Location: admin.php' ) ;
		  }else{
			echo"You are logged in!";
		  }
     } else { 
          echo 'Incorrect username/password. Please, try again.'; 
     } 
}
}

     
?>