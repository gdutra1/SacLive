<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nova consulta - SacLive</title>
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
          <li><a class="nav-link scrollto" href="inner-page.php">Voltar</a></li>
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
        <h2 id="titulo">Marcar Nova Consulta</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!--Formulário-->
    <section class="u-clearfix u-section-1" id="sec-eabd">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-form u-form-1">
          <form action="" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" name="marcarConsulta" style="padding: 12px;">
            <div class="u-form-group u-form-select u-label-top u-form-group-1">
              <label for="select-618e" class="u-label u-text-palette-1-dark-1 u-label-1">Veterinário</label>
              <div class="u-form-select-wrapper">
                <select id="select-618e" name="select-1" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-1">
                  <option value="Item 1">Item 1</option>
                  <option value="Item 2">Item 2</option>
                  <option value="Item 3">Item 3</option>
                </select>
                <svg class="u-caret u-caret-new" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-date u-form-group u-label-top u-form-group-3">
              <label for="date-a2cb" class="u-label u-text-palette-1-dark-1 u-label-3">Paciente</label>
              <input type="date" id="date-a2cb" name="txtPaciente" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-3" required="">
            </div>
            <div class="u-form-date u-form-group u-label-top u-form-group-3">
              <label for="date-a2cb" class="u-label u-text-palette-1-dark-1 u-label-3">Data</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-a2cb" name="txtData" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-3" required="">
            </div>
            <div class="u-form-email u-form-group u-label-top">
              <label for="email-50d6" class="u-label u-text-palette-1-dark-1 u-label-4">Horário</label>
              <input type="email" placeholder="Horário da consulta" id="email-50d6" name="txtHorario" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-4" required="">
            </div>
            <div class="u-form-group u-label-top u-form-group-5">
              <label for="text-2b5b" class="u-label u-text-palette-1-dark-1 u-label-5">Valor estimado</label>
              <input type="text" id="text-2b5b" name="txtValor" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-5">
            </div>
            <div class="u-form-group u-form-textarea u-label-top u-form-group-6">
              <label for="textarea-19fb" class="u-label u-text-palette-1-dark-1 u-label-6">Relatório</label>
              <textarea rows="4" cols="50" id="textarea-19fb" name="txtRelatorio" class="u-border-3 u-border-palette-4-base u-input u-input-rectangle u-palette-4-light-3 u-radius-25 u-input-6" required="" placeholder="Observações"></textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit u-label-top">
              <input type="submit" value="Marcar" class="u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-4-base u-palette-1-base u-radius-32 u-btn-1">
            </div>
          </form>
        </div>
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