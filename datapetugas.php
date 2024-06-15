<style >
    	.col-md-4col-md-offset-4{
    		margin-top: 20px;
    	}
    	body{
    		background:url('img/q.jpg');
    		background-size: 1000px;
    	}
    </style>







<?php include 'header.php'; ?>
<style >
	.btn{
		margin-bottom: 10px;
	}
</style>
<div class="container">
	<div class="page-header">
<h2> DATA PETUGAS SMK NEGERI 1 CISARUA</h2>
	</div>
<a class="btn btn-primary " href="tambahPetugas.php">TAMBAH DATA</a>
<?php
	?>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>NO</th>
 		<th>ID</th>
 		<th>NAMA PETUGAS</th>
		<th>AKSI</th>
 	</tr>
 	<?php 
 	include 'koneksi.php';
	$data = $konek -> query("SELECT * FROM guru ORDER BY idguru DESC");	
 	$i=1; 
 	while($dta = mysqli_fetch_assoc($data) ):
 	 ?>
 	 <tr>
 	 	<td width="40px" align="center"><?= $i; ?></td>
 	 	<td align="center"><?= $dta['idguru'] ?></td>
 	 	<td><?= $dta['namaguru'] ?></td>
 	 	<td width="160px">
 	 		<a class="btn btn-warning btn-sm" href="ubahGR.php?id=<?= $dta['idguru'] ?>">EDIT</a> 
 	 		<a class="btn btn-danger btn-sm" href="hapusGR.php?id=<?= $dta['idguru'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data?')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
</body>
</div>
</html>
