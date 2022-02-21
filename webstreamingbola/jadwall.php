<?php
//inisialisasi session
session_start();
 
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="#">

  <title>Web Streaming Basket</title>

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">
  
  <link rel="stylesheet" href="assets/css/theme.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="indexx.php" class="navbar-brand">Akbar<span class="text-primary">Streaming</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="indexx.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item active">
              <a href="jadwal.php" class="nav-link">Schedule</a>
            </li>
            <li class="nav-item">
              <a href="streaming.php" class="nav-link">Streaming</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">News</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">About Us</a>
            </li>
          </ul>

          <div class="ml-auto">
            <a href="logout.php" class="btn btn-outline rounded-pill">Log Out</a>
          </div>
        </div>
      </div>
    </nav>

  </header>

  <main>

    <div class="page-section border-top">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <h2 class="title-section" style="margin-top: 10%;">Jadwal Pertandingan</h2>
          <div class="divider mx-auto"></div>
        </div>
        <table class="styled-table" style="margin-left: auto;margin-right: auto;">
          <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Tim</th>
          </tr>
        
        <?php
        include "koneksi.php";
        $no=1;
        $ambildata = mysqli_query($con, "select *from jadwal");
        while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
        <td>$no</td>
        <td>$tampil[hari_main]</td>
        <td>$tampil[tgl_main]</td>
        <td>$tampil[jam_main]</td>
        <td>$tampil[tim]</td>
        </tr>";
        $no++;
      }
      ?>
      </table> 
        </div>
      </div> <!-- .container -->

     
  
  </main>

  <footer class="page-footer">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-3 py-3">
          <h3>Akbar<span class="text-primary">Streaming</span></h3>
          <p>Platfrom untuk streaming beberapa pertandingan basket kelas dunia</p>
       
          <p><a href="#">akbaribrahim6981@gmail.com</a></p>
          <p><a href="#">62 812-2787-2787</a></p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Quick Links</h5>
          <ul class="footer-menu">
            <li><a href="#">How it works</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Report a Bug</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>About Us</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Our Teams</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">News & Press</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Subscribe</h5>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your mail..">
          </form>

          <div class="sosmed-button mt-4">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-google"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 py-2">
       
        </div>
        <div class="col-sm-6 py-2 text-right">
          <div class="d-inline-block px-3">
            <a href="#">Privacy</a>
          </div>
          <div class="d-inline-block px-3">
            <a href="#">Contact Us</a>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->
</body>
</html>