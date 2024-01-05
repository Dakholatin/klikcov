<?php
	include_once("function/koneksi.php");
	include_once ("function/helper.php");
	
	if($user_id){
		$module = isset($_GET['module']) ? $_GET['module'] : false;
		$action = isset($_GET['action']) ? $_GET['action'] : false;
	}else{
		header("location: ".BASE_URL."index.php?page=login");
	}
	
?>

<div id="bg-page-profile">
	<center><h2>Informasi Pasien PDP</h2></center>
	<div id="profile-content">
		<?php
			$ambildata = mysqli_query($koneksi, "SELECT * FROM data_pdp order by pdp_id");
			while($a=mysqli_fetch_assoc($ambildata)){
			?>
				<ul>
					<li><b>ID Pasien :</b><?php echo $a['pdp_id']; ?></li>
					<li><b>Nama : </b><?php echo $a['name']; ?></li>
					<li><b>No Pasien :</b><?php echo $a['no_pasien']; ?></li>
				</ul>
			<?php
			} ?>
			

	</div>

</div>