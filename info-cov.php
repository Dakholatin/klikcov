<?php
	
	if($user_id){
		$module = isset($_GET['module']) ? $_GET['module'] : false;
		$action = isset($_GET['action']) ? $_GET['action'] : false;
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
			
			if($user_id){
				echo "Nama	: ", $nama, "<br>";
				echo "Jenis Kelamin : ", $jk, "<br>";
				echo "Keadaan : ", "<br>";
				echo 
				"<table><tr>
					<td>pilek</td>
					<td>batuk</td>
					<td>demam</td>
				</tr>
				
				<tr>
					<td>pilek</td>
					<td>batuk</td>
					<td>demam</td>
				</tr>
				
				<tr>
					<td>pilek</td>
					<td>batuk</td>
					<td>demam</td>
				</tr>
				
				</table>";
			}
		?>
	</div>

</div>