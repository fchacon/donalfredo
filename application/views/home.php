<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo config('company_name'); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo img('favicon.png'); ?>" rel="icon">
  <link href="<?php echo img('apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo lib('bootstrap/css/bootstrap.min', 'css'); ?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo lib('font-awesome/css/font-awesome.min', 'css'); ?>" rel="stylesheet">
  <link href="<?php echo lib('animate/animate.min', 'css'); ?>" rel="stylesheet">
  <link href="<?php echo lib('ionicons/css/ionicons.min', 'css'); ?>" rel="stylesheet">
  <link href="<?php echo lib('owlcarousel/assets/owl.carousel.min', 'css'); ?>" rel="stylesheet">
  <link href="<?php echo lib('magnific-popup/magnific-popup', 'css'); ?>" rel="stylesheet">
  <link href="<?php echo lib('ionicons/css/ionicons.min', 'css'); ?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo css('style'); ?>" rel="stylesheet">
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:<?php echo lang('company_email'); ?>"><?php echo config('company_email'); ?></a>
        <i class="fa fa-phone"></i> <a href="tel:<?php echo config('company_phone'); ?>"><?php echo config('company_phone'); ?></a>
      </div>
      <div class="social-links float-right">
        <a href="<?php echo config('company_twitter'); ?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="<?php echo config('company_facebook'); ?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#body" class="scrollto">Reve<span>al</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#body"><img src="<?php echo img('brand.png'); ?>" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body"><?php echo lang('site_home'); ?></a></li>
          <li><a href="#about"><?php echo lang('site_about_us'); ?></a></li>
          <li><a href="#services"><?php echo lang('site_services'); ?></a></li>
          <li><a href="#clients"><?php echo lang('site_clients'); ?></a></li>
          <li><a href="#portfolio"><?php echo lang('site_gallery'); ?></a></li>
          <li><a href="#team"><?php echo lang('site_us'); ?></a></li>
          <li><a href="#contact"><?php echo lang('site_contact'); ?></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>
      	<?php echo lang('site_transport'); ?> <span><?php echo lang('site_and_logistic'); ?></span>
      	<br>
      	<?php echo config('company_name'); ?>
      </h2>
      <div>
        <a href="#about" class="btn-get-started scrollto"><?php echo lang('site_get_started'); ?></a>
        <a href="#portfolio" class="btn-projects scrollto"><?php echo lang('site_our_work'); ?></a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('<php echo img('intro-carousel/1.jpg'); ?>');"></div>
      <div class="item" style="background-image: url('<php echo img('intro-carousel/2.jpg'); ?>');"></div>
      <div class="item" style="background-image: url('<php echo img('intro-carousel/3.jpg'); ?>');"></div>
      <div class="item" style="background-image: url('<php echo img('intro-carousel/4.jpg'); ?>');"></div>
      <div class="item" style="background-image: url('<php echo img('intro-carousel/5.jpg'); ?>');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <!-- <img src="<?php echo img('about-img.jpg'); ?>" alt=""> -->
            <img src="<?php echo img('about.png'); ?>" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2><?php echo lang('site_about_us'); ?></h2>
            <h3><?php echo lang('site_about_us_description'); ?></h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i>&nbsp;<?php echo lang('site_about_us_1'); ?></li>
              <li><i class="ion-android-checkmark-circle"></i>&nbsp;<?php echo lang('site_about_us_2'); ?></li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2><?php echo lang('site_services'); ?></h2>
          <p><?php echo lang('site_services_description'); ?></p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-map-marker"></i></div>
              <h4 class="title"><a href=""><?php echo lang('site_gps'); ?></a></h4>
              <p class="description"><?php echo lang('site_gps_description'); ?></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-laptop"></i></div>
              <h4 class="title"><a href=""><?php echo lang('site_real_time_monitoring'); ?></a></h4>
              <p class="description"><?php echo lang('site_real_time_monitoring_description'); ?></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-snowflake-o"></i></div>
              <h4 class="title"><a href=""><?php echo lang('site_refrigerated_load'); ?></a></h4>
              <p class="description"><?php echo lang('site_refrigerated_load_description'); ?></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-group"></i></div>
              <h4 class="title"><a href=""><?php echo lang('site_equipment_and_staff'); ?></a></h4>
              <p class="description"><?php echo lang('site_equipment_and_staff_description'); ?></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2><?php echo lang('site_clients'); ?></h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="<?php echo img('clients/client-1.png'); ?>" alt="">
          <img src="<?php echo img('clients/client-2.png'); ?>" alt="">
          <img src="<?php echo img('clients/client-3.png'); ?>" alt="">
          <img src="<?php echo img('clients/client-4.png'); ?>" alt="">
          <img src="<?php echo img('clients/client-5.png'); ?>" alt="">
          <img src="<?php echo img('clients/client-6.png'); ?>" alt="">
          <img src="<?php echo img('clients/client-7.png'); ?>" alt="">
          <img src="<?php echo img('clients/client-8.png'); ?>" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2><?php echo lang('site_gallery'); ?></h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="<?php echo img('portfolio/1.jpg'); ?>" class="portfolio-popup">
                <img src="<?php echo img('portfolio/1.jpg'); ?>" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="<?php echo img('portfolio/2.jpg'); ?>" class="portfolio-popup">
                <img src="<?php echo img('portfolio/2.jpg'); ?>" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="<?php echo img('portfolio/3.jpg'); ?>" class="portfolio-popup">
                <img src="<?php echo img('portfolio/3.jpg'); ?>" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="<?php echo img('portfolio/4.jpg'); ?>" class="portfolio-popup">
                <img src="<?php echo img('portfolio/4.jpg'); ?>" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="<?php echo img('portfolio/5.jpg'); ?>" class="portfolio-popup">
                <img src="<?php echo img('portfolio/5.jpg'); ?>" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="<?php echo img('portfolio/6.jpg'); ?>" class="portfolio-popup">
                <img src="<?php echo img('portfolio/6.jpg'); ?>" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="<?php echo img('portfolio/7.jpg'); ?>" class="portfolio-popup">
                <img src="<?php echo img('portfolio/7.jpg'); ?>" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="<?php echo img('portfolio/8.jpg'); ?>" class="portfolio-popup">
                <img src="<?php echo img('portfolio/8.jpg'); ?>" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2><?php echo lang('site_us'); ?></h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo img('team-1.jpg'); ?>" alt=""></div>
              <div class="details">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo img('team-2.jpg'); ?>" alt=""></div>
              <div class="details">
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo img('team-3.jpg'); ?>" alt=""></div>
              <div class="details">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo img('team-4.jpg'); ?>" alt=""></div>
              <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2><?php echo lang('site_contact_us'); ?></h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3><?php echo lang('site_address'); ?></h3>
              <address><?php echo config('company_address'); ?></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3><?php echo lang('site_phone'); ?></h3>
              <p><a href="tel:<?php echo config('company_phone'); ?>"><?php echo config('company_phone'); ?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3><?php echo lang('site_email'); ?></h3>
              <p><a href="mailto:<?php echo config('company_email'); ?>"><?php echo config('company_email'); ?></a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage" class="alert alert-success"><?php echo lang('site_contact_message_sent'); ?></div>
          <div id="errormessage" class="alert alert-danger"></div>
          <form action="<?php echo site_url('home/contact'); ?>" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo lang('site_your_name'); ?>" data-rule="minlen:4" data-msg="<?php echo lang('site_enter_at_least_n_chars', '4'); ?>" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo lang('site_your_email'); ?>" data-rule="email" data-msg="<?php echo lang('site_enter_a_valid_email'); ?>" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo lang('site_subject'); ?>" data-rule="minlen:4" data-msg="<?php echo lang('site_enter_at_least_n_chars_of_subject', '8'); ?>" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="<?php echo lang('site_plase_write'); ?>" placeholder="<?php echo lang('site_message'); ?>"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit"><?php echo lang('site_send_message'); ?></button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><?php echo config('company_name'); ?></strong>. <?php echo lang('site_all_rights_reserved'); ?>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo lib('jquery/jquery.min', 'js'); ?>"></script>
  <script src="<?php echo lib('jquery/jquery-migrate.min', 'js'); ?>"></script>
  <script src="<?php echo lib('bootstrap/js/bootstrap.bundle.min', 'js'); ?>"></script>
  <script src="<?php echo lib('easing/easing.min', 'js'); ?>"></script>
  <script src="<?php echo lib('superfish/hoverIntent', 'js'); ?>"></script>
  <script src="<?php echo lib('superfish/superfish.min', 'js'); ?>"></script>
  <script src="<?php echo lib('wow/wow.min', 'js'); ?>"></script>
  <script src="<?php echo lib('owlcarousel/owl.carousel.min', 'js'); ?>"></script>
  <script src="<?php echo lib('magnific-popup/magnific-popup.min', 'js'); ?>"></script>
  <script src="<?php echo lib('sticky/sticky', 'js'); ?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo js('contactform'); ?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo js('main'); ?>"></script>

</body>
</html>
