<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cadastro Clientes</title>
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
          <li><a class="nav-link scrollto " href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Listagem</a></li>
          <li class="dropdown"><a href="#"><span>Cadastrar</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Animal</a></li>
              <li><a href="#">Cliente</a></li>
              <li><a href="#">Veterinário</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Marcar Consulta</a></li>
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
        <h2 id="titulo">Novo Cliente</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!--Formulário-->
    <section class="u-clearfix u-section-1" id="sec-48e0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form-15">
          <form action="ClientInsert.php" method="post" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" name="form" style="padding: 10px;">
            <div class="u-form-group u-form-name">
              <label for="name-0f4e" class="u-label">Nome</label>
              <input type="text" placeholder="Nome do cliente" minlength="3" id="name-0f4e" name="txtNome" autofocus class="u-border-3 u-border-palette-4-base u-custom-font u-input u-input-rectangle u-palette-4-light-3 u-radius-30 u-text-font u-input-1" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-0f4e" class="u-label">Email</label>
              <input type="email" placeholder="Email do Cliente" id="email-0f4e" name="txtEmail" class="u-border-3 u-border-palette-4-base u-custom-font u-input u-input-rectangle u-palette-4-light-3 u-radius-30 u-text-font u-input-2" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="cnpj-0f4e" class="u-label">CPF</label>
              <input type="cnpj" placeholder="CPF do Cliente" id="email-0f4e" name="txtCpf" class="u-border-3 u-border-palette-4-base u-custom-font u-input u-input-rectangle u-palette-4-light-3 u-radius-30 u-text-font u-input-2" required="">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="senha-e8fa" class="u-label">Telefone Celular</label>
              <input type="tel"  placeholder="XXXXX-XXXX" id="telefone-e8fa" minnlength="5" name="txtTelefone" class="u-border-3 u-border-palette-4-base u-custom-font u-input u-input-rectangle u-palette-4-light-3 u-radius-30 u-text-font u-input-3">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <input type="submit" value="Cadastrar" class="u-active-palette-4-dark-1 u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-4-dark-1 u-radius-20">
            </div>
          </form>
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