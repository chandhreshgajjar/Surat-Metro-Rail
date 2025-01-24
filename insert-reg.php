<?php
	include ('connection.php');
	
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$password = $_REQUEST['password'];
	
	$slide = $link->insert("user",array("user_name"=>$name,"email"=>$email,"password"=>$password,"phone"=>$phone));
	
	if($slide){
		header ("location:index.php");
	}
	else{
		header ("location:register.php");
	}
?>