
<div id="container-user-akses">

	<link href="<?php echo BASE_URL."css/style.css";?>" type="text/css" rel="stylesheet"/>
	<form action= "<?php echo BASE_URL."proses-cov.php"; ?>" method="POST">
	
	<?php
			$notif = isset ($_GET['notif']) ? $_GET['notif'] : false;
			$no_pasien = isset ($_GET['no_pasien']) ? $_GET['no_pasien'] : false;
			$nama = isset ($_GET['nama']) ? $_GET['nama'] : false;
			$fever = isset ($_GET['fever']) ? $_GET['fever'] : false;
			$age = isset ($_GET['age']) ? $_GET['age'] : false;
			$sex = isset ($_GET['sex']) ? $_GET['sex'] : false;
			$swab_pcr = isset ($_GET['swab_pcr']) ? $_GET['swab_pcr'] : false;
			$v_iso = isset ($_GET['v_iso']) ? $_GET['v_iso'] : false;
			$sputum = isset ($_GET['sputum']) ? $_GET['sputum'] : false;
			$stool = isset ($_GET['stool']) ? $_GET['stool'] : false;
			$igm = isset ($_GET['igm']) ? $_GET['igm'] : false;
			$igg = isset ($_GET['igg']) ? $_GET['igg'] : false;
			
			if($notif == "require"){
				echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
			}else if($notif == "no_pasien"){
				echo "<div class='notif'>Maaf, nomor pasien sudah digunakan</div>";
			}
		?>
	
		<div>
			<table><tr>
				<td><label>Nomor Pasien</label></td>
				<td>:</td>
				<td><input type="text" name="no_pasien" value="<?php echo $no_pasien;?>"/></td>
			</tr>
			<tr>
				<td><label>Nama</label></td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"/></td>
			</tr></table>
		</div>
		
		<table>
		<div class="element-form">
			<tr>
				<td>Fever</td>
				<td><input type="text" name="fever" placeholder="Assessment" value="<?php echo $fever;?>" /></td>
			</tr>
			
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" placeholder="Assessment" value="<?php echo $age;?>" /></td>
			</tr>
			
			<tr>
				<td>Sex</td>
				<td><input type="text" name="sex" placeholder="Assessment" value="<?php echo $sex;?>" /></td>
			</tr>
			
			<tr>
				<td>Nasopharyngeal swab PCR</td>
				<td><input type="text" name="swab" value="<?php echo $swab_pcr;?>" /></td>
			</tr>
			
			<tr>
				<td>Virus Isolation from respiratory track</td>
				<td><input type="text" name="v_iso" value="<?php echo $v_iso;?>" /></td>
			</tr>
			
			<tr>
				<td>Bronchoalveoral lavage/sputum PCR</td>
				<td><input type="text" name="sputum" value="<?php echo $sputum;?>" /></td>
			</tr>
			
			<tr>
				<td>Stool PCR</td>
				<td><input type="text" name="stool" value="<?php echo $stool;?>"/></td>
			</tr>
			
			<tr>
				<td>IgM antibody</td>
				<td><input type="text" name="igm" value="<?php echo $igm;?>"/></td>
			</tr>
			
			<tr>
				<td>IgG antibody</td>
				<td><input type="text" name="igg" value="<?php echo $igg;?>"/></td>
			</tr>
			
			<tr class="element-form">
				<td><span><input type="submit" value="save"/></span></td>
			</tr>
		</div>
		</table>
	</form>

</div>
