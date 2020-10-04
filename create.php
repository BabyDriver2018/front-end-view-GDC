
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$contrato = $abonado = $propiedad = $sector = $estado = $pagomes = $servicio = $agencia = $deuda ="";

$contrato_err = $abonado_err = $propiedad_err = $sector_err = $estado_err = $pagomes_err = $servicio_err = $agencia_err = $deuda_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_contrato = trim($_POST["contrato"]);
    if(empty($input_contrato)){
        $contrato_err = "Por favor ingrese el contrato del usuario.";
    }  else{
        $contrato = $input_contrato;
    }
    
    // Validate address
    $input_abonado = trim($_POST["abonado"]);
    if(empty($input_abonado)){
        $abonado_err = "Por favor ingrese un nombre.";     
    } else{
        $abonado = $input_abonado;
    }
    
    // Validate salary
    $input_propiedad = trim($_POST["propiedad"]);
    if(empty($input_propiedad)){
        $propiedad_err = "Por favor ingrese el monto del salario del empleado.";     
    } 
    
    else{
        $propiedad = $input_propiedad;
    }
    
    // Check input errors before inserting in database
    if(empty($contrato_err) && empty($abonado_err) && empty($propiedad_err)){
        // Prepare an insert statement
        $sector="Buenos Aires Mz 3 L 12";
        $estado=1;
        $pagomes=50;
        $servicio="duo";
        $agencia="AGENCIAFIBERDIGITAL";
        $deuda=200;
        $sql = "INSERT INTO users (contrato, abonado, propiedad,sector,estado,pagomes,servicio,agencia,deuda) VALUES (?, ?, ? , '$sector', '$estado','$pagomes','$servicio','$agencia','$deuda')";
         
        if($stmt = mysqli_prepare($link, $sql)){
          
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_contrato, $param_abonado, $param_propiedad );
            
            // Set parameters
            $param_contrato = $contrato;
            $param_abonado = $abonado;
            $param_propiedad = $propiedad;
            $param_sector = $sector;
            $param_estado = $estado;
            $param_pagomes = $pagomes;
            $param_servicio = $servicio;
            $param_agencia = $agencia;
            $param_deuda = $deuda;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

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
              
              
              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1"
                aria-expanded="true" aria-controls="collapseExample1">
                Registrar Usuarios
              </button>
            </p>
           
            <div class="collapse" id="collapseExample1">
              <div class="card card-body">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="form-group <?php echo (!empty($contrato_err)) ? 'has-error' : ''; ?>">
                            <label>Contrato</label>
                            <input type="text" name="contrato" class="form-control" value="<?php echo $contrato; ?>">
                            <span class="help-block"><?php echo $contrato_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($abonado_err)) ? 'has-error' : ''; ?>">
                            <label>Abonado</label>
                            <textarea name="abonado" class="form-control"><?php echo $abonado; ?></textarea>
                            <span class="help-block"><?php echo $abonado_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($propiedad_err)) ? 'has-error' : ''; ?>">
                            <label>Propiedad</label>
                            <input type="text" name="propiedad" class="form-control" value="<?php echo $propiedad; ?>">
                            <span class="help-block"><?php echo $propiedad_err;?></span>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Submit">
                        
              </form>
                
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