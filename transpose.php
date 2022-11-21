<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Entengseng - Transpose matriks</title>

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

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content mt-4">

          <!-- Perhitungan Matriks -->
          <div class="game-details mb-5">
            <div class="row">
              <div class="col-lg-12">
              <a href="index.php">
                <h1 style="text-align: center;" class="mb-5 mt-2"><u>Transpose Matriks</u></h1>
              </a>
              </div>
              <div class="col-lg-12">
                <div class="content mb-5">
                  <div class="row">
                    <form action="" method="POST" class="mb-5" autocomplete="off">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="">
                            <div class="">
                              <h4>Baris</h4>
                              <input type="text" name="baris" class="form-control" placeholder="baris..." required>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="">
                            <div class="">
                              <h4>Kolom</h4>
                              <input type="text" name="kolom" class="form-control" placeholder="kolom..." required>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="d-grid gap-2 mt-4">
                        <button type="submit" name="ordo" class="btn btn-outline-secondary rounded-pill">Generate Ordo!</button>
                      </div>
                    </form>

                  <!-- Input Matriks -->
                  <?php if(isset($_POST['ordo']) || isset($_POST['hitung'])) : ?>
                    <form action="" method="POST" autocomplete="off">

                      <?php 
                      $baris = $_POST['baris'];
                      $kolom = $_POST['kolom'];

                      if(isset($_POST['a_matrix'])) {
                        $am = $_POST['a_matrix'];
                      } ?>
                      
                      <input type="hidden" name="baris" value="<?= $baris?>">
                      <input type="hidden" name="kolom" value="<?= $kolom?>">

                      <div class="row">
                        <!-- input matriks A -->
                        <center>
                          <div class="col-lg-4">
                            <table>                          
                              <?php for($i=0;$i<$baris;$i++) : ?>
                              <tr>
                                  <?php for($j=0;$j<$kolom;$j++) : ?>
                                  <td>
                                      <input 
                                      type="text" class="form-control form-control-sm" 
                                      style="width: 100%;" name="a_matrix[<?=$i?>][<?=$j?>]" 
                                      autocomplete="off" required
                                      value='<?php if(isset($_POST['a_matrix'])) echo $am[$i][$j];?>'
                                      />
                                  </td>
                                  <?php endfor; ?>
                              </tr>
                              <?php endfor; ?>
                            </table>
                          </div>
                        </center>

                        <div class="d-grid gap-2 mt-4">
                          <button type="submit" name="hitung" class="btn btn-outline-secondary rounded-pill mb-3">Hitung!</button>
                        </div>
                      </div>     
                    </form>
                  <?php endif;?>
                  <!-- Input Matriks -->


                  <!-- Hasil Perhitungan -->
                  <?php
                    if(isset($_POST['hitung'])) :
                      $am = $_POST['a_matrix']; 
                      $baris = $_POST['baris'];
                      $kolom = $_POST['kolom']; 
                      
                      for($i = 0;$i < $baris;$i++) {
                        for($j = 0;$j < $kolom;$j++) {
                          $trasnpose[$j][$i] = $am[$i][$j];
                        }
                      } ?>

                      <h1 style="text-align: center;" class="mt-5">Hasil</h1>

                      <center>
                        <table class="mt-2 mb-4" style="width: 50%;border-left:3px solid white;border-right:3px solid white;" >
                          <?php for($i=0;$i<$kolom;$i++) : ?>
                            <tr>
                              <?php for($j=0;$j<$baris;$j++) : ?>
                                <td><input type="number" style="width: 100%;" class="form-control form-control-sm" value="<?= $trasnpose[$i][$j]?>" disabled readonly></td>
                              <?php endfor; ?>
                            </tr>
                          <?php endfor; ?>
                        </table>

                        <div class="col-lg-12">
                          <p>Bila ada kesalahan dalam perhitungan mohon untuk menghubungi developer. Terima kasih.</p>
                        </div>
                      </center>
                    <?php endif;?>
                    <!-- Hasil Perhitungan -->

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Perhitungan Matriks -->

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
