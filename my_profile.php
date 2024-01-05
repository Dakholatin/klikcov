<?php
	
	if($user_id){
		$module = isset($_GET['module']) ? $_GET['module'] : false;
		$action = isset($_GET['action']) ? $_GET['action'] : false;
		$mode = isset($_GET['mode']) ? $_GET['mode'] : false;
	}else{
		header("location: ".BASE_URL."index.php?page=login");
	}
	
?>

<div id="bg-page-profile">

	<div id="menu-profile">
	
		<ul>
			<li>
				<a  <?php if($module == "info-cov"){echo "class='active'";} ?> href="<?php echo BASE_URL. "index.php?page=my_profile&module=info-cov&action=list";?>">Informasi Pasien Covid-19</a>
			</li>
			<li>
				<a <?php if($module == "data-cov"){echo "class='active'";} ?> href="<?php echo BASE_URL. "index.php?page=my_profile&module=data-cov&action=input-data";?>">Input Data Pasien Covid-19</a>
			</li>
			<li>
				<a  <?php if($module == "info-pdp"){echo "class='active'";} ?> href="<?php echo BASE_URL. "index.php?page=my_profile&module=info-pdp&action=list";?>">Informasi PDP</a>
			</li>	
			<li>
				<a  <?php if($module == "data-pdp"){echo "class='active'";} ?> href="<?php echo BASE_URL. "index.php?page=my_profile&module=data-pdp&action=inputPDP";?>">Input Data PDP</a>
			</li>			
		</ul>
		
	</div>
	
	<div id="profile-content">
		<?php
			
			$file = "module/$module/$action.php";
			if(file_exists($file)){
				include_once($file);
			}else{
				echo "<h3>Maaf, halaman tersebut tidak ditemukan</h3>";
			}
		?>
	</div>

</div>