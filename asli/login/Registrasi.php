<?php
// You'd put this code at the top of any "protected" page you create
 include ('koneksi.php')
// Always start this first
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    $koneksi
} else {
    // Redirect them to the login page
    header("Location: http://www.yourdomain.com/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link href="cssregistrasi.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-white font-weight-bolder" href="Joker.html">JOKER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active" style="border: 1px solid !important;">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" style="border: 1px solid !important; margin-left: 6px; ">
        <a class="nav-link" href="#" >PASANG LOWONGAN <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" style="border: 1px solid !important; margin-left: 6px;" >
        <a class="nav-link" href="#">Cari Lowongan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" style="border: 1px solid !important; margin-left: 6px;">
        <a class="nav-link" href="#">Tips Loker <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" style="border: 1px solid !important; margin-left: 6px;">
        <a class="nav-link" href="login.php">MASUK <span class="sr-only">(current)</span></a>
      </li>

   </ul>
  </div>
</nav>



<center>

	<div class="h1 text-white font-weight-bold"><h1>SIGN IN</h1></div>
	<hr class="hr1">


	<!--FORMULIR -->

	<form class="form-override shadow-lg">
  <div class="form-col">
  	<div class="form-group row">
     <!--Nama -->
		 <label for="inputName" class="col-sm-4 col-form-label for">Nama</label>
      <input type="nama" class="form-control form-control-md col-sm-8" id="inputNama4" placeholder="Nama">
    </div>

  	<div class="form-group row ">
  		<!--NIM -->
			<label for="inputName" class="col-sm-4 col-form-label for">NIM</label>
      <input type="nim" class="form-control form-control-md col-sm-8" id="inputNim4" placeholder="Nim">
    </div>
	    <div class="form-group row ">
	    	<!--tempat lahir -->
				<label for="inputName" class="col-sm-4 col-form-label for">Tempat Lahir</label>
	      <input type="Tempatlahir" class="form-control form-control-md col-sm-8" id="inputSemester4" placeholder="Tempat Lahir">
	    </div>
	  	<div class="form-group row">
	    	<!--tgllahir-->
				<label for="inputName" class="col-sm-4 col-form-label for">Tanggal Lahir</label>
	  		<input class="form-control form-control-md col-sm-8" type="date" placeholder="Tanggallahir">
	  	</div>


    <div class="form-group row">
        <!--fakultas-->
				<label for="inputName" class="col-sm-4 col-form-label for">Fakultas</label>
      <input type="text" class="form-control form-control-md col-sm-8" id="inputFakultas" placeholder="Fakultas">
    </div>

      <div class="form-group row">
    <!--Prodi -->
		<label for="inputName" class="col-sm-4 col-form-label for">Program Studi</label>
      <input type="prodi" class="form-control form-control-md col-sm-8" id="inputProdi4" placeholder="Prodi">
    </div>

    <div class="form-group row">
	    	<!--Semester -->
				<label for="inputName" class="col-sm-4 col-form-label for">Semester</label>
	      <input type="semester" class="form-control form-control-md col-sm-8" id="inputSemester4" placeholder="Semester">
	</div>

    <div class="form-group row">
     <!--IPK -->
		 	<label for="inputName" class="col-sm-4 col-form-label for">IPK</label>
      <input type="ipk" class="form-control form-control-md col-sm-8" id="inputIpk4" placeholder="Ipk">
    </div>

     <div class="form-group row">
     <!-- NOhp -->
		 	<label for="inputName" class="col-sm-4 col-form-label for">Nomor Telepon</label>
      <input type="hp" class="form-control form-control-md col-sm-8" id="inputHp4" placeholder="Hp">
    </div>

    <div class="form-group row">
      <!--Email -->
				<label for="inputName" class="col-sm-4 col-form-label for">E-Mail</label>
      <input type="email" class="form-control form-control-md col-sm-8" id="inputEmail4" placeholder="Email">
    </div>

    <div class="form-group row">
      <!--Password -->
				<label for="inputName" class="col-sm-4 col-form-label for">Password</label>
      <input type="password" class="form-control form-control-md col-sm-8" id="inputPassword4" placeholder="Password">
    </div>
  </div>

  <div class="form-group">

  </div>
<button type="button" class="btn btn-outline-dark btn-md">DAFTAR</button>
</form>

 </div>

</center>



</body>
</html>
