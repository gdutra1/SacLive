<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cadastrar Animal - SacLive</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
<link rel="stylesheet" href="Nicepage assets/Cadastro.css" media="screen">
<link rel="stylesheet" href="Nicepage assets/nicepage.css" media="screen">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <!-- =======================================================
  * Template Name: Arsha - v4.8.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="imginner"><img src="assets/img/logo.png" alt="" height="55px"></a>
      <h1 class="logo me-auto"><a href="index.html">SacLive</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="inner-page.php">Voltar</a></li>
          <li><a class="getstarted scrollto" href="index.html">Sair</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2 id="titulo">Novo Animal</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!--Formulário-->
    <section class="u-clearfix u-section-1" id="sec-eabd">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-form u-form-1">
          <form action="AnimalInsert.php" method="post" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="marcarConsulta" style="padding: 12px;">
            <div class="u-form-email u-form-group u-label-top">
              <label for="email-50d6" class="u-label u-text-palette-1-dark-1 u-label-1">Nome do Animal</label>
              <input type="text" id="email-50d6" name="txtNomeAnimal" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-1" required="" autofocus="autofocus">
            </div>
            <div class="u-form-group u-label-top u-form-group-2">
              <label for="text-7bab" class="u-label u-text-palette-1-dark-1 u-label-2">CPF do dono</label>
              <input type="text" placeholder="" id="text-7bab" name="txtCpfDono" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-2">
            </div>
            <div class="u-form-group u-label-top u-form-group-2">
              <label for="text-7bab" class="u-label u-text-palette-1-dark-1 u-label-2">Espécie</label>
              <input type="text" placeholder="" id="text-7bab" name="txtEspecie" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-2">
            </div>
            <div class="u-form-date u-form-group u-label-top u-form-group-3">
              <label for="date-702f" class="u-label u-text-palette-1-dark-1 u-label-3">Data de Nascimento</label>
              <input type="date" placeholder="DIA/MÊS/ANO" id="date-702f" name="dataNascimento" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-3" required="">
            </div>
            <div class="u-form-group u-label-top u-form-group-2">
              <label for="text-7bab" class="u-label u-text-palette-1-dark-1 u-label-2">Peso</label>
              <input type="text" placeholder="" id="text-7bab" name="txtPeso" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-2">
            </div>
            <div class="u-form-group u-label-top u-form-group-2">
              <label for="text-7bab" class="u-label u-text-palette-1-dark-1 u-label-2">Altura</label>
              <input type="text" placeholder="" id="text-7bab" name="txtAltura" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-2">
            </div>
            <div class="u-form-group u-label-top u-form-group-2">
              <label for="text-7bab" class="u-label u-text-palette-1-dark-1 u-label-2">Largura</label>
              <input type="text" placeholder="" id="text-7bab" name="txtLargura" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-2">
            </div>
            <div class="u-form-group u-form-textarea u-label-top u-form-group-4">
              <label for="textarea-29a6" class="u-label u-text-palette-1-dark-1 u-label-4">Observações</label>
              <textarea rows="4" cols="50" id="textarea-29a6" name="textarea" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-4" required="" placeholder="Alergias, medicações frequentes, cirurgias,..."></textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit u-label-top">
              <input type="submit" value="Cadastrar" class="u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-base u-palette-1-base u-radius-32 u-btn-1">
              </a>
            </div>
          </form>
        </div>
      </div>
    </section>
                <!--End formulário-->
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>