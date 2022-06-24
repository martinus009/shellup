<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Platform yang bergerak dibidang kesehatan kulit, konsultasi dan penjualan produk yang dipastikan aman">
  <meta name="keywords" content="shell up">
  <meta name="author" content="Boy-Z tech">
  <link rel="manifest" href="manifest.json">
  <link rel="icon" href="assets/images/logo/logo1.jpg" type="image/x-icon">
  <title>Shell-Up App | Help Your And Your Skin</title>

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://shell-up.tnrsolution.com/">
  <meta property="og:title" content="Shell-Up App | Help Your And Your Skin">
  <meta property="og:description" content="Platform yang bergerak dibidang kesehatan kulit, konsultasi dan penjualan produk yang dipastikan aman">
  <meta property="og:image" content="https://shell-up.tnrsolution.com/assets/images/promo/promo1.jpg">


  <link rel="icon" href="assets/images/logo/logo1.jpg" type="image/x-icon">
  <link rel="apple-touch-icon" href="assets/images/logo/logo1.jpg">
  <meta name="theme-color" content="#ff4c3b">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Shell-up">
  <meta name="msapplication-TileImage" content="assets/images/logo/logo1.jpg">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!--Google font-->
  <link href="../css?family=Lato:300,400,700,900" rel="stylesheet">

  <!-- bootstrap css -->
  <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.css">

  <!-- slick css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">

  <!-- iconly css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/iconly.css">

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css">

</head>

<body>

  <!-- loader strat -->
  <div class="loader">
    <span></span>
    <span></span>
  </div>
  <!-- loader end -->


  <!-- header start -->
  <header>
    <a href="#" class="brand-logo">
      <img src="assets/images/logo/logo1.jpg">
    </a>
    <div class="header-option">
      <ul>
        <li>
          <a href="#"><i class="iconly-search icli"></i></a>
        </li>
        <li>
          <a href="#"><i class="iconly-Notification icli"></i></a>
        </li>
        <li>
          <a href="#"><i class="iconly-Buy icli"></i></a>
        </li>
      </ul>
    </div>
  </header>



  <?php $this->load->view($layout); ?>



  <!-- panel space start -->
  <section class="panel-space"></section>
  <!-- panel space end -->


  <!-- bottom panel start -->
  <nav class="navbar navbar-light bg-light border-top navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom">
    <ul class="navbar-nav nav-justified w-100">
      <li class="nav-item">
        <a href="http://localhost/shellup/" class="nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
          </svg>
        </a>
      </li>
      <li class="nav-item">
        <a href="kategori" class="nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-border-all" viewBox="0 0 16 16">
            <path d="M0 0h16v16H0V0zm1 1v6.5h6.5V1H1zm7.5 0v6.5H15V1H8.5zM15 8.5H8.5V15H15V8.5zM7.5 15V8.5H1V15h6.5z" />
          </svg>
        </a>
      </li>
      <li class="nav-item">
        <a href="bag" class="nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
          </svg>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
          </svg>
        </a>
      </li>
    </ul>
  </nav>
  <!-- bottom panel end -->


  <!-- latest jquery-->
  <script src="assets/js/jquery-3.3.1.min.js"></script>

  <!-- Bootstrap js-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- Slick js-->
  <script src="assets/js/slick.js"></script>

  <!-- Slick js-->
  <script src="assets/js/homescreen-popup.js"></script>

  <!-- timer js-->
  <script src="assets/js/timer.js"></script>

  <!-- offcanvas modal js -->
  <script src="assets/js/offcanvas-popup.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>

</body>

</html>