
	<?php
	include "koneksi.php";
	$getuser= mysqli_query($connection,"SELECT * FROM akun_perusahaan");

	$getfoto= mysqli_query($connection,"SELECT * FROM perusahaan");


	session_start();

if ( isset( $_SESSION['login_user'] ) ) {
		$user=$_SESSION['login_user'];
} else {

    header("Location: login.php");
}


	?>

<!DOCTYPE html>
<html>
<head>
	<title>Applyed</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link href="applyed.css" type="text/css" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="Joker.html">JOKER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active" style="border: 1px solid !important">
        <a class="nav-link" href="dashborad.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" style="border: 1px solid !important; margin-left: 6px; ">
        <a class="nav-link" href="login.php" >Logout <span class="sr-only">(current)</span></a>
      </li>
   </ul>
  </div>
</nav>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="garisputih">
    <h1 class="display-4 text-white">APPLY</h1>
    </div>
    <hr class="hr1">
    <p class="lead text-white">beranda -> applyed</p>
  </div>
</div>

<div class="container bodykiri">
	<div class="row">
		<div class="col-md-3">
			<div class="card" style="width: 18rem;">
				  <div class="card-body">
				  	<?php

				  	 	 $row =mysqli_fetch_assoc($getuser);
				  	 	 $row2 =mysqli_fetch_assoc($getfoto);

				  	 	 ?>
				  	 <img src="<?= $row2["logo"];?>" width="100">
				  	 <div class="ctextatas">
				  	 	<center>



					   <h5 class="card-title"> Hai, <?php echo "$user"; ?> </h5>
					    <p class="card-text">ID	<?php  echo $row["id_perusahaan"]; ?> </p>
					    </center>
					    </div>
					  </div>
					  <ul class="list-group list-group-flush text-center">
					    <li class="list-group-item"> <a href="pasanglowongan.php">Pasang Lowongan</a></li>
					      <li class="list-group-item">Edit Profile</li>
					       <li class="list-group-item">Bantuan</li>
					  </ul>
		</div>
	</div>

			<div class="col-md-9">

			<h2 class=" text-center textkanan">ANDA BELUM MEMILIKI (jumlah) apply </h2>

			<div class="container kotakapply">
				<div class="card text-center">
					  <div class="card-header">
					    Featured
					  </div>
			<table class="table">
	 		<tr>
	 			<th>NO</th>
	 			<th>NIM</th>
	 			<th>Nama</th>
	 			<th>IPK</th>
	 			<th>No.Telp</th>

	 		</tr>
	 		<?php

				include 'koneksi.php';
				$getMhs = mysqli_query($connection,"SELECT * FROM mahasiswa INNER JOIN lamar WHERE lamar.nim = mahasiswa.nim");
				if (mysqli_num_rows($getMhs)==0) {
					echo "Tidak Ada Data";
				}
				else{
					$no = 1;
					while ($fetchMhs = mysqli_fetch_assoc($getMhs)) {
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$fetchMhs["nim"]."</td>";
						echo "<td>".$fetchMhs["nama"]."</td>";
						echo "<td>".$fetchMhs["ipk"]."</td>";
						echo "<td>".$fetchMhs["no_hp"]."</td>";

			 			echo "</tr>";
			 			$no++;
					}
				}
	 		?>
	 	</table>
				</div>
			</div>
</div>
</div>


</body>
</html>
