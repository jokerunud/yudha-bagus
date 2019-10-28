
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Telusuri Pekerjaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="footer_styles.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  		  <a class="navbar-brand font-weight-bold text-white" href="index.php">JOKER</a>
  		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  		    <span class="navbar-toggler-icon"></span>
  		  </button>
  		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  		  <ul class="navbar-nav ml-auto">
  		    <li class="nav-item active">
  		      <a class="nav-link font-weight-bold text-white" href="index.php">HOME</a>
  		    </li>
          <li class="nav-item">
  		      <a class="nav-link font-weight-bold text-white" href="login.php">LOGIN</a>
  		    </li>
  		    <li class="nav-item">
  		      <a class="nav-link font-weight-bold text-white" href="logout.php">LOGOUT</a>
  		    </li>
  		  </ul>
  	</nav>
    <div class="row">
      <div class="col-lg-3 mw-25">

      </div>

      <div class="col-lg-7 mt-xl-5">
        <form action="tambahdata.php" method="post">
        <div class="col-lg-12 mt-xl-5">
          <?php
            include 'koneksi.php';
            $getData = mysqli_query($connection,"SELECT * FROM detail_lowongan");
            while ($fetchData=mysqli_fetch_assoc($getData)) {
          ?>
           <div class='row mw-100'>
             <div class='card mb-3' >
               <div class='row no-gutters'>
                 <div class='col-md-9'>
                   <div class='card-body' style="width:1000px;">
                     <h5 class='card-title'><strong><?php echo $fetchData['nama_pekerjaan'] ?></strong></h5>
                     <p class="card-text"><?php echo $fetchData['deskripsi'] ?></p>
                     <p class='card-subtitle mb-2 text-muted'>
                       <?php echo $fetchData['jenis'] ?>
                       <?php echo $fetchData['bidang'] ?>
                     </p>
                   </div>
                 </div>
                 <div class='col-md-3'>
                    <div class='card-body'>
                      <strong class='card-text'><?php echo $fetchData['gaji'] ?></strong><br>
                      <button type='button' class='btn btn-success mt-md-5 app'name='apply'>Daftar</button>
                    </div>
                 </div>
               </div>
             </div>
           </div>
          <?php }?>

        </div>
      </div>
    </div>
    </form>

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4 fo mt-5">
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3 mb-1">
            <h5 class="text-uppercase upper">CONTACT US</h5>
            <p class="text-white ket">+62 948 588 666</p>
            <p class="text-white ket">JOKER</p>
            <p class="text-white ket">JobSeeker@mail.com</p>
            <p class="text-white ket">@joker.id</p>
          </div>
          <hr class="clearfix w-100 d-md-none pb-3 float-right">
          <div class="col-md-5 mb-md-0 mb-4 mr-md-3 mt-md-5">
            <p class="float-right logo1"><span class="text-white logo font-weight-bold">JOKER</span><br><span class="text-white float-right mt-0">Job Seeker</span></p>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
