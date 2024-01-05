<?php
	
	if($user_id){
		$module = isset($_GET['module']) ? $_GET['module'] : false;
		$action = isset($_GET['action']) ? $_GET['action'] : false;
		$mode = isset($_GET['mode']) ? $_GET['mode'] : false;
	}else{
		header("location: ".BASE_URL."index.php?page=login");
	}
	
?>

<table><tr>
	<td>
		<a href="index.php?page=my_profile&module=info-cov&action=list">
		<div class="fitur-image">
			<img src="images/info-covid.jpg">
			<p>Informasi Pasien COVID-19</p>
		</div>
		</a>
	</td>
						
	<td>
		<a href="index.php?page=my_profile&module=data-cov&action=input-data">
		<div class="fitur-image">
			<img src="images/input-covid.jpg">
			<p>Input Data Pasien COVID-19</p>
		</div>
		</a>
	</td>
						
	<td>
		<a href="index.php?page=my_profile&module=info-pdp&action=list">
		<div class="fitur-image">
			<img src="images/info-pdp.jpg">
			<p>Informasi PDP</p>
		</div>
		</a>
	</td>
						
	<td>
		<a href="index.php?page=my_profile&module=data-pdp&action=inputPDP">
		<div class="fitur-image">
			<img src="images/input-pdp.jpg">
			<p>Input Data PDP</p>
		</div>
		</a>
	</td>
</tr>
</table>