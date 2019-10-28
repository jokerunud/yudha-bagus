<?php
include('login_config.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
     <link rel="stylesheet" type="text/css" href="style_login.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <center>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">JOKER</a>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav  ml-auto mr-right mt-lg-right">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">HOME </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="login.php">LOGIN <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
    <br><br>
    <label class="he text-white">MASUK/DAFTAR</label>
    <hr class="garis">
    <div class="shadow-lg p-3 col-md-3 bg-white rounded" id="form1" style="border: 3px solid white !important;">

<form  action="" method="POST" >
  <div class="form-group col-md-9">
    <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
    </div>
        <div class="form-group col-md-9">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
      <div class="form-group form-check ">
        <button type="submit" class="btn btn-outline-dark" name="btnlogin" value="login" mr-lg-5">Masuk</button>
        <button type="button" class="btn btn-outline-dark" href="Registrasi.php">Daftar</button>
      </div>
    <span><?php echo $error; ?></span>
    </form>
    </div>
</body>
</html>
