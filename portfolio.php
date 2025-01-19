<?php
require_once 'global/global-variable.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="thumbnail" content="assets/images/Techco_page_thumbnail.webp">
  <meta name="description" content="Techco – IT Solutions & Technology, Business Consulting, Software Company Site Template">
  <meta name="keywords" content="Bootstrap Site Template">
  <meta name="author" content="Webrock">
  <title><?= $page_title; ?> - <?= $company_name ?></title>
  <link rel="shortcut icon" href="assets/images/site_logo/favicon.png">
  <!-- Fraimwork - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <!-- Icon - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
  <!-- Animation - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
  <!-- Carousel - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
  <!-- Video & Image Popup - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.min.css">
  <!-- Counter - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/odometer.min.css">
  <!-- Custom - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>


  <body>

    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

      <!-- Site Header - Start
      ================================================== -->
      <?php include 'layouts/header.php'; ?>
      <!-- Site Header - End
      ================================================== -->

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Page Banner Section - Start
        ================================================== -->
        <section class="page_banner_section text-center" style="background-image: url('assets/images/shapes/bg_pattern_4.svg');">
          <div class="container">
            <div class="heading_focus_text text-white">
              Our 
              <span class="badge bg-secondary">Portfolio 😍</span>
            </div>
            <h1 class="page_title mb-0 text-white">Our Portfolio</h1>
          </div>
        </section>
        <!-- Page Banner Section - End
        ================================================== -->

        <!-- Portfolio Section - Start
        ================================================== -->
        <section class="portfolio_section section_space bg-light">
          <div class="container">
            <div class="filter_elements_nav">
              <ul class="unordered_list justify-content-center">
                <li class="active" data-filter="all">See All</li>
                <li data-filter="technology">Technology</li>
                <li data-filter="helpdesk">Helpdesk</li>
                <li data-filter="analysis">Analysis</li>
                <li data-filter="marketing">Marketing</li>
              </ul>
            </div>
            <div class="filter_elements_wrapper row">
              <div class="col-lg-4 technology">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_item_image_4.webp" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Driving Digital Transformation Explore the Depth of Our IT Projects
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Logo Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Finance</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 helpdesk">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_item_image_5.webp" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Explore Our IT Solutions Portfolio for Public Sector Organizations
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> App Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Public</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 analysis">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_item_image_6.webp" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Innovative Solutions Showcase the Diversity of Our IT Portfolio
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Card Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Transpiration</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 marketing">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_item_image_7.webp" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Tech Triumphs Celebrating Our Achievements in IT Solutions
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Web Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Logistic</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 technology">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_item_image_8.webp" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Revolutionizing IT Strategies A Closer Look at Our Dynamic IT Solutions
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Web Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Fution</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 helpdesk">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_item_image_9.webp" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Cloud Migration and Integration Project IT Solutions Portfolio
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Web Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Energy</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 analysis">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_item_image_10.webp" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Pioneering Progress Exploring the Evolution and Impact of
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Web Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Health</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 marketing">
                <div class="portfolio_block portfolio_layout_2">
                  <div class="portfolio_image">
                    <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                      <img src="assets/images/portfolio/portfolio_item_image_11.webp" alt="Mobile App Design">
                    </a>
                  </div>
                  <div class="portfolio_content">
                    <h3 class="portfolio_title">
                      <a href="portfolio_details.html">
                        Unlocking Potential Explore Our Comprehensive IT Portfolio
                      </a>
                    </h3>
                    <ul class="category_list unordered_list">
                      <li><a href="portfolio.html"><i class="fa-solid fa-tags"></i> Web Design</a></li>
                      <li><a href="portfolio.html"><i class="fa-solid fa-building"></i> Industry</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Portfolio Section - End
        ================================================== -->

        <!-- Call To Action Section - Start
        ================================================== -->
        <section class="calltoaction_section parallaxie" style="background-image: url('assets/images/backgrounds/bg_image_1.webp');">
          <div class="container text-center">
            <div class="heading_block text-white">
              <h2 class="heading_text">
                Ready to Work, Let's Chat
              </h2>
              <p class="heading_description mb-0">
                Our team of experts is ready to collaborate with you every step of the way, from initial consultation to implementation.
              </p>
            </div>
            <a class="btn btn-primary" href="contact.html">
              <span class="btn_label" data-text="Contact Us Today!">Contact Us Today!</span>
              <span class="btn_icon">
                <i class="fa-solid fa-arrow-up-right"></i>
              </span>
            </a>
          </div>
        </section>
        <!-- Call To Action Section - End
        ================================================== -->

      </main>
      <!-- Main Body - End
      ================================================== -->

      <!-- Site Footer - Start
      ================================================== -->
      <?php include 'layouts/footer.php'; ?>
      <!-- Site Footer - End
      ================================================== -->

    </div>
    <!-- Body Wrap - End -->

    <!-- Fraimwork - Jquery Include -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-dropdown-ml-hack.min.js"></script>

    <!-- Carousel - Jquery Include -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- Parallax Effects - jquery include -->
    <script src="assets/js/parallaxie.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/wow.min.js"></script>

    <!-- Countdown - Jquery Include -->
    <script src="assets/js/countdown.js"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="assets/js/magnific-popup.min.js"></script>

    <!-- Counter - Jquery Include -->
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>

    <!-- Circular Progress Bar - Jquery Include -->
    <script src="assets/js/circularProgressBar.min.js"></script>

    <!-- Custom - Jquery Include -->
    <script src="assets/js/main.js"></script>

  </body>

</html>