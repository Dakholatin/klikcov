<?php

	session_start();
	
	//include_once:digunakan agar bisa mengakses semua konstanta yang ada di helper
	include_once("function/helper.php");
	
	$page = isset($_GET['page']) ? $_GET['page'] : false ;
	
	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
	$pdp_id = isset($_SESSION['pdp_id']) ? $_SESSION['pdp_id'] : false;
	$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
	$status = isset($_SESSION['status']) ? $_SESSION['status'] : false;
	
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>klik-Cov</title>
		
		<link href="<?php echo BASE_URL."css/style.css";?>" type="text/css" rel="stylesheet"/>
	</head>

	<body>
	
		<div id="container">
			<div id="header">
				<a href="<?php echo BASE_URL."index.php";?>">
					<img src="<?php echo BASE_URL."images/Klik.png";?>"/>
				</a>
				
				<div id="menu">
					<div id="user">
						<?php
							if($user_id){
								echo "Hi <b>$nama</b>, 
									 <a href='".BASE_URL."index.php?page=my_profile'>My Profile</a>
									 <a href='".BASE_URL."logout.php'>Logout</a>";
							}else{
								echo "<a href='".BASE_URL."index.php?page=login'>Login</a>
									  <a href='".BASE_URL."index.php?page=register'>Register</a>";
							}
						?>
					</div>
				</div>
				
			</div>
			
			<div id="content">
				<?php 
					$filename = "$page.php";
					
					if (file_exists($filename)){
						include_once($filename);
					}else{
						echo 
						'<table><tr>
						<td>
						<a href="index.php?page=login">
						<div class="fitur-image">
							<img src="images/info-covid.jpg">
							<p>Informasi Pasien COVID-19</p>
						</div>
						</a>
						</td>
						
						<td>
						<a href="index.php?page=login">
						<div class="fitur-image">
							<img src="images/input-covid.jpg">
							<p>Input Data Pasien COVID-19</p>
						</div>
						</a>
						</td>
						
						<td>
						<a href="index.php?page=login">
						<div class="fitur-image">
								<img src="images/info-pdp.jpg">
							<p>Informasi PDP</p>
						</div>
						</a>
						</td>
						
						<td>
						<a href="index.php?page=login">
						<div class="fitur-image">
								<img src="images/input-pdp.jpg">
							<p>Input Data PDP</p>
						</div>
						</a>
						</td>
						</tr>
						</table>';
						}
					?>
				
			</div>
			
			<div id="footer">
				<p>copyright klik-Cov 2020</p>
			</div>
		</div>
	
	</body>

</html>