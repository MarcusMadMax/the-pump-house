<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The Pump House Theatre</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri()?>/assets/img/the-pump-house/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/assets/img/the-pump-house/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri()?>/assets/img/the-pump-house/icons/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri()?>/assets/img/the-pump-house/icons/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri()?>/assets/css/style.css" rel="stylesheet">
  <?php wp_head()?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class='header'>
    <div class="container d-flex align-items-center">
      <a href="http://localhost/the-pump-house/" class="logo mr-auto"><img src="<?php echo get_template_directory_uri()?>/assets/img/the-pump-house/the-pump-house-logo.svg" alt=""></a>
      <nav class="nav-menu d-none d-lg-block">

        <?php wp_nav_menu( array( 
              'theme_location' => 'main-menu',
              'container' => 'ul',
            ));
        ?>

      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->