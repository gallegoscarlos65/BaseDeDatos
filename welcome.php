<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background-color: black;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="indexiniciado.html">CUU SPORTS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul >
        <li><a href="consulta.php">Visualizar Productos</a></li>  
        <li><a href="logout.php" class="getstarted">Salir</a></li>
          <li><a href="reset-password.php">Actualizar contrase??a</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>

  </header><!-- End Header -->

<!-- ======= About Section ======= -->
<main id="main" style="padding: 50px;">

<section id="about" class="about">
<h2 style="text-align: center;">Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenido a CUU SPORTS</h2>
      <div class="container">
        <div class="row content">
         
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>

            </p>
            <h1>Opciones de usuario</h1>
            <ul>
              <li><i class="ri-check-double-line"></i> Consulta tus productos favoritos.</li>
              <li><i class="ri-check-double-line"></i> Obten cotizaciones seg??n los productos eleg??dos.</li>
              <li><i class="ri-check-double-line"></i> Manda tus mensajes y recibe una respuesta en menos de 24 hrs.</li>
            </ul>
            <p class="fst-italic">
           
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
</main>
</body>
</html>