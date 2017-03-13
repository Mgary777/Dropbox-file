<?php

	include 'header.php';
?>
   
	
	
	
	<form action = "includes/login.inc.php" method = "POST">
	<div id = "signupdiv">
		
		<input type ="text" name = "uid" placeholder ="user ID"/></br>
		<input type ="text" name = "pwd" placeholder ="password"/></br>
		</div>
	<div id = "signupbutton">
		<button type = "submit"> LOGIN </button> 
	</div>
	</form>
	
	
	<?php
		if(isset($_SESSION['id'])){
			header('Location:userpage.php');
		}else
		{
			echo "you are not logged in!";
		}
		
	?>
	<div id ="text">
		Don't have a user ID? <a href = "signup.php">Create yours now.</a>
		
	</div>
	
	

 

 </body>
</html>