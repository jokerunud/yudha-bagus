<?php
// You'd put this code at the top of any "protected" page you create
	include 'koneksi.php';
// Always start this first
	session_start();
	$mahasiswa = mysqli_query($connection, "SELECT * FROM mahasiswa");
	$row = mysqli_fetch_assoc($mahasiswa);

	if ( isset( $_SESSION['login_user'] ) ) {
	    // Grab user data from the database using the user_id
	    // Let them access the "logged in only" pages
			$user=$_SESSION['login_user'];
	} else {
	    // Redirect them to the login page
	    header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="beranda.css" type="text/css" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="Joker.html">JOKER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="content.php">Telusuri Pekerjaan</a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link" href="logout.php" >Logout</a>
      </li>


   </ul>
  </div>
</nav>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="garisputih">
    <h1 class="display-4 text-white">DASHBOARD</h1>
    </div>
    <hr class="hr1">
    <p class="lead text-white">beranda -> dashboard</p>
  </div>
</div>

<div class="container bodykiri">
	<div class="row">
		<div class="col-md-3">
			<div class="card" style="width: 18rem;">
				  <div class="card-body">
				  	 <img src="<?php echo $row["foto"];?>" width="100">
				  	 <div class="ctextatas">
				  	 	<center>
					    <p class="card-text">Halo <span class="font-weight-bold"><?php echo "$user"; ?></span></p>
					    </center>
					    </div>
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item"><a href="content.php">Telusuri Lowongan Kerja</a></li>
					    <li class="list-group-item"><a href="logout.php">Keluar</a></li>
					  </ul>
		</div>
	</div>

			<div class="col-md-9">

			<h2 class="textkanan">ANDA BELUM MEMILIKI RESUME</h2>
			<h5 class="textkanan1">1.lengkapi --> 2.Lamar Pekerjaan</h5>

			<button type="button" class="btn btn-primary btn-lg butkanan">Lengkapi Profile</button>

			<div class="row gambar1">
				<img src="unudlogo.png" style="width: 400px; height: 400px;">
				</div>
			</div>


</div>
</div>


</body>
</html>
