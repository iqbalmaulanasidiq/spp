<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   <link rel="icon" href="img/smk.png">

    <title>Pembayaran Spp</title>
    <style >
    	.col-md-4col-md-offset-4{
    		margin-top: 20px;
    	}
    	body{
    		background:url('img/bg.jpg');
    		background-size: 1000px;
    	}
    </style>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
</head>
<body>

	
	<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<div  class="panel panel-info">
		<div class="panel-heading">
			<h2>LOGIN</h2>
			<h3>Pembayaran SPP</h3>
			<?php if (isset($error) ) :  ?>
				<div class="alert alert-warning">
		<span><b>Peringatan!!</b>Form Belum Lengkap</span>
		</div>
	<?php endif;  ?>

	</div>	
	<div class="panel-body">
		
	<form action="cek_login.php" method="post">
		<table class="table">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input class="form-control" type="text" name="username" placeholder="Masukan Username">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input class="form-control" type="Password" name="password" placeholder="password">
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button class="btn btn-success" name="login">LOGIN</button>
				</td>
			</tr>
		</table>
	</form>
</div>
</div>
</div>
	</div>
</body>
</html>
