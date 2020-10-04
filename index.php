<!doctype html>
<html lang="en">

<head>
  <title>CATV &mdash; Sistema CATV</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Free-Template.co" />
  <link rel="shortcut icon" href="ftco-32x32.png">

  <link rel="stylesheet" href="css/custom-bs.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/line-icons/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/animate.min.css">

  <!-- Reloj -->
  <link rel="stylesheet" href="css/stilo.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.html">CATV</a></div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');"
      id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Sistema de Administración de CATV</h1>
              <p>AGENCIA FIBERDIGITAL</p>
            </div>
            <form method="post" class="search-jobs-form">
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true"
                    title="Select Region">
                    <option>Anywhere</option>
                    <option>San Francisco</option>
                    <option>Palo Alto</option>
                    <option>New York</option>
                    <option>Manhattan</option>
                    <option>Ontario</option>
                    <option>Toronto</option>
                    <option>Kansas</option>
                    <option>Mountain View</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true"
                    title="Select Job Type">
                    <option>Part Time</option>
                    <option>Full Time</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span
                      class="icon-search icon mr-2"></span>Search Job</button>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>





    <section class="site-section">
      <div class="container">

        <div class="section-title mb-2" id="cronometro">
          <h2 class="section-title">TEMPORIZADOR DE 1 HORA</h2>
          <div class="row mb-5 justify-content-center" id="reloj">

            00 : 00 : 00
          </div>

        </div>

        <div class="row mb-5 justify-content-center">
          <div class="col-md-14 text-center">
            <p>
              <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                Lista de Usuarios
              </a>
              <a href="create.php">
              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1"
                aria-expanded="false" aria-controls="collapseExample1">
                Registrar Usuarios
              </button>
              </a>
            </p>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <?php
                
                 // Include config file
                 require_once "config.php";
                 
                 // Attempt select query execution
                 $sql = "SELECT * FROM users";
                 if($result = mysqli_query($link, $sql)){
                     if(mysqli_num_rows($result) > 0){
                         echo "<table class='table table-bordered table-striped'>";
                             echo "<thead>";
                                 echo "<tr>";
                                     echo "<th>#</th>";
                                     echo "<th>Contrato</th>";
                                     echo "<th>Abonado</th>";
                                     echo "<th>Propiedad</th>";
                                     echo "<th>Sector</th>";
                                     echo "<th>Estado</th>";
                                     echo "<th>Pago Mes</th>";
                                     echo "<th>Servicio</th>";
                                     echo "<th>Agencia</th>";
                                     echo "<th>Deuda</th>";
                                     echo "<th>Accion</th>";
                                     echo "<th>Pagar</th>";
                                 echo "</tr>";
                             echo "</thead>";
                             echo "<tbody>";
                             while($row = mysqli_fetch_array($result)){
                                 echo "<tr>";
                                     echo "<td>" . $row['id'] . "</td>";
                                     echo "<td>" . $row['contrato'] . "</td>";
                                     echo "<td>" . $row['abonado'] . "</td>";
                                     echo "<td>" . $row['propiedad'] . "</td>";
                                     echo "<td>" . $row['sector'] . "</td>";
                                     echo "<td>" . $row['estado'] . "</td>";
                                     echo "<td>" . $row['pagomes'] . "</td>";
                                     echo "<td>" . $row['servicio'] . "</td>";
                                     echo "<td>" . $row['agencia'] . "</td>";
                                     echo "<td>" . $row['deuda'] . "</td>";
                                     echo "<td>";
                                         echo "<a href='read.php?id=". $row['id'] ."' title='Ver' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                         echo "<a href='delete.php?id=". $row['id']."' title='Eliminar' data-toggle='tooltip'><button  method='get' name='eliminar' type='button' class='btn btn-danger'>Eliminar</button></a>";
                                         echo "<a href='update.php?id=". $row['id']."' title='Editar' data-toggle='tooltip'><button  method='get' name='edit' type='button' class='btn btn-primary'>Editar</button></a>";
                                     echo "</td>";
                                     echo "<td>";
                                         echo "<a href='pay.php?id=". $row['id']."' title='Pagr' data-toggle='tooltip'><button  method='get' name='pagar' type='button' class='btn btn-primary'>Pagar</button></a>";
                                     echo "</td";
                                 echo "</tr>";
                             }
                             echo "</tbody>";                            
                         echo "</table>";
                         // Free result set
                         mysqli_free_result($result);
                     } else{
                         echo "<p class='lead'><em>No records were found.</em></p>";
                     }
                 } else{
                     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                 }

                 // Close connection
                 mysqli_close($link);
                 
                ?>
              </div>
            </div>
            <div class="collapse" id="collapseExample1">
              <div class="card card-body">
              
                
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>



    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                  target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>

  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script src="js/bootstrap-select.min.js"></script>

  <script src="js/custom.js"></script>

  <script src="js/reloj.js"></script>


</body>

</html>