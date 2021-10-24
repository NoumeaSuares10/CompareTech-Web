
<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>oneplus nord</title>
        <link href="default.css" rel="stylesheet" type="text/css" media="all" />
        <style type="text/css">
        body,td,th {
    font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
        </style>
    </head>
	<body onload="myFunction1()">
<div id="header-wrapper">	
		<h1><a href="index.html"><p style="color:white; font-size: 70px;">CompareTech</p></a></h1>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="index.html"  title="">Homepage</a></li>
					<li><a href="#"  title="">Add phone(For manufacturer only)</a></li>					
				</ul>
			</div>
		</div>

<div id="page-wrapper">
	<div id="page" class="container">
		<div class="title">
			<h2>Oneplus Nord</h2>
		</div>
		</div>
		
</div>

  <div class="column1">
			<div 
			<?php include('oneplus1.php'); ?> 
</div>
		</div>	
		<div id="coloumn7" class="column7">
	    <div
	    <?php include('realme1.php'); ?> 
		</div>	 			  
        </div>
		<div id="coloumn5" class="column5">
		<div 
		<?php include('apple1.php'); ?> 
		</div>
		</div>
<div id="coloumn6" class="column6">
			<div 
			<?php include('samsung1.php'); ?> 
</div>
</div>
<div id="coloumn8" class="column8">
			<div 
			<?php include('disp.php'); ?> 
</div>
</div>
		</div>
		<div id="lalal" class="container">
	<p><button class=button  onclick="myFunction1()">Add Realme to compare</button><button class=button  onclick="myFunction3()">Add iPhone 12 compare</button><button class=button   onclick="myFunction2()">Add Samsung Galaxy s20 to compare</button><button class=button   onclick="myFunction4()">new phones that are added </button></p>
		<ul class="contact">
			
		</ul>
		
<script language="javascript">
function myFunction1() {
  var x = document.getElementById("coloumn7");
  document.getElementById("coloumn5").style.display = "none";
  document.getElementById("coloumn6").style.display = "none";
  document.getElementById("coloumn8").style.display = "none";
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  
}
function myFunction2() {
  var x = document.getElementById("coloumn6");
   document.getElementById("coloumn7").style.display = "none";
   document.getElementById("coloumn5").style.display = "none";
   document.getElementById("coloumn8").style.display = "none";
  
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}


function myFunction3() {
  var x = document.getElementById("coloumn5");
   document.getElementById("coloumn7").style.display = "none";
   document.getElementById("coloumn6").style.display = "none";
   document.getElementById("coloumn8").style.display = "none";
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction4() {
  var x = document.getElementById("coloumn8");
   document.getElementById("coloumn7").style.display = "none";
   document.getElementById("coloumn6").style.display = "none";
   document.getElementById("coloumn5").style.display = "none";
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 

</script>