<?php

	include_once("function/koneksi.php");
	include_once("function/helper.php");
	
	$pdp_id = $_POST['pdp_id'];
	
	$query = mysqli_query($koneksi, "SELECT * FROM data_pdp WHERE pdp_id='$pdp_id'");

	//untuk ngecek ada baris yang dikembalikan oleh query
	if(mysqli_num_rows($query)== 0){
		header ("location: ". BASE_URL. "index.php?page=my_profile&module=info-pdp&action=list");
	}else{
	
		$row = mysqli_fetch_assoc($query);
		
		session_start();
		
		$_SESSION['pdp_id'] = $row['pdp_id'];
		$_SESSION['nama'] = $row['nama'];
		
		header("location: ". BASE_URL. "index.php?page=info-pdp");
		
		"<tr>
			<td><?php echo $row['pdp_id']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['sex']; ?></td>
		</tr>";
	}
?>
	