<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
 <html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en"> 
 <head> 
	<?php include ("noRightClick.js");?>
 	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
	<link href="style.css" type="text/css" rel="stylesheet"/>
	<title>Photography Niche</title> 
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

		<script type="text/javascript" src="fadeslideshow.js">

/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [575, 300], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["images/fruits.jpg"],
		["images/cave.jpg"],
		["images/pool.jpg"],
		["dog.jpg"],
		["images/greendamask.jpg"],
		["images/greenswirl.jpg"],
		["images/green damask regency.jpg"],
		["images/nichelle.jpg"]//<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:3000, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 1200, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})
	</script>
	<?php include("GalleryHead.js");?>
	 
 </head> 
<body>
	<div class="page">
		<h1><i>Photography Niche</i></h1>
		<h2><i>by Nichelle Bailey</i></h2><br/>
	<hr id="border"/>
	
	<div class="menu">
		<ul>
			<li class="selected">Home</li>
			<li><a href="AboutMe.php">About Me</a></li>
			<li><a href="login.php">Gallery</a></li>
			<li>Session Advice</li>
			<li>Pricing</li>
			<li>Contact Me</li>
		</ul>
	</div>
	<hr id="gray"/>
	
	<h3>Welcome to my Website!</h3>
	
	<div class="slideshow">
	<div id="fadeshow1"></div>
	</div>
	
	<!--
	<a href="javascript:gotoshow()"><img src="food1.jpg" name="slide" border=0 width=375 height=300></a>
	<script>
	<!--

//configure the paths of the images, plus corresponding target links
slideshowimages("images/greendamask.jpg","images/greenswirl.jpg","images/green damask regency.jpg")
slideshowlinks("http://food.epicurious.com/run/recipe/view?id=13285","http://food.epicurious.com/run/recipe/view?id=10092","http://food.epicurious.com/run/recipe/view?id=100975","http://food.epicurious.com/run/recipe/view?id=2876","http://food.epicurious.com/run/recipe/view?id=20010")

//configure the speed of the slideshow, in miliseconds
var slideshowspeed=2000

var whichlink=0
var whichimage=0
function slideit(){
if (!document.images)
return
document.images.slide.src=slideimages[whichimage].src
whichlink=whichimage
if (whichimage<slideimages.length-1)
whichimage++
else
whichimage=0
setTimeout("slideit()",slideshowspeed)
}
slideit()


</script>
<p align="center"><font face="arial" size="-2">This free script provided by</font><br>
<font face="arial, helvetica" size="-2"><a href="http://javascriptkit.com">JavaScript
Kit</a></font></p>
!-->

	
	</div>
</body>
</html>