<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Entengseng - Determinan matriks</title>

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

          <!-- Determinan matriks -->
          <div class="game-details mb-5">
            <div class="row">
              <div class="col-lg-12">
              <a href="index.php">
                <h1 style="text-align: center;" class="mb-5 mt-2"><u>Determinan Matriks</u></h1>
              </a>
              </div>
              <div class="col-lg-12">
                <div class="content mb-5">
                  <div class="row">
                    <form action="" method="POST" class="mb-5" autocomplete="off">
                      <select class="form-select" aria-label="Default select example" name="option_ordo">
                        <option selected>Select Ordo</option>
                        <option value="two">2 x 2</option>
                        <option value="three">3 x 3</option>
                        <option value="four">4 x 4</option>
                      </select>

                      <div class="d-grid gap-2 mt-4">
                        <button type="submit" name="ordo" class="btn btn-outline-secondary rounded-pill">Generate Ordo!</button>
                      </div>
                    </form>

                  <!-- Input Matriks -->
                  <?php if(isset($_POST['ordo']) || isset($_POST['hitung'])) : ?>
                    <form action="" method="POST" autocomplete="off">

                      <?php 
                      if (isset($_POST['option_ordo'])) {
                        $ordo = $_POST['option_ordo'];

                        if ($ordo == "two") {
                          $baris = 2;
                          $kolom = 2;
                        } elseif ($ordo == "three") {
                          $baris = 3;
                          $kolom = 3;
                        } elseif ($ordo == "four") {
                          $baris = 4;
                          $kolom = 4;
                        } else {
                          echo "<script>
                                  document.location.href = 'determinan.php';
                                </script>";
                        }
                      }

                      if(isset($_POST['a_matrix'])) {
                        $am = $_POST['a_matrix'];
                      } ?>
                      
                      <input type="hidden" name="baris" value="<?= $baris?>">
                      <input type="hidden" name="kolom" value="<?= $kolom?>">
                      <input type="hidden" name="option_ordo" value="<?= $ordo?>">

                      <div class="row">
                        <!-- Proses input matriks -->
                        <center>
                          <div class="col-lg-4">
                            <table>                          
                              <?php for ($i=0;$i<$baris;$i++) : ?>
                              <tr>
                                  <?php for ($j=0;$j<$kolom;$j++) : ?>
                                  <td>
                                      <input type="text" class="form-control form-control-sm" 
                                      style="width: 100%;" name="a_matrix[<?=$i?>][<?=$j?>]" 
                                      autocomplete="off" required
                                      value='<?php if(isset($_POST['a_matrix'])) echo $am[$i][$j];?>'/>
                                  </td>
                                  <?php endfor; ?>
                              </tr>
                              <?php endfor; ?>
                            </table>
                          </div>
                        </center>
                        <!-- Akhir proses input matriks -->

                        <div class="d-grid gap-2 mt-4">
                          <button type="submit" name="hitung" class="btn btn-outline-secondary rounded-pill mb-3">Hitung!</button>
                        </div>
                      </div>     
                    </form>
                  <?php endif;?>
                  <!-- Akhir input Matriks -->


                  <!-- Proses perhitungan dan menampilkan hasil -->
                  <?php
                    if(isset($_POST['hitung'])) :
                      $am = $_POST['a_matrix']; 
                      $baris = $_POST['baris'];
                      $kolom = $_POST['kolom'];
                      $opion_ordo = $_POST['option_ordo'];
                      
                      if ($ordo == "two") {
                        $hasil = ($am[0][0] * $am[1][1]) - ($am[0][1] * $am[1][0]);

                      } elseif ($ordo == "three") {
                        $hasil  = (($am[0][0] * $am[1][1] * $am[2][2]) + ($am[0][1] * $am[1][2] * $am[2][0]) + ($am[0][2] * $am[1][0] * $am[2][1])) -
                                  (($am[2][0] * $am[1][1] * $am[0][2]) + ($am[2][1] * $am[1][2] * $am[0][0]) + ($am[2][2] * $am[1][0] * $am[0][1]));

                      } elseif ($ordo == "four") {
                        $hasil =  $am[0][3] * $am[1][2] * $am[2][1] * $am[3][0] - $am[0][2] * $am[1][3] * $am[2][1] * $am[3][0] -
                                  $am[0][3] * $am[1][1] * $am[2][2] * $am[3][0] + $am[0][1] * $am[1][3] * $am[2][2] * $am[3][0] +
                                  $am[0][2] * $am[1][1] * $am[2][3] * $am[3][0] - $am[0][1] * $am[1][2] * $am[2][3] * $am[3][0] -
                                  $am[0][3] * $am[1][2] * $am[2][0] * $am[3][1] + $am[0][2] * $am[1][3] * $am[2][0] * $am[3][1] +
                                  $am[0][3] * $am[1][0] * $am[2][2] * $am[3][1] - $am[0][0] * $am[1][3] * $am[2][2] * $am[3][1] -
                                  $am[0][2] * $am[1][0] * $am[2][3] * $am[3][1] + $am[0][0] * $am[1][2] * $am[2][3] * $am[3][1] +
                                  $am[0][3] * $am[1][1] * $am[2][0] * $am[3][2] - $am[0][1] * $am[1][3] * $am[2][0] * $am[3][2] -
                                  $am[0][3] * $am[1][0] * $am[2][1] * $am[3][2] + $am[0][0] * $am[1][3] * $am[2][1] * $am[3][2] +
                                  $am[0][1] * $am[1][0] * $am[2][3] * $am[3][2] - $am[0][0] * $am[1][1] * $am[2][3] * $am[3][2] -
                                  $am[0][2] * $am[1][1] * $am[2][0] * $am[3][3] + $am[0][1] * $am[1][2] * $am[2][0] * $am[3][3] +
                                  $am[0][2] * $am[1][0] * $am[2][1] * $am[3][3] - $am[0][0] * $am[1][2] * $am[2][1] * $am[3][3] -
                                  $am[0][1] * $am[1][0] * $am[2][2] * $am[3][3] + $am[0][0] * $am[1][1] * $am[2][2] * $am[3][3];
                                  
                      } else {
                        echo "<script>
                                document.location.href = 'determinan.php';
                              </script>";
                      } ?>

                      <h1 style="text-align: center;" class="mt-5">Hasil</h1>
                      <h1 style="text-align: center;" class="mt-5"><?= $hasil?></h1>
                    <?php endif;?>
                    <!-- Akhir proses perhitungan dan menampilkan hasil -->

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir determinan matriks -->

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
