<?php
  $dtitle = 'Afagadores Profissionais | Empresa de Afagar Chão';
  $ddesc = 'Especialistas em Afagamentos e Envernizamentos, tratamento de pavimentos em madeira. Soalho,Taco,Lamparquet,Deck,Flutuantes, Lisboa,Amadora,Sintra, Cascais..';
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136882617-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-136882617-1');
      gtag('config', 'AW-754952204');
    </script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= isset($metaDescription) ? $metaDescription : $ddesc ?>" />
    <meta property="og:image" content="http://afagamentos.com/images/facebook.com.png" />


    <title><?= isset($replace2ndTitle) ? (isset($title) ? $title : $dtitle) : $dtitle ?></title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <?php if(isset($emailSent) && TRUE === $emailSent):  ?>
      <!-- Event snippet for Envio de Mensagem - Pagina de Contacto conversion page -->
      <script>
        gtag('event', 'conversion', {'send_to': 'AW-754952204/FGOgCN7d9pcBEIzQ_ucC'});
      </script>
    <?php endif; ?>

    <!-- Event snippet for Clique em link do numero de telemovel conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
    function gtag_report_conversion_tel(url) {
      var callback = function () {
        if (typeof(url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
          'send_to': 'AW-754952204/2uuACMHh9pcBEIzQ_ucC',
          'event_callback': callback
      });
      return false;
    }
    </script>


    <!-- Event snippet for Clique em link Mailto conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
    function gtag_report_conversion_mail(url) {
      var callback = function () {
        if (typeof(url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
          'send_to': 'AW-754952204/lDjsCPPs9pcBEIzQ_ucC',
          'event_callback': callback
      });
      return false;
    }
    </script>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
	<section class="top_header_area">
	    <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="tel:00351967215705" onClick="gtag_report_conversion_tel('tel:00351967215705')"><i class="fa fa-phone"></i>+ (351) 967 215 705</a></li>
                <li><a href="mailto:info@afagamentos.com" onClick="gtag_report_conversion_mail('mailto:info@afagamentos.com')"><i class="fa fa-envelope-o"></i>info@afagamentos.com</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="https://www.facebook.com/Afagamentoscom-Empresa-de-Afagar-Chão-Afagamentos-e-Envernizamentos-424626244772566/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
	    </div>
	</section>
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Ver Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                      <h2 style="padding: 0;margin: 0;font-size: 20px;">
                        <span style="color: #f6b60b">Afagamentos</span>.com
                      </h1>
                    </a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                          <a href="/">Início</a>
                        </li>
                        <li>
                            <a href="quem-somos.php">Quem somos</a>
                        </li>
                        <li>
                            <a href="servicos.php">Serviços</a>
                        </li>
                        <li>
                          <a href="portfolio.php">Portfolio</a>
                        </li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->
