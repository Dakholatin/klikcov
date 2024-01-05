<?php

	include_once("function/koneksi.php");
	include_once ("function/helper.php");
	
	$no_pasien = $_POST['no_pasien'];
	$nama = $_POST['nama'];
	$pneumonia = $_POST['pneumonia'];
	$sc_pneumonia = $_POST['sc_pneumonia'];
	$contact_covid = $_POST['contact_covid'];
	$sc_contact = $_POST['sc_contact'];
	$fever = $_POST['fever'];
	$sc_fever = $_POST['sc_fever'];
	$age = $_POST['age'];
	$sc_age = $_POST['sc_age'];
	$sex = $_POST['sex'];
	$sc_sex = $_POST['sc_sex'];
	$tmax = $_POST['tmax'];
	$sc_tmax = $_POST['sc_tmax'];
	$mrs = $_POST['mrs'];
	$sc_mrs = $_POST['sc_mrs'];
	$nlr = $_POST['nlr'];
	$sc_nlr = $_POST['sc_nlr'];
	

	$dataForm = http_build_query($_POST);
	
	$query = mysqli_query($koneksi, "SELECT * FROM data_pdp WHERE no_pasien='$no_pasien'");
	
	if(mysqli_num_rows($query)== 0){
		header("location: ". BASE_URL."index.php?page=my_profile&notif=no_pasien&$dataForm ");
	}else{
		mysqli_query ($koneksi, "INSERT INTO data_pdp (no_pasien, name, pneumonia, sc_pneumonia, contact_covid, sc_contact, fever, sc_fever, age, sc_age, sex, sc_sex, tmax, sc_tmax, mrs, sc_mrs, nlr, sc_nlr)
								 VALUES ('$no_pasien', '$nama', '$pneumonia', '$sc_pneumonia', '$contact_covid', '$sc_contact', '$fever', '$sc_fever', '$age', '$sc_age', '$sex', '$sc_sex', '$tmax', '$sc_tmax', '$mrs', '$sc_mrs', '$nlr', '$sc_nlr')");
		
		header("location: ".BASE_URL."index.php?page=my_profile&module=data-pdp&action=alert");
		
	}	
	
?>
