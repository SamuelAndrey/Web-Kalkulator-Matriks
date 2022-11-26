<?php 
require 'koneksi.php';
$menu = query("SELECT * FROM menu");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Entengseng - Kalkulator matriks</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>
<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#!" class="logo">
                        <h3 class="text-secondary">Entengseng!</h3>
                        <!-- <img src="assets/images/logo.png" alt=""> -->
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="#most-popular">Start</a></li>
                        <li><a href="#!">Details</a></li>
                        <li><a href="#!">Kalkulator</a></li>
                        <li><a href="#!">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Selamat Datang</h6>
                  <h4><em>Kalkulator</em> Matriks Entengseng</h4>
                  <div class="main-button">
                    <a href="#most-popular">Mulai Sekarang</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular" id="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Daftar</em> Kalkulator</h4>
                </div>

                <div class="row">
                  <?php foreach($menu as $row) : ?> 
                    <div class="col-lg-3 col-sm-6">
                      <a href="<?= $row['link']?>">
                        <div class="item">
                          <img src="<?= $row['img']?>" alt="">
                          <h4><?= $row['judul']?><br><span><?= $row['span']?></span></h4>
                          <ul>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><i class="fa fa-check"></i> Ver..</li>
                          </ul>
                        </div>
                      </a>
                    </div>
                  <?php endforeach;?>
                </div>
                
              </div>
            </div>
          </div>
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Daftar</em> Kalkulator</h4>>
              </div>

              <?php foreach($menu as $row) : ?>
                <div class="item">
                  <ul>
                    <li><img src="<?= $row['img']?>" alt="" class="templatemo-item"></li>
                    <li><h4><?= $row['judul']?></h4><span><?= $row['span']?></span></li>
                    <li><h4>Calulation for</h4><span>Matrix</span></li>
                    <li><h4>Added</h4><span><?= $row['created_at']?></span></li>
                    <li><h4>Status Calculator</h4><span>Verified</span></li>
                    <li><div class="main-border-button"><a href="<?= $row['link']?>">Mulai</a></div></li>
                  </ul>
                </div>
              <?php endforeach; ?>

            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="#!">Soon!</a>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 <a href="#">Samuel Andrey</a> All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>
