<style >
    	.col-md-4col-md-offset-4{
    		margin-top: 20px;
    	}
    	body{
    		background:url('img/q.jpg');
    		background-size: 1000px;
    	}
    </style>







<title>Pembayaran Spp</title>
<?php
include 'koneksi.php';

include 'header.php';
?>

<style >
	.btn{
		margin-bottom: 10px;
	}

</style>
<div class="container">
	<div class="page-header">
<h2> DATA WALIKELAS SMK NEGERI 1 CISARUA</h2>
	</div>
<table class="table table-bordered table-striped" >
<tr>
	<th>NO</th>
	<th>KELAS</th>
	<th>PROGRAM KEAHLIAN</th>
	
</tr>
<?php
	$data = $konek -> query("SELECT * FROM kelas");

	$i = 1;
	while($dta = mysqli_fetch_assoc($data)) :
	?>
	<tr>
		<td width="40" align="center"><?=$i;?></td>
		<td align="center"><?= $dta['kelas'] ?></td>
		<td><?= $dta['program'] ?></td>
		
	</tr>
	<?php $i++ ; ?>
<?php endwhile; ?>
</table>
</div>
