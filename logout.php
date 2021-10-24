<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>comparetech</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="header-wrapper">	
		<h1><a href="index.html"><p style="color:white; font-size: 70px;">CompareTech</p></a></h1>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="index.html"  title="">Homepage</a></li>
					<li><a href="#"  title="">Add phone(For Manufacturer only)</a></li>	
                  				
				</ul>
			</div>
		</div>
	</div>
</div>
<div class = "content">

             <h1 class = "label">Logout</h1>

             <hr>
                    
           
            <?php
            session_id('session');  
            session_start();        
           

            if(isset($_SESSION['valid']))
            {
                session_destroy();
                $_SESSION['valid'] = false;
                unset($_SESSION["username"]);
                unset($_SESSION["password"]);
                echo "<h3>See you next time!</h3>";
            } 
            else 
                
                die("<script>location.href = 'login.php'</script>");
            ?>
        </div>