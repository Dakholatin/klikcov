<?php

	session_start();
	
	unset($_SESSION['user_id']);
	unset($_SESSION['nama']);
	unset($_SESSION['status']);
	
	header("location: index.php");

?>