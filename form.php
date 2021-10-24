<?php
require('config.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>comparetech</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php
		
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		$namerr = $namErr = $emailErr = $ramErr = $storageErr = $saq = ""; 
		
		
		if(isset($_POST['submitbtn'])){
			
            $firstname 	= $_POST['firstname'];
			$lastname	= $_POST['lastname'];
			$email 		= $_POST['email'];
			$processor=   $_POST['processor'];
			$ram	    = $_POST['ram'];
			$display    = $_POST['display'];
			$phonecmp 	= $_POST['phonecmp'];
			$storage 	= $_POST['storage'];
			
			
			
			
			if (empty($_POST['firstname'])) { 
			
         $namerr = 'Name is required';  
    } 
            
            if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {  
                $namerr = "Only alphabets and white space are allowed";  
            } 
			
			if (empty($_POST['lastname'])) {  
         $namErr = 'Last Name is required';  
    } 
	
            
            if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {  
                $namErr = "Only alphabets and white space are allowed";  
            }  
      
      
     
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } 
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
			 
		
		 if (empty ($_POST["ram"])) {  
            $ramErr = "ram is required";  
    } 
	if (empty ($_POST["storage"])) {  
            $storageErr = "storage size is required";  
    } 
		if($namErr == "" && $emailErr == "" && $namerr =="" && $storageErr =="" && $ramErr=="" )
		{      
			$sql = "INSERT INTO nouman(firstname,lastname,email,processor,ram,display,phonecmp,storage) VALUES(?,?,?,?,?,?,?,?)";
			$stmtinsert =$db->prepare($sql);
			$result= $stmtinsert->execute([$firstname,$lastname,$email,$processor,$ram,$display,$phonecmp,$storage]);
			 echo '<script>alert("form submitted")</script>';
		}
		}
			?>

<div id="header-wrapper">	
		<h1><a href="index.html"><p style="color:white; font-size: 70px;">CompareTech</p></a></h1>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="index.html"  title="">Homepage</a></li>
					<li><a href="#"  title="">Add phone(For Manufacturer only)</a></li>	
                  	<li>
<?php
            session_id('session');  
            session_start();        
            if(isset($_SESSION['valid']))
                echo("<a href = \"logout.php\"><input class = \"button\" id = \"logout\" value = \"Log Out\"/></a>");
            else
                
                 echo("<a href = \"login.php\"><input class = \"button\" id = \"logout\" value = \"Log In\"/></a>");
            ?>
			
</li>			
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="page-wrapper">
	<div id="page" class="container">
		
		</div>
</div>

       <div class = "content">
	   <form id = "form" method="post">
              <div class = "labels">
			  <h1>Add phone</h1>
			  <hr>
			  <h1 class = "labels">Phone Company </h1>
			  <select  name = "phonecmp">
                                <option selected = "selected"> SAMSUNG </option>
                                <option> ONEPLUS </option>
                                <option> IPHONE </option>
                                <option> XIAOMI </option>
                                 </select>
								 <hr>
				 <h1 class = "labels">PROCESSOR</h1>
                    <input class = "inputtext" name = "processor" type = "text" placeholder = "processor" size = "30"/>
					<h1 class = "labels">RAM</h1> 
					<label> <input type = "radio" name = "ram" value = "4" /> 4GB </label>
                    <label> <input type = "radio" name = "ram" value = "6" /> 6GB </label>
                    <label> <input type = "radio" name = "ram" value = "8" /> 8GB </label>
					<span style="color:red"> <?php echo $ramErr; ?> </span>
					<h1 class = "labels">STORAGE</h1> 
					<label> <input type = "radio" name = "storage" value = "32" /> 32GB </label>
                    <label> <input type = "radio" name = "storage" value = "64" /> 64GB </label>
                    <label> <input type = "radio" name = "storage" value = "128" /> 128GB </label>
					<span style="color:red"> <?php echo $storageErr; ?> </span>
					<h1 class = "labels">DISPLAY SIZE</h1>
                    <input class = "inputtext" name = "display" type = "text" placeholder = "SIZE" size = "30"/>
					<hr>
								  <h1 class = "labels">Personal Information</h1>
                 <label for="firstname"><input class = "inputtext" name = "firstname" type = "text" placeholder = "First Name" size = "30"/>
                  <span style="color:red"> <?php echo $namerr; ?> </span>  
                 <input class = "inputtext" name = "lastname" type = "text" placeholder = "Last Name" size = "30"/>
                 <span style="color:red"> <?php echo $namErr; ?> </span>
                 <input class = "inputtext" name = "email" type = "text" placeholder = "Email Address" size = "30"/>
				 <span style="color:red"> <?php echo $emailErr; ?> </span>
				 <hr>
				 <input class = "button"  name = "submitbtn" type = "submit" value = "Submit Form" />
				 </form>

				 </body>
				 </html>
					