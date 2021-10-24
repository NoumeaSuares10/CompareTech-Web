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
					<li><a href="#"  title="">Add phone(For manufacturer only)</a></li>					
				</ul>
			</div>
		</div>
<div class = "content">

             <form id = "form" action = "" method="POST">
                 
                 <h1>login</h1>
                 <label for="username"><input class = "inputtext" name = "username" type = "text" placeholder = "username" size = "30"/>
                 <hr>
                 <label for="password"><input class = "inputtext" name = "password" type = "text" placeholder = "password" size = "30"/>
                 

                 <hr>
                    
                    <input class = "button" type = "submit" value = "Submit" name = "submit" id = "submit" onclick = "return validate()"/>
                    

            </form>
            
            <?php
			error_reporting(E_ERROR | E_WARNING | E_PARSE);
            
            function validate($username, $password)
            {
                
                $accountDataFile = fopen('accountData.txt', 'r');
                if ($accountDataFile) 
                    while (($userData = fgets($accountDataFile)) !== false) 
                    {
                        $userData = explode(":", $userData);
                       
                        if(($username === trim($userData[0])) && ($password === trim($userData[1])))
                        {
                            fclose($accountDataFile);
                            return true;
                        }
 
                    }
                    
                    fclose($accountDataFile);
                    return false;
            }
            session_id('session');
            session_start();
            
            if ($_SESSION['valid'] === true)
                die("<script>location.href = 'form.php'</script>");

            
            if(isset($_POST['submit']))
            {
                $username = trim($_POST['username']);      
                $password = trim($_POST['password']);
                $usernamenou = "/[a-zA-Z0-9]+/";                                    
                $passwordnou = "/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+){4}$/";    
                
                if(!preg_match($usernamenou, $username))
                    echo("<div class = \"error\" >Invalid User Name. May only contain letters and digits. </div>");
                
                else if(validate($username, $password))
                {
                    $_SESSION['valid'] = true;
                    $_SESSION['username'] = $username;

                    die("<script>location.href = 'form.php'</script>");
                }
                else
                {
                    $_SESSION['int'] = 0;
                    echo ("<div class = \"error\" >Incorrect credentials. Please try again.</br></div>");   
                }
            }
        ?>
        </div>
    