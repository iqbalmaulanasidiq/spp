<style >
    	.col-md-4col-md-offset-4{
    		margin-top: 20px;
    	}
    	body{
    		background:url('img/q.jpg');
    		background-size: 1000px;
    	}
    </style>







<?php 
include 'koneksi.php';

include 'header.php';
 ?>
<div class="container">
	<div class="page-header">
<h2> DATA SISWA SMK NEGERI 1 CISARUA</h2>
	</div>
 <br/> <br>
 <table class="table table-bordered table-striped">
 	<tr>
 		<th>NO</th>
 		<th>KELAS</th>
 		<th>NIS</th>
 		<th>NAMA SISWA</th>
 		<th>TAHUN AJARAN</th>
		<th>BIAYA</th>
 	</tr>
 	<?php 
 	$data = $konek ->query("SELECT * FROM siswa ORDER BY idsiswa ASC");
 	$i=1;
 	while ($dta = mysqli_fetch_assoc($data) ) : 
 	 ?>
 	 <tr>
 	 	<td><?= $i; ?></td>
 	 	<td><?= $dta['kelas'] ?></td>
 	 	<td><?= $dta['nis'] ?></td>
 	 	<td><?= $dta['namasiswa'] ?></td>
 	 	<td><?= $dta['tahunajaran'] ?></td>
 	 	<td><?= $dta['biaya'] ?></td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
 </div>
 