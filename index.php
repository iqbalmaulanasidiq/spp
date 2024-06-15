<style >
    	.col-md-4col-md-offset-4{
    		margin-top: 20px;
    	}
    	body{
    		background:url('img/q.jpg');
    		background-size: 1000px;
    	}
    </style>

 <title>Pembayaran SPP SMKNC1SARUA</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/smk.png" />




<?php include 'header.php'; ?>
	<div class="container">
		<div class="panel-body">
	<h2>SELAMAT DATANG DI HALAMAN UTAMA WEB SPP</h2>
	<H5>SMK NEGERI 1 CISARUA</H5>

</div>
</div>
<?php 
if(isset($_POST['Kirim'])){
if(empty($_POST['namaanda'])){
	$_POST['namaanda'];
}
if(empty($_POST['emailanda'])){
	$_POST['emailanda'];
}
if(empty($_POST['nama_penerima'])){
	$_POST['nama_penerima'];
}
if(empty($_POST['email_penerima'])){
	$_POST['email_penerima'];
}

$nama = $_POST['namaanda'];
$Email = $_POST['emailanda'];
$Penerima = $_POST['nama_penerima'];
$email_penerima = $_POST['email_penerima'];
$Pesan = $_POST['Pesan']; 
$header =$_POST['emailanda'];
$subject = $_POST['subjek'];
if(mail($email_penerima, $subjek, $Pesan)){
	echo "
	<Script>
	alert('pesan berhasil terkirim');
	document.location.href ='index.php';
	</Script>
	";
}else{
	echo "
	<Script>
	alert('email gagal dikirimkan, silahkan coba lagi');
	document.location.href ='index.php';
	</Script>
	";
}
}


 ?>
