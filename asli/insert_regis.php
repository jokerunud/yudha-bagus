<?php
  if(isset($_POST["post"])){
    include 'connect.php';

    $nama = $_POST["nama_mhs"];
    $nim = $_POST["nim_mhs"];
    $tempat = $_POST["tempat"];
    $lahir = $_POST["tgl_lahir"];
    $fak = $_POST["fakultas"];
    $prodi = $_POST["prodi"];
    $smt = $_POST["semester"];
    $ipk = $_POST["ipk"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];
    $sql="INSERT INTO mahasiswa VALUES('$nim', '$nama','$tanggal_lhr','$tempat_lhr','$fakultas','$prodi','$smester','$ipk','$no_hp','$email')";
    $connection->query($sql);
  }

  header("location:Registrasi.php");
  exit();
?>
s
