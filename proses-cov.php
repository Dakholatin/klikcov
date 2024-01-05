<?php

	include_once("function/koneksi.php");
	include_once ("function/helper.php");
	
	$no_pasien = $_POST['no_pasien'];
	$nama = $_POST['nama'];
	$fever = $_POST['fever'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	$swab_pcr = $_POST['swab_pcr'];
	$v_iso = $_POST['v_iso'];
	$sputum = $_POST['sputum'];
	$stool = $_POST['stool'];
	$igm = $_POST['igm'];
	$igg = $_POST['igg'];
	

	$dataForm = http_build_query($_POST);
	
	$query = mysqli_query($koneksi, "SELECT * FROM data-cov WHERE no_pasien='$no_pasien'");
	
	if(mysqli_num_rows($query)== 0){
		header("location: ". BASE_URL."index.php?page=my_profile&notif=no_pasien&$dataForm ");
	}else{
		mysqli_query ($koneksi, "INSERT INTO data-cov (no_pasien, nama, fever, age, sex, swab_pcr, v_isolation, sputum_pcr, stool_pcr, igm, igg)
								 VALUES ('$no_pasien', '$nama', '$fever', '$age', '$sex', '$swab_pcr', '$v_iso', '$sputum', '$stool', '$igm', '$igg')");
		
		header("location: ".BASE_URL."index.php?page=my_profile&module=data-cov&action=alert");
		
	}	
	
?>
