<?php 
	include ('connection.php');
	
	session_start();
	session_unset();
	session_destroy();
	
?>
<p>You are logged out successfully.<a href="index.php">Click Here</a>to go to Home Page.</p>