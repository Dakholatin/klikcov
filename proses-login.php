<?php

	include_once("function/koneksi.php");
	include_once("function/helper.php");
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password'");

	//untuk ngecek ada baris yang dikembalikan oleh query
	if(mysqli_num_rows($query)== 0){
		header ("location: ". BASE_URL. "index.php?page=login&notif=true");
	}else{
	
		$row = mysqli_fetch_assoc($query);
		
		session_start();
		
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['status'] = $row['status'];
		
		header("location: ". BASE_URL. "index.php?page=home");
	}
?>