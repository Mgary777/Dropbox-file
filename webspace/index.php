<?php

	session_start();
?>

<!doctype html>
<html>
 <head>
 <title>Test</title>

 <meta charset="utf-8" />
 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />

 

 </head>

 <body>
	<h1>Megabox</h1>
	
 
 <form method = "post">
	<input type = "text" name= "txtUname">
	<input type = "password" name= "txtPassword">
	<input type = "submit" name = "submit" value ="Login">
	
 </form>
 
 <?php
   $ErrMsg = "";  
   //Execute only if the page has been posted back (not first time load)
   If ($_SERVER['REQUEST_METHOD'] == 'POST')
   {
      //Validate user input: username and password must not be blank  
      if ($_POST['txtUname'] != "" && $_POST['txtPassword'] != "")
      {
        //Authenticate the user
		define ('User', 'guest');
		define ('Pass' , 'letmein');
		if($_POST['txtUname']==User And $_POST['txtPassword']==Pass)
   {
	   
	   $_SESSION['loggedin'] = 1;
	   $_SESSION['userid'] = $_POST[‘txtUname’];
	   header("Location: private.php");
	  die();
   }   
   else
   {
      $ErrMsg = 'Incorrect username or password';
   } 
      }
      else
      {
        $ErrMsg = "Please enter a username and password";  
      }
   }
?>
 
 
 
 
 </body>
 </html>