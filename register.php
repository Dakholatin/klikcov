<?php

	if($user_id){
		header("location: ".BASE_URL);
	}

?>

<div id="container-user-akses">

	<link href="<?php echo BASE_URL."css/style.css";?>" type="text/css" rel="stylesheet"/>
	<form action= "<?php echo BASE_URL."proses-register.php"; ?>" method="POST">
		
		<?php
			$notif = isset ($_GET['notif']) ? $_GET['notif'] : false;
			$nama_lengkap = isset ($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
			$email = isset ($_GET['email']) ? $_GET['email'] : false;
			$no_telp = isset ($_GET['no_telp']) ? $_GET['no_telp'] : false;
			$jk = isset ($_GET['jk']) ? $_GET['jk'] : false;
			$status = isset ($_GET['status']) ? $_GET['status'] : false;
			$alamat = isset ($_GET['alamat']) ? $_GET['alamat'] : false;
			
			if($notif == "require"){
				echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
			}else if($notif == "password"){
				echo "<div class='notif'>Maaf, password yang kamu masukkan tidak sama</div>";
			}else if($notif == "email"){
				echo "<div class='notif'>Maaf, email yang kamu masukkan sudah terdaftar</div>";
			}
		?>
	
		<div class="element-form">
			<label>Nama Lengkap</label>
			<span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap;?>"/></span>
		</div>
	
		<div class="element-form">
			<label>Email</label>
			<span><input type="text" name="email" value="<?php echo $email;?>"/></span>
		</div>
		
		<div class="element-form">
			<label>Nomor Telepon / Handphone</label>
			<span><input type="text" name="no_telp" value="<?php echo $no_telp;?>"/></span>
		</div>
		
		<div class="element-form">
			<label>Jenis Kelamin</label>
			<span ><input type="text" name="jk" value="<?php echo $jk;?>"/></span>
		</div>
	
		<div class="element-form">
			<label>Status</label>
			<span ><input type="text" name="status" value="<?php echo $status;?>"/></span>
		</div>
		
		<div class="element-form">
			<label>Alamat</label>
			<span><textarea name="alamat"><?php echo $alamat; ?></textarea></span>
		</div>
		
		<div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password" /></span>
		</div>
		
		<div class="element-form">
			<label>Re-type Password</label>
			<span><input type="password" name="re_password" /></span>
		</div>
		
		<div class="element-form">
			<span><input type="submit" value="register" /></span>
		</div>
	
	</form>
</div>