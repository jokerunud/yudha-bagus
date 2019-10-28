<?php
	session_start(); // Starting Session
	include 'koneksi.php';
	$error=''; // Variable To Store Error Message
	if (isset($_POST['btnlogin'])) {
		// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];

			$query = mysqli_query($connection,"SELECT * FROM akun_perusahaan WHERE password='$password' AND username='$username'");
			$rows = mysqli_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_user']=$username;// Initializing Session
				header('location: Beranda_perusahaan.php'); // Redirecting To Other Page
				exit;
			}
			$query = mysqli_query($connection,"SELECT * FROM akun_mahasiswa WHERE password='$password' AND username='$username'");
			$rows = mysqli_num_rows($query);
			if($rows == 1) {
				$_SESSION['login_user']=$username;// Initializing Session
				$_SESSION['data']=$username;
				header('location: Beranda_mhs.php'); // Redirecting To Other Page
				exit;
			}
			else {
				$error = "Username or Password is invalid";
		 		session_destroy();
			}
			mysqli_close($connection); // Closing Connection
	  }
		// if(empty($_SESSION['login_user'])){
		// 	header('location: index.php');
		// }

?>
