<?php
include_once("function/koneksi.php");
include_once("function/helper.php");

if (isset($_POST['id'])):


	$pdp_id = $_POST['id'];

	$query = mysqli_query($koneksi, "SELECT * FROM `data-cov` WHERE `cov_id`='$cov_id'");

	//untuk ngecek ada baris yang dikembalikan oleh query
	if(mysqli_num_rows($query)== 0){
		header ("location: ". BASE_URL. "index.php?page=my_profile&module=info-cov&action=list");
	}else{

		$row = mysqli_fetch_assoc($query);

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor Pasien</th>
      <th>:</th>
      <th scope="col"><?php echo $row['cov_id']; ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nama</th>
      <th>:</th>
      <th><?php echo $row['nama']; ?></th>
    </tr>
  </tbody>
</table>

<table class="table table-md">
  <thead>
    <tr class="table-primary">
      <th>Parameter</th>
      <th scope="col">Assesment</th>
      <th scope="col">Score</th>
      <!-- <th>aksi</th> -->

    </tr>
  </thead>

  <tbody>
    <?php

    ?>
    <tr>
      <th scope="row">Fever</th>
      <td><?php echo $row['fever']; ?></td>

    </tr>
    <tr>
      <th scope="row">Age</th>
      <td><?php echo $row['age']; ?></td>
    </tr>
    <tr>
      <th scope="row">Sex</th>
      <td><?php echo $row['sex']; ?></td>
    </tr>
    <tr>
      <th scope="row">Nasopharyngeal swab PCR</th>
      <td><?php echo $row['swab_pcr']; ?></td>
    </tr>
    <tr>
      <th scope="row">Virus Isolation from respiratory track</th>
      <td><?php echo $row['v_isoation']; ?></td>
    </tr>
    <tr>
      <th scope="row">Bronchoalveoral lavage/sputum PCR</th>
      <td><?php echo $row['sputum_pcr']; ?></td>
    </tr>
    <tr>
      <th scope="row">Stool PCR</th>
      <td><?php echo $row['stool_pcr']; ?></td>
    </tr>
    <tr>
      <th scope="row">IgM antibody</th>
      <td><?php echo $row['igm']; ?></td>
    </tr>
	 <tr>
      <th scope="row">IgG antibody</th>
      <td><?php echo $row['igg']; ?></td>
    </tr>









  </tbody>
</table>


<?php
	}


  ?>



<?php else: ?>
  <table class="table table-md">
    <thead>
      <tr class="table-primary">
  			<th>NO.</th>
        <th scope="col">Kode Pasien</th>
        <th scope="col">Nama Pasien</th>
  			<th>aksi</th>

      </tr>
    </thead>

    <tbody>
  		<?php

  		$query = mysqli_query($koneksi, "SELECT * FROM `data_cov` ");
  		if(mysqli_num_rows($query)>0){
  				$no = 1;
  				while($data = mysqli_fetch_array($query)){
  		?>
  		<tr>
        <th scope="row"><?php echo $no; ?></th>
        <td><?php echo $data['cov_id']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><form class="" action="" method="post">
  				<input type="hidden" name="id" value="<?php echo $data['cov_id']; ?>">
        	<input type="submit" name="submit" value="Detail" class="btn btn-primary">
        </form> </td>
      </tr>
  		<?php $no++; } ?>
  		<?php } ?>

    </tbody>
  </table>

<?php endif; ?>
