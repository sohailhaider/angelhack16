<?php

/**
 * Created by PhpStorm.
 * User: Sohail Haider
 * Date: 22-May-16
 * Time: 3:49 AM
 */
include('ip2locationlite.class.php');
?>
<!doctype html>
<html lang="en">

  <head>
  	<meta charset="utf-8">
    <meta name="description" content="Responsive Bootstrap Landing Page Template">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
		<title>Home - Radiant</title>

    <link href="<?php echo base_url() ?>asserts/css/homepage/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asserts/fonts/font-awesome.min.css" type="text/css" media="screen">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="<?php echo base_url() ?>asserts/css/homepage/material.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asserts/css/homepage/ripples.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asserts/css/homepage/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asserts/css/homepage/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asserts/css/homepage/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asserts/css/homepage/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-invers menu-wrap">
      <div class="navbar-header text-center">
        <a class="navbar-brand logo-right" href="javascript:void(0)"><i class="mdi-image-timelapse"></i>Radiant</a>
      </div>
        <ul class="nav navbar-nav main-navigation">
          <li class="active"><a href="#home">Home</a></li>
          <li><a href="#features">Trending Searches</a></li>
          <li><a href="#why">Expanding Deceases</a></li>
          <li><a href="#screenshot">Cautions to Take this Summer</a></li>
          <li><a href="#testimonial">Get your Store Listed</a></li>
          <li><a href="#clients">Contact US</a></li>
        </ul>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>

  	<div class="content-wrap">
     <header class="hero-area" id="home">

      <div class="container">
          <div class="col-md-12">

            <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
              <div class="container">
                <div class="navbar-header">
                  <a class="logo-left " href="<?php echo base_url() ?>"><i class="mdi-image-timelapse"></i>Radiant</a>
                </div>
                <div class="navbar-right">
                  <button class="menu-icon"  id="open-button">
                    <i class="mdi-navigation-menu"></i>
                  </button>
                </div>
              </div>
            </div>

			<div class="col-md-12">
				<h2 class="text-center padding-bottom-20">Find the best place to buy</h2>

				<form action="" method="POST">
                    <div class="row">
                        <div class="col m6"  style="width: 70%; float: left; margin-top:25px" >
                            <input type="text" class="form-control main-search" placeholder="Search" name="key">
                        </div>
                        <?php
                        $ipLite = new ip2location_lite;
                        $ipLite->setKey('2b898a027a08e111650de1c7e5938093901ad32e51539862293f67c12c99fb91');
                        function get_client_ip_env() {
                            $ipaddress = '';
                            if (getenv('HTTP_CLIENT_IP'))
                                $ipaddress = getenv('HTTP_CLIENT_IP');
                            else if(getenv('HTTP_X_FORWARDED_FOR'))
                                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
                            else if(getenv('HTTP_X_FORWARDED'))
                                $ipaddress = getenv('HTTP_X_FORWARDED');
                            else if(getenv('HTTP_FORWARDED_FOR'))
                                $ipaddress = getenv('HTTP_FORWARDED_FOR');
                            else if(getenv('HTTP_FORWARDED'))
                                $ipaddress = getenv('HTTP_FORWARDED');
                            else if(getenv('REMOTE_ADDR'))
                                $ipaddress = getenv('REMOTE_ADDR');
                            else
                                $ipaddress = 'UNKNOWN';

                            return $ipaddress;
                        }
?>
                        <div class="col m6" style="width: 20%; float: right; margin-right: 8%">
                            <div class="form-group">
                                <label for="sort">Sort:</label>
                                <select name="sort" class="form-control" id="sort">
                                    <option value="areaandprice">Area + Price</option>
                                    <option value="type">Type</option>
                                    <option value="price">Price</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                                $locations = $ipLite->getCity(get_client_ip_env());
                                $this->session->set_userdata('locations', json_encode($locations));
                            if(get_client_ip_env()) {
                                $locations = $ipLite->getCity(get_client_ip_env());
                                echo "<i style='color: red;padding-left: 5%; margin-top: 20px'>Note: Running on Local host and getting IP: \"".get_client_ip_env()."\" so can't filter on base of location</i>";
                            }
                            ?>
                            <input type="hidden" name="location" value="<?php json_encode($locations) ?>">

                        </div>
                    </div>
				</form>
			</div>
        </div>

    </header>

    <section id="features" class="section">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="100ms">Most Viewed Items</h1>
          <h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Who seeks after it and wants to have it</h2>
        </div>
        <div class="row">

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-settings"></i>
              </div>
              <div class="features-text">
                <h4>Built-with Bootstrap 3.5.x</h4>
                <p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
             </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-done-all"></i>
              </div>
              <div class="features-text">
                <h4>Material Design</h4>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-image-blur-linear"></i>
              </div>
              <div class="features-text">
                <h4>Clean and Refreshing</h4>
                <p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
            </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-communication-business"></i>
              </div>
              <div class="features-text">
                <h4>Ready for Business or App</h4>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
            </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-favorite"></i>
              </div>
              <div class="features-text">
                <h4>Crafted with Love</h4>
                <p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-hardware-phonelink"></i>
              </div>
              <div class="features-text">
                <h4>Fully Responsive Layout</h4>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="why" class="section">
      <div class="container">

        <div class="row">

          <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="<?php echo base_url() ?>asserts/img/features/img1.png" alt="">
          </div>

          <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="pull-left content">
              <h2>This is Why You Will <br> Love Pluto</h2>
              <p>
Material UI Bootstrap APP and Business Template orem ipsum <br>
                dolor sit amet, consectetur adipIusto quisquam idodit dolore inventore <br>
                eumetur adipIusto quisquam idodit dolore inventore eum'
                dolor sit amet, consectetur adipIusto quisquam idodit dolore inventore <br>
              </p>
              <ul class="list-item">
                <li><i class="mdi-action-done"></i>OffCanvas Menu</li>
                <li><i class="mdi-action-done"></i>Based on Material design</li>
                <li><i class="mdi-action-done"></i>Free to Use</li>
                <li><i class="mdi-action-done"></i>Built-with Bootstrap 3.5.x</li>
                <li><i class="mdi-action-done"></i>Refreshing Designß</li>
              </ul>
              <a href="javascript:void(0)" class="btn btn-lg btn-primary">Downoad Now!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

     <section id="main-features" class="section main-feature-gray">
      <div class="container">

        <div class="row">
          <div class="col-md-8 col-sm-8 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="feature-item">
              <h3 class="title-small">
                Sync with the app to analyze your fitness
              </h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's
                standard dummy text, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also the leap into electronicstandard
                dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also the leap into electronic
</p>
              <p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
              </p>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="<?php echo base_url() ?>asserts/img/features/fet1.png" class="img-responsive" alt="">
          </div>

        </div>

      </div>
    </section>

     <section id="main-features" class="section">
      <div class="container">


        <div class="row">
          <div class="col-md-4 col-sm-4 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="<?php echo base_url() ?>asserts/img/features/fet2.png" class="img-responsive" alt="">
          </div>

          <div class="col-md-8 col-sm-8 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="feature-item">
              <h3 class="title-small">
                Set a goal and improve your lifestyle
              </h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's
                standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also the leap into electronicstandard
                dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also the leap into electronic
</p>
              <p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>

     <section id="main-features" class="section main-feature-gray">
      <div class="container">

        <div class="row">
          <div class="col-md-8 col-sm-8 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="feature-item">
              <h3 class="title-small">
                Start a Well-controlled Day!
              </h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's
                standard dummy text, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also the leap into electronicstandard
                dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also the leap into electronic
</p>
              <p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
              </p>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="<?php echo base_url() ?>/asserts/img/features/fet3.png" class="img-responsive" alt="">
          </div>

        </div>

      </div>
    </section>

    <section id="cta">
      <div class="container">
        <div class="row text-center">
            <h3 class="title-small wow bounce" data-wow-duration="1000ms" data-wow-delay="300ms">Join Us Today and Change Yourself</h3>
             <a href="javascript:void(0)" class="btn btn-lg btn-border">Sign Up</a>
          </div>
      </div>
    </section>

    <section id="other-features">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Other Features</h1>
          <h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Who seeks after it and wants to have it</h2>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="features-content">
              <div class="icon hi-icon-effect-3b">
                <i class="mdi-action-settings"></i>
              </div>
              <h3>Customization</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-action-lock-outline"></i>
              </div>
              <h3>Security</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-file-cloud-queue"></i>
              </div>
              <h3>Cloud</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-social-person-outline"></i>
              </div>
              <h3>Analtyics</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1200ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-action-grade"></i>
              </div>
              <h3>Performance</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1400ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-content-flag"></i>
              </div>
              <h3>Network</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1600ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-communication-messenger"></i>
              </div>
              <h3>Support</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1800ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-action-settings-power"></i>
              </div>
              <h3>Easy</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="clients" class="section">
      <div class="container">

        <div class="section-header text-center">
          <h1 class="section-title wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Featured on</h1>
          <h2 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">Material UI Bootstrap APP and Business Template</h2>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="client-item-wrapper">
              <img src="<?php echo base_url() ?>/asserts/img/clients/img1.png" alt="">
            </div>
          </div>
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="client-item-wrapper">
              <img src="<?php echo base_url() ?>/asserts/img/clients/img2.png" alt="">
            </div>
          </div>
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="client-item-wrapper">
              <img src="<?php echo base_url() ?>/asserts/img/clients/img3.png" alt="">
            </div>
          </div>
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="client-item-wrapper">
              <img src="<?php echo base_url() ?>/asserts/img/clients/img4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 class="section-title">That's Where We Are</h2>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-maps-map"></i>
                  </div>
                  <h4>Location</h4>
                  <p>NSW, Sydney, Australia</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-content-mail"></i>
                  </div>
                  <h4>Email</h4>
                  <p>office@graygrids.com</p>
                </div>
              </div>
              <div class="clear"></div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-action-settings-phone"></i>
                  </div>
                  <h4>Phone Number</h4>
                  <p>0753 016 572</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-action-thumb-up"></i>
                  </div>
                  <h4>Social Media</h4>
                  <p>@GrayGrids</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 class="section-title">Love to Hear From You</h2>

            <div class="text-center">
                <h3><a href="https://graygrids.com/item/pluto-material-design-free-bootstrap-template/">You are Using Free Version, Purchase Full Version to Get All Elements/Pages</a></h3>
                <a href="https://graygrids.com/item/pluto-material-design-free-bootstrap-template/" class="btn btn-larg btn-primary">Purchase Now</a>
            </div>


          </div>
        </div>
      </div>
    </section>

    <div class="map-area">
      <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6853.31334931688!2d149.5710983929677!3d-33.43399308961885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x63680231a1016da2!2sWestern+Region+Academy+of+Sport!5e0!3m2!1sen!2sbd!4v1436826340086" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
    </div>

    <section id="footer">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>Products</h3>
              <ul>
                <li><a href="http://wingthemes.com/">WingThemes</a>
                </li>
                <li><a href="http://graygrids.com/">Graygrids</a>
                </li>
                <li><a href="http://wpbean.com/">WPBean</a>
                </li>
                <li><a href="http://landingbow.com/">Landingbow</a>
                </li>
                <li><a href="http://freebiescircle.com/">FreebiesCicle</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>FAQs</h3>
              <ul>
                <li><a href="#">Why choose us?</a>
                </li>
                <li><a href="#">Where we are?</a>
                </li>
                <li><a href="#">Fees</a>
                </li>
                <li><a href="#">Guarantee</a>
                </li>
                <li><a href="#">Discount</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>About</h3>
              <ul>
                <li><a href="#">Career</a>
                </li>
                <li><a href="#">Partners</a>
                </li>
                <li><a href="#">Team</a>
                </li>
                <li><a href="#">Clients</a>
                </li>
                <li><a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>Find us on</h3>
              <a class="social" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
              <a class="social" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
              <a class="social" href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Go to Top Link -->
      <a href="#home" class="btn btn-primary back-to-top">
      <i class=" mdi-hardware-keyboard-arrow-up"></i>
      </a>
    </section>

    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="copyright-text">
© Pluto 2015 All right reserved. Designed and Developed by
<a href="http://graygrids.com/">
    GrayGrids
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>
    </div>


    <script src="<?php echo base_url() ?>/asserts/js/homepage/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/ripples.min.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/material.min.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/wow.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/jquery.mmenu.min.all.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/count-to.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/jquery.inview.min.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/classie.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/jquery.nav.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/smooth-on-scroll.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/smooth-scroll.js"></script>
    <script src="<?php echo base_url() ?>/asserts/js/homepage/main.js"></script>



    <script>
$(document).ready(function() {
    // This command is used to initialize some elements and make them work properly
    $.material.init();
});
    </script>

  </body>

</html>
