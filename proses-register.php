<?php

	include_once("function/koneksi.php");
	include_once ("function/helper.php");
	
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$no_telp = $_POST['no_telp'];
	$jk = $_POST['jk'];
	$status = $_POST['status'];
	$alamat = $_POST['alamat'];
	$password = $_POST['password'];
	$re_password = $_POST['re_password'];
	
	unset($_POST['password']);
	unset($_POST['re_password']);
	$dataForm = http_build_query($_POST);
	
	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
	
	if(empty($nama_lengkap) || empty($email) || empty($no_telp)  || empty($jk) || empty($status) || empty($alamat) || empty($password)){
		header("location: ". BASE_URL."index.php?page=register&notif=require&$dataForm ");
	}elseif($password != $re_password){
		header("location: ". BASE_URL."index.php?page=register&notif=password&$dataForm ");
	}elseif(mysqli_num_rows($query)== 1){
		header("location: ". BASE_URL."index.php?page=register&notif=email&$dataForm ");
	}else{
		$password =($password);
		mysqli_query ($koneksi, "INSERT INTO user (nama, email, no_telp, jenis_kelamin, status, alamat, password)
								 VALUES ('$nama_lengkap', '$email', '$no_telp', '$jk', '$status', '$alamat', '$password')");
		
		header("location: ".BASE_URL."index.php?page=login");
	}	
	
?>
