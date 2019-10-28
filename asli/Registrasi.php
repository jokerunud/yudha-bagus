
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
	<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
			<a class="navbar-brand font-weight-bold text-white" href="index.php">JOKER</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item ">
					<a class="nav-link font-weight-bold text-white" href="index.php">HOME</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link font-weight-bold text-white" href="Registrasi.php">SING IN<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link font-weight-bold text-white" href="login.php">LOG OUT</a>
				</li>
			</ul>
	</nav>
<center>
	<div class="h1 text-white font-weight-bold"><h1>SIGN UP</h1></div>
	<hr class="hr1">
	<!--FORMULIR -->
	<form class="form-override shadow-lg" method="post" name="post" enctype="multipart/form-data">
  <div class="form-col">
  	<div class="form-group row">
     <!--Nama -->
		 <label for="inputName" class="col-sm-4 col-form-label for" >Nim</label>
      <input type="text" class="form-control form-control-md col-sm-8" id="inputNama4" placeholder="NIM" name="nim">
    </div>

  	<div class="form-group row ">
  		<!--NIM -->
			<label for="inputName" class="col-sm-4 col-form-label for">Password</label>
      <input type="password" class="form-control form-control-md col-sm-8" id="inputNim4" placeholder="PASSWORD" name="password">
    </div>
	    <div class="form-group row ">
	    	<!--tempat lahir -->
				<label for="inputName" class="col-sm-4 col-form-label for">Nama</label>
	      <input type="text" class="form-control form-control-md col-sm-8" id="tempatlahir1" placeholder="NAMA" name="nama">
	    </div>
	  	<div class="form-group row">
	    	<!--tgllahir-->
				<label for="inputName" class="col-sm-4 col-form-label for">Tanggal Lahir</label>
	  		<input class="form-control form-control-md col-sm-8" type="date" placeholder="Tanggal Lahir" name="tgl_lahir">
	  	</div>
    <div class="form-group row">
        <!--fakultas-->
			<label for="inputName" class="col-sm-4 col-form-label for">Tempat Lahir</label>
      <input type="text" class="form-control form-control-md col-sm-8" id="inputFakultas" placeholder="TEMPAT LAHIR" name="tempt_lahir">
    </div>
    <div class="form-group row">
    	<!--Prodi -->
			<label for="inputName" class="col-sm-4 col-form-label for">Fakultas</label>
      <input type="text" class="form-control form-control-md col-sm-8" id="inputProdi4" placeholder="FAKULTAS" name="fakultas">
    </div>
    <div class="form-group row">
	    	<!--Semester <-->
				<label for="inputName" class="col-sm-4 col-form-label for">Prodi</label>
	      <input type="text" class="form-control form-control-md col-sm-8" id="inputSemester4" placeholder="PRODI" name="prodi">
		</div>
    <div class="form-group row">
     <!--IPK -->
		 	<label for="inputName" class="col-sm-4 col-form-label for">Semester</label>
      <input type="txt" class="form-control form-control-md col-sm-8" id="inputIpk4" placeholder="SEMESTER" name="semester">
    </div>
     <div class="form-group row">
     <!-- NOhp -->
		 	<label for="inputName" class="col-sm-4 col-form-label for">Ipk</label>
      <input type="txt" class="form-control form-control-md col-sm-8" id="inputHp4" placeholder="IPK" name="ipk">
    </div>

    <div class="form-group row">
      <!--Email -->
			<label for="inputName" class="col-sm-4 col-form-label for">No Hp</label>
      <input type="txt" class="form-control form-control-md col-sm-8" id="inputEmail4" placeholder="NO HP" name="no_hp">
    </div>

    <div class="form-group row">
      <!--Password -->
			<label for="inputName" class="col-sm-4 col-form-label for">Email</label>
      <input type="email" class="form-control form-control-md col-sm-8" id="inputPassword4" placeholder="EMAIL" name="email">
    </div>

    <div class="form-group row">
      <!--Password -->
      <label for="inputName" class="col-sm-4 col-form-label for">Alamat</label>
      <input type="txt" class="form-control form-control-md col-sm-8" id="inputPassword4" placeholder="ALAMAT" name="alamat">
    </div>

    <div class="form-group row">
      <!--Password -->
      <label for="inputName" class="col-sm-4 col-form-label for">Upload Foto</label>
      <input type="file" class="form-control form-control-md col-sm-8" id="inputPassword4" placeholder="" name="foto">
    </div>

  </div>
  <div class="form-group">
  </div>


	<button type="submit" class="btn btn-outline-dark btn-md" name="daftar"><a href="login.php"></a>DAFTAR</button>
</form>
 </div>
</center>
<?php



  if (isset($_POST['daftar'])) {
    $nim = $_POST['nim'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tempt_lahir = $_POST['tempt_lahir'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];
    $semester= $_POST['semester'];
    $ipk = $_POST['ipk'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $foto = $_FILES['foto'];




    include("koneksi.php");
    if (isset($foto["tmp_name"])|| $foto["tmp_name"]=="") {
      $filepath = "upload/".basename($foto["name"]);
      move_uploaded_file($foto["tmp_name"], $filepath);
    }

        $query = mysqli_query($connection,"INSERT INTO mahasiswa VALUES('$nim','$password','$nama','$tgl_lahir','$tempt_lahir','$fakultas','$prodi','$semester','$ipk','$no_hp','$email','$alamat','$filepath')");
      
    die();
    echo "Gagal!";
   }


   ?>

</body>
</html>
