<?php
include_once("function/koneksi.php");
include_once("function/helper.php");

if (isset($_POST['id'])):


	$pdp_id = $_POST['id'];

	$query = mysqli_query($koneksi, "SELECT * FROM `data_pdp` WHERE `pdp_id`='$pdp_id'");

	//untuk ngecek ada baris yang dikembalikan oleh query
	if(mysqli_num_rows($query)== 0){
		header ("location: ". BASE_URL. "index.php?page=my_profile&module=info-pdp&action=list");
	}else{

		$row = mysqli_fetch_assoc($query);

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor Pasien</th>
      <th>:</th>
      <th scope="col"><?php echo $row['pdp_id']; ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nama</th>
      <th>:</th>
      <th><?php echo $row['name']; ?></th>
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
      <th scope="row">Signs of pneumonia on CT</th>
      <td><?php echo $row['pneumonia']; ?></td>
      <td><?php echo $row['sc_pneumonia']; ?></td>

    </tr>
    <tr>
      <th scope="row">History of close contact with /n Covid-19 confirmed patient</th>
      <td><?php echo $row['contact_covid']; ?></td>
      <td><?php echo $row['sc_contact']; ?></td>
    </tr>
    <tr>
      <th scope="row">Fever</th>
      <td><?php echo $row['fever']; ?></td>
      <td><?php echo $row['sc_fever']; ?></td>
    </tr>
    <tr>
      <th scope="row">Age</th>
      <td><?php echo $row['age']; ?></td>
      <td><?php echo $row['sc_age']; ?></td>
    </tr>
    <tr>
      <th scope="row">Sex</th>
      <td><?php echo $row['sex']; ?></td>
      <td><?php echo $row['sc_sex']; ?></td>
    </tr>
    <tr>
      <th scope="row">Tmax a</th>
      <td><?php echo $row['tmax']; ?></td>
      <td><?php echo $row['sc_tmax']; ?></td>
    </tr>
    <tr>
      <th scope="row">Meaningful respiratory symptoms</th>
      <td><?php echo $row['mrs']; ?></td>
      <td><?php echo $row['sc_mrs']; ?></td>
    </tr>
    <tr>
      <th scope="row">NLR b</th>
      <td><?php echo $row['nlr']; ?></td>
      <td><?php echo $row['sc_nlr']; ?></td>
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

  		$query = mysqli_query($koneksi, "SELECT * FROM `data_pdp` ");
  		if(mysqli_num_rows($query)>0){
  				$no = 1;
  				while($data = mysqli_fetch_array($query)){
  		?>
  		<tr>
        <th scope="row"><?php echo $no; ?></th>
        <td><?php echo $data['pdp_id']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><form class="" action="" method="post">
  				<input type="hidden" name="id" value="<?php echo $data['pdp_id']; ?>">
        	<input type="submit" name="submit" value="Detail" class="btn btn-primary">
        </form> </td>
      </tr>
  		<?php $no++; } ?>
  		<?php } ?>

    </tbody>
  </table>

<?php endif; ?>
