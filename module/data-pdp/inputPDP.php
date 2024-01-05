
<div id="container-user-akses">

	<link href="<?php echo BASE_URL."css/style.css";?>" type="text/css" rel="stylesheet"/>
	<form action= "<?php echo BASE_URL."proses-pdp.php"; ?>" method="POST">

	<?php
			$notif = isset ($_GET['notif']) ? $_GET['notif'] : false;
			$no_pasien = isset ($_GET['no_pasien']) ? $_GET['no_pasien'] : false;
			$nama = isset ($_GET['nama']) ? $_GET['nama'] : false;
			$pneumonia = isset ($_GET['pneumonia']) ? $_GET['pneumonia'] : false;
			$sc_pneumonia = isset ($_GET['sc_pneumonia']) ? $_GET['sc_pneumonia'] : false;
			$contact_covid = isset ($_GET['contact_covid']) ? $_GET['contact_covid'] : false;
			$sc_contact = isset ($_GET['sc_contact']) ? $_GET['sc_contact'] : false;
			$fever = isset ($_GET['fever']) ? $_GET['fever'] : false;
			$sc_fever = isset ($_GET['sc_fever']) ? $_GET['sc_fever'] : false;
			$age = isset ($_GET['age']) ? $_GET['age'] : false;
			$sc_age = isset ($_GET['sc_age']) ? $_GET['sc_age'] : false;
			$sex = isset ($_GET['sex']) ? $_GET['sex'] : false;
			$sc_sex = isset ($_GET['sc_sex']) ? $_GET['sc_sex'] : false;
			$tmax = isset ($_GET['tmax']) ? $_GET['tmax'] : false;
			$sc_tmax = isset ($_GET['sc_tmax']) ? $_GET['sc_tmax'] : false;
			$mrs = isset ($_GET['mrs']) ? $_GET['mrs'] : false;
			$sc_mrs = isset ($_GET['sc_mrs']) ? $_GET['sc_mrs'] : false;
			$nlr = isset ($_GET['nlr']) ? $_GET['nlr'] : false;
			$sc_nlr = isset ($_GET['sc_nlr']) ? $_GET['sc_nlr'] : false;

			if($notif == "require"){
				echo "<div class='btn btn-warning col-md-12'>Maaf, kamu harus melengkapi form dibawah ini</div>";
			}else if($notif == "no_pasien"){
				echo "<div class='btn btn-danger col-md-12'>Maaf, nomor pasien sudah digunakan</div>";
			}else {
				echo "";
			}
		?>
		<br><br>
<div class='notif btn btn-primary col-md-12'>Tambah Data Pasien PDP</div>
		<div>
			<table><tr>
				<td><label>Nomor Pasien</label></td>
				<td>:</td>
				<td><input type="text" name="text" value="<?php echo $no_pasien;?>"/></td>
			</tr>
			<tr>
				<td><label>Nama</label></td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"/></td>
			</tr></table>
		</div>

	<div>
	<table>
		<div class="element-form">
			<tr>
				<td><b>Parameters</b></td>
				<td><b>Assessment</b></td>
				<td><b>Score</b></td>
			</tr>
		</div>

		<div class="element-form">
			<tr>
				<td class="col1"><b>Signs of pneumonia on CT</b></td>
				<td><input type="text" name="pneumonia" placeholder="Assessment" value="<?php echo $pneumonia;?>" /></td>
				<td><input type="text" name="sc_pneumonia" placeholder="Score" value="<?php echo $sc_pneumonia;?>" /></td>
			</tr>

			<br>

			<tr>
				<td class="col1"><b>History of close contact with /n Covid-19 confirmed patient</b></td>
				<td><input type="text" name="contact_covid" placeholder="Assessment" value="<?php echo $contact_covid;?>" /></td>
				<td><input type="text" name="sc_contact" placeholder="Score" value="<?php echo $sc_contact;?>"/></td>
			</tr>

			<tr>
				<td class="col1"><b>Fever</b></td>
				<td><input type="text" name="fever" placeholder="Assessment" value="<?php echo $fever;?>" /></td>
				<td><input type="text" name="sc_fever" placeholder="Score" value="<?php echo $sc_fever;?>" /></td>
			</tr>

			<tr>
				<td class="col1"><b>Age</b></td>
				<td><input type="text" name="age" placeholder="Assessment" value="<?php echo $age;?>" /></td>
				<td><input type="text" name="sc_age" placeholder="Score" value="<?php echo $sc_age;?>"/></td>
			</tr>

			<tr>
				<td class="col1"><b>Sex</b></td>
				<td><input type="text" name="sex" placeholder="Assessment" value="<?php echo $sex;?>"/></td>
				<td><input type="text" name="sc_sex" placeholder="Score" value="<?php echo $sc_sex;?>"/></td>
			</tr>

			<br>

			<tr>
				<td class="col1"><b>Tmax a</b></td>
				<td><input type="text" name="tmax" placeholder="Assessment" required value="<?php echo $tmax;?>"/></td>
				<td><input type="text" name="sc_tmax" placeholder="Score" required value="<?php echo $sc_tmax;?>"/></td>
			</tr>

			<tr>
				<td class="col1"><b>Meaningful respiratory symptoms</b></td>
				<td><input type="text" name="mrs" placeholder="Assessment" required value="<?php echo $mrs;?>"/></td>
				<td><input type="text" name="sc_mrs" placeholder="Score" required value="<?php echo $sc_mrs;?>"/></td>
			</tr>

			<tr>
				<td class="col1"><b>NLR b</b></td>
				<td><input type="text" name="nlr" placeholder="Assessment" value="<?php echo $nlr;?>"/></td>
				<td><input type="text" name="sc_nlr" placeholder="Score" value="<?php echo $sc_nlr;?>"/></td>
			</tr>

			<tr class="element-form">
				<td><span><input type="submit" value="save"/></span></td>
			</tr>

		</div>
		</table>
	</div>

	</form>
</div>
