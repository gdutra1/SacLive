<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Listagem Clientes</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/cssParticular.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.8.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <script type="text/javascript">
function apagar(nome, cpf) {
if (window.confirm("Deseja realmente apagar este registro:\n" + "Nome: " + nome + "\n" + "CPF: " + cpf)) {
window.location = 'ClientDelete.php?cpf=' + cpf;
}
}
</script>

</head>

<body>
<?php session_start(); ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="imginner"><img src="assets/img/logo.png" alt="" height="55px"></a>
      <h1 class="logo me-auto"><a href="index.html">SacLive</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="inner-page.php">Voltar</a></li>
          <li class="dropdown"><a href="#"><span>Listagem</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="AnimalList.php">Animal</a></li>
              <li><a href="VetList.php">Veterinário</a></li>
            </ul>
          </li>
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
        <h2>Lista de clientes cadastrados</h2>
      </div>
    </section>
    
    <section class="inner-page">
<?php
    include_once("Connect.php");
    $cnpj = $_SESSION["cnpj"];
    $sql = "SELECT * FROM cliente WHERE cnpj_clinica = '$cnpj'";
    $resultado = $connect->query($sql);
    if ($resultado->num_rows > 0) {

        ?>
        <table>
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>

        <?php
        while($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row["cpf"] ?></td>
                <td><?php echo $row["nome"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["telefone"] ?></td>
                <td><a href="ClientUpdate.php?cpf=<?php echo $row["cpf"] ?>">Editar</a></td>
                <td><a href="#" onclick="apagar('<?php echo $row["nome"] ?>','<?php echo
$row["cpf"] ?>');"> Excluir</a></td>
            </tr>

            <?php
                }
            ?>
            </table>
        <?php
            } else {
                echo "Nenhum dado encontrado.";
            }
        ?>
        </section>
        
    </main><!-- End #main -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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