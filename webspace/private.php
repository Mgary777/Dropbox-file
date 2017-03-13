<?php
	session_start();
 
	if (isset($_SESSION['loggedin']))
	{
		echo "Welcome ".$_SESSION['userid']; 
	}
	else
	{
		header('Location: index.php');
		die();
	}



?>


<p style = "text-align:right"> <a href = "logout.php">Sign out</a></p>