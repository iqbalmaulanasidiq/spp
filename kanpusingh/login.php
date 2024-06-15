<html>
<head>
 <title>E-Kinerja</title>
 <link rel="stylesheet" type="text/css" href="style.css">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body >
<div >
  

</div>
 

 
<div class="container ">
<div class="row justify-content-center">

<div class="col-lg-5">

 <div class="panel_login ">
  <h3 class="tulisan_atas ">Silahkan Masuk</h3>
  <center><img src="assets/img/logo.png" width="85px"></center><br>

  

  <form action="cek_login.php" method="post">
    <i class="fas fa-users"></i>
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required"><br>
   <i class="fas fa-unlock-alt"></i>
   <label class="mb-1">Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required"><br>

    <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                        <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                    </div>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                   <br>

   <input type="submit" class="tombol_login" value="LOGIN">




   <br/>

   <br/>
   
  </form>
  <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
    
   echo "<div class='alert'>Username atau Password Salah !</div>";
  }
 }
 ?>
<br><br><div class="card-footer text-center">
            <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
        </div>
    </div>
</div>
</div>
</div>
 
  



</body>

</html>