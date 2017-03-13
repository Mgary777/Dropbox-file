<?php

	include 'header.php';
?>
   
	
	
	
	
	
	
	<?php
		if(isset($_SESSION['id'])){
			$userId = $_SESSION['id'];
			$username = $_SESSION['uid'];
			
		}else
		{
			header('Location:index.php');
		}
		
	?>
	
	Welcome, <?php echo $userId;?> Your are logged in
	

 

 </body>
</html>