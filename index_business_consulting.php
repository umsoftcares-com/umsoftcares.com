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

<body class="index_business_consulting">
  <!-- Body Wrap - Start -->
  <div class="page_wrapper">
    <!-- Site Header - Start
      ================================================== -->
    <?php require_once 'layouts/header.php'; ?>
    <!-- Site Header - End
      ================================================== -->
    <!-- Main Body - Start
      ================================================== -->
    <main class="page_content">
      <!-- Business Consulting Section - Start
        ================================================== -->
      <section class="business_consulting_hero_section section_decoration mb-0" style="background-image: url('assets/images/hero/business_consulting_hero_section_bg.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-5">
              <div class="business_consulting_hero_content">
                <h1>
                  Innovative <mark><u>Growth</u></mark> Strategies
                </h1>
                <p>
                  Navigating the Path to Success: Insightful Consulting for Thriving Businesses
                </p>
                <a class="creative_btn" href="pricing.html">
                  <span class="btn_label bg-primary">Get Started Today</span>
                  <span class="btn_icon">
                    <i class="bg-primary fa-solid fa-arrow-up-right"></i>
                    <i class="bg-primary fa-solid fa-arrow-up-right"></i>
                  </span>
                </a>
                <div class="google_reviews">
                  <div class="review_admin_logo">
                    <img src="assets/images/hero/logo_google.svg" alt="Google Logo">
                  </div>
                  <div class="review_info_content">
                    <ul class="rating_block unordered_list">
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                    </ul>
                    <div class="review_counter">4.8 Google Reviews <b>(128 Reviews)</b></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="business_consulting_hero_image">
                <img class="hero_image" src="assets/images/hero/business_consulting_hero_image_1.webp" alt="Business Consulting">
                <div class="funfact_block capsule_layout wow fadeInUp" data-wow-delay=".1s">
                  <div class="funfact_content">
                    <div class="counter_value">
                      <span class="odometer" data-count="22">0</span>
                      <span>M+</span>
                    </div>
                    <h3 class="funfact_title mb-0">Happy Customer</h3>
                  </div>
                  <div class="funfact_icon">
                    <img src="assets/images/icons/icon_user_3.svg" alt="Techco - SVG Icon User">
                  </div>
                </div>
                <div class="funfact_block capsule_layout wow fadeInUp" data-wow-delay=".2s">
                  <div class="funfact_icon">
                    <img src="assets/images/icons/icon_wallet.svg" alt="Techco - SVG Icon Wallet">
                  </div>
                  <div class="funfact_content">
                    <h3 class="funfact_title mb-0">Company Value</h3>
                    <div class="counter_value">
                      <span>$</span>
                      <span class="odometer" data-count="500000">0</span>
                    </div>
                  </div>
                </div>
                <div class="funfact_block capsule_layout wow fadeInUp" data-wow-delay=".3s">
                  <div class="funfact_content pt-2 pb-1">
                    <h3 class="funfact_title mb-0 text-center">Success Rate</h3>
                    <div class="counter_value justify-content-center">
                      <span class="odometer" data-count="98">0</span>
                      <span>%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="decoration_item shape_1">
          <img src="assets/images/hero/business_consulting_hero_image_2.webp" alt="Shape Image">
        </div>
      </section>
      <!-- Business Consulting Section - End
        ================================================== -->
      <!-- Client Logo Section - Start
        ================================================== -->
      <section class="client_logo_section section_space bg-transparent mb-0">
        <div class="container">
          <div class="heading_block text-center">
            <h2 class="heading_text mb-0">
              "Brands We Collaborate With"
            </h2>
          </div>
          <div class="client_logo_carousel swiper no_style">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_1.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_2.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_3.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_4.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_5.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_6.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_7.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_1.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_2.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_3.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_4.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_5.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_6.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_7.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_1.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_2.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_3.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_4.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_5.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_6.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="client_logo_item">
                  <img src="assets/images/clients/client_logo_7.webp" alt="Techco - Client Logo Image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Client Logo Section - End
        ================================================== -->
      <!-- Empowering Success Section - Start
        ================================================== -->
      <section class="empowering_success_section section_space bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="heading_block text-center">
                <h2 class="heading_text mb-0">
                  Empowering Success Through Strategic Consulting Since 2001
                </h2>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="image_wrap position-relative">
                <img class="rounded" src="assets/images/about/about_image_7.webp" alt="Techco - About Image">
                <a class="video_btn ripple_effect" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                  <span class="btn_icon">
                    <i class="fa-solid fa-play"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="empowering_services unordered_list_block ps-lg-5">
                <li>
                  <div class="iconbox_block layout_icon_left">
                    <div class="iconbox_icon">
                      <img src="assets/images/icons/icon_bulb.svg" alt="Bulb SVG Icon">
                    </div>
                    <div class="iconbox_content">
                      <h3 class="iconbox_title">Tailored Solutions</h3>
                      <p class="mb-0">
                        Our consulting services are customized to suit the unique needs and goals of each client, ensuring precise alignment with their business objectives.
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="iconbox_block layout_icon_left">
                    <div class="iconbox_icon">
                      <img src="assets/images/icons/icon_user_rating.svg" alt="User Rating SVG Icon">
                    </div>
                    <div class="iconbox_content">
                      <h3 class="iconbox_title">Collaborative Approach</h3>
                      <p class="mb-0">
                        We believe in fostering strong partnerships with our clients, working closely with them to understand their challenges, identify opportunities.
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="iconbox_block layout_icon_left">
                    <div class="iconbox_icon">
                      <img src="assets/images/icons/icon_hand_shake.svg" alt="Hand Shake SVG Icon">
                    </div>
                    <div class="iconbox_content">
                      <h3 class="iconbox_title">Expert Team Members</h3>
                      <p class="mb-0">
                        We believe in fostering strong partnerships with our clients, working closely with them to understand their challenges, identify opportunities.
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Empowering Success Section - End
        ================================================== -->
      <!-- Business Consulting Service Section - Start
        ================================================== -->
      <section class="business_consulting_service_section section_space" style="background-image: url('assets/images/backgrounds/bg_image_3.webp');">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="heading_block text-center">
                <h2 class="heading_text">
                  Transformative Solutions Tailored to Your Needs
                </h2>
                <p class="heading_description mb-0 text-dark">
                  Driving Growth and Innovation Through Customized Strategies
                </p>
              </div>
            </div>
          </div>
          <div class="business_consulting_services row">
            <div class="col-lg-4">
              <div class="iconbox_block">
                <div class="iconbox_icon">
                  <img src="assets/images/icons/icon_analisis_2.svg" alt="Analisis SVG Icon">
                </div>
                <div class="iconbox_content">
                  <h3 class="iconbox_title">
                    <a href="service_details.html">
                      Strategic Planning and Execution
                    </a>
                  </h3>
                  <p class="mb-0">
                    Our consulting services are customized to suit the unique needs and goals of each client, ensuring precise alignment with their business objectives.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="iconbox_block">
                <div class="iconbox_icon">
                  <img src="assets/images/icons/icon_process.svg" alt="Process SVG Icon">
                </div>
                <div class="iconbox_content">
                  <h3 class="iconbox_title">
                    <a href="service_details.html">
                      Business Process Optimization
                    </a>
                  </h3>
                  <p class="mb-0">
                    Our consulting services are customized to suit the unique needs and goals of each client, ensuring precise alignment with their business objectives.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="iconbox_block">
                <div class="iconbox_icon">
                  <img src="assets/images/icons/icon_chart_2.svg" alt="Chart SVG Icon">
                </div>
                <div class="iconbox_content">
                  <h3 class="iconbox_title">
                    <a href="service_details.html">
                      Digital Transformation Consulting
                    </a>
                  </h3>
                  <p class="mb-0">
                    Our consulting services are customized to suit the unique needs and goals of each client, ensuring precise alignment with their business objectives.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="iconbox_block">
                <div class="iconbox_icon">
                  <img src="assets/images/icons/icon_meeting.svg" alt="Meeting SVG Icon">
                </div>
                <div class="iconbox_content">
                  <h3 class="iconbox_title">
                    <a href="service_details.html">
                      Strategic Planning and Execution
                    </a>
                  </h3>
                  <p class="mb-0">
                    Our consulting services are customized to suit the unique needs and goals of each client, ensuring precise alignment with their business objectives.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="iconbox_block">
                <div class="iconbox_icon">
                  <img src="assets/images/icons/icon_bulb_2.svg" alt="Bulb SVG Icon">
                </div>
                <div class="iconbox_content">
                  <h3 class="iconbox_title">
                    <a href="service_details.html">
                      Change Management Solutions
                    </a>
                  </h3>
                  <p class="mb-0">
                    Our consulting services are customized to suit the unique needs and goals of each client, ensuring precise alignment with their business objectives.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="iconbox_block">
                <div class="iconbox_icon">
                  <img src="assets/images/icons/icon_speed_miter.svg" alt="Speed Miter SVG Icon">
                </div>
                <div class="iconbox_content">
                  <h3 class="iconbox_title">
                    <a href="service_details.html">
                      Performance Metrics and KPI Development
                    </a>
                  </h3>
                  <p class="mb-0">
                    Our consulting services are customized to suit the unique needs and goals of each client, ensuring precise alignment with their business objectives.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="btns_group pb-0">
            <a class="creative_btn" href="pricing.html">
              <span class="btn_label bg-primary">Get Started Today</span>
              <span class="btn_icon">
                <i class="bg-primary fa-solid fa-arrow-up-right"></i>
                <i class="bg-primary fa-solid fa-arrow-up-right"></i>
              </span>
            </a>
          </div>
        </div>
      </section>
      <!-- Business Consulting Service Section - End
        ================================================== -->
      <!-- Review & About Section - Start
        ================================================== -->
      <section class="review_and_about_section section_space bg-light">
        <div class="container">
          <div class="review_bg_box bg-success" style="background-image: url('assets/images/icons/icon_quote_2.svg');">
            <div class="heading_block text-center text-white">
              <h2 class="heading_text mb-0">
                Few Stories from our Client
              </h2>
            </div>
            <div class="review_4col_carousel swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="review_block_3">
                    <ul class="rating_block unordered_list">
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                    </ul>
                    <p class="review_commtent">
                      "Working with Techco was a game-changer for our business. Their tailored solutions and dedicated support propelled us to new heights"
                    </p>
                    <div class="review_admin">
                      <div class="review_admin_image">
                        <img src="assets/images/avatar/avatar_11.webp" alt="Maverick Phoenix">
                      </div>
                      <div class="review_admin_info">
                        <h4 class="review_admin_name">David Clark</h4>
                        <span class="review_admin_designation">Board Member, UNIQA</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review_block_3">
                    <ul class="rating_block unordered_list">
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                    </ul>
                    <p class="review_commtent">
                      "I can't thank Techco enough for their expertise Their strategic guidance revolutionized our operations and led to significant growth."
                    </p>
                    <div class="review_admin">
                      <div class="review_admin_image">
                        <img src="assets/images/avatar/avatar_10.webp" alt="Maverick Phoenix">
                      </div>
                      <div class="review_admin_info">
                        <h4 class="review_admin_name">Sarah Johnson</h4>
                        <span class="review_admin_designation">Board Member, UNIQA</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review_block_3">
                    <ul class="rating_block unordered_list">
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                    </ul>
                    <p class="review_commtent">
                      "Choosing Techco was one of the best decisions we made. Their team's knowledge and passion for our success were evident every step of the way."
                    </p>
                    <div class="review_admin">
                      <div class="review_admin_image">
                        <img src="assets/images/avatar/avatar_9.webp" alt="Maverick Phoenix">
                      </div>
                      <div class="review_admin_info">
                        <h4 class="review_admin_name">Michael Smith</h4>
                        <span class="review_admin_designation">Board Member, UNIQA</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review_block_3">
                    <ul class="rating_block unordered_list">
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                    </ul>
                    <p class="review_commtent">
                      "Partnering with Techco was a game-changer. Their innovative strategies and personalized approach exceeded our expectations"
                    </p>
                    <div class="review_admin">
                      <div class="review_admin_image">
                        <img src="assets/images/avatar/avatar_8.webp" alt="Maverick Phoenix">
                      </div>
                      <div class="review_admin_info">
                        <h4 class="review_admin_name">Emily Brown</h4>
                        <span class="review_admin_designation">Board Member, UNIQA</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review_block_3">
                    <ul class="rating_block unordered_list">
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                    </ul>
                    <p class="review_commtent">
                      "Working with Techco was a game-changer for our business. Their tailored solutions and dedicated support propelled us to new heights"
                    </p>
                    <div class="review_admin">
                      <div class="review_admin_image">
                        <img src="assets/images/avatar/avatar_11.webp" alt="Maverick Phoenix">
                      </div>
                      <div class="review_admin_info">
                        <h4 class="review_admin_name">David Clark</h4>
                        <span class="review_admin_designation">Board Member, UNIQA</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review_block_3">
                    <ul class="rating_block unordered_list">
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                    </ul>
                    <p class="review_commtent">
                      "I can't thank Techco enough for their expertise Their strategic guidance revolutionized our operations and led to significant growth."
                    </p>
                    <div class="review_admin">
                      <div class="review_admin_image">
                        <img src="assets/images/avatar/avatar_10.webp" alt="Maverick Phoenix">
                      </div>
                      <div class="review_admin_info">
                        <h4 class="review_admin_name">Sarah Johnson</h4>
                        <span class="review_admin_designation">Board Member, UNIQA</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review_block_3">
                    <ul class="rating_block unordered_list">
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                    </ul>
                    <p class="review_commtent">
                      "Choosing Techco was one of the best decisions we made. Their team's knowledge and passion for our success were evident every step of the way."
                    </p>
                    <div class="review_admin">
                      <div class="review_admin_image">
                        <img src="assets/images/avatar/avatar_9.webp" alt="Maverick Phoenix">
                      </div>
                      <div class="review_admin_info">
                        <h4 class="review_admin_name">Michael Smith</h4>
                        <span class="review_admin_designation">Board Member, UNIQA</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="review_block_3">
                    <ul class="rating_block unordered_list">
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                      <li><i class="fa-solid fa-star fa-fw"></i></li>
                    </ul>
                    <p class="review_commtent">
                      "Partnering with Techco was a game-changer. Their innovative strategies and personalized approach exceeded our expectations"
                    </p>
                    <div class="review_admin">
                      <div class="review_admin_image">
                        <img src="assets/images/avatar/avatar_8.webp" alt="Maverick Phoenix">
                      </div>
                      <div class="review_admin_info">
                        <h4 class="review_admin_name">Emily Brown</h4>
                        <span class="review_admin_designation">Board Member, UNIQA</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section_space pb-0">
          <div class="container">
            <div class="row align-items-center justify-content-lg-around">
              <div class="col-lg-6">
                <div class="heading_block">
                  <h2 class="heading_text">
                    Why Partner with Us: Unleashing Your Business Potential
                  </h2>
                  <p class="heading_description text-dark pe-lg-5">
                    Unleash Your Potential: Partner with the Experts for Success. Experience Tailored Solutions, Dedication, and Proven Results. Maximize Growth Opportunities Through Strategic Collaboration. Choose Excellence:
                  </p>
                  <p class="heading_description mb-0 text-dark pe-lg-5">
                    Elevate Your Business to New Heights. Forge Unstoppable Partnerships for Unbeatable Success.
                  </p>
                </div>
                <a class="creative_btn" href="pricing.html">
                  <span class="btn_label bg-primary">Get Started Today</span>
                  <span class="btn_icon">
                    <i class="bg-primary fa-solid fa-arrow-up-right"></i>
                    <i class="bg-primary fa-solid fa-arrow-up-right"></i>
                  </span>
                </a>
              </div>
              <div class="col-lg-4">
                <div class="about_image_3">
                  <img class="image_wrap" src="assets/images/about/about_image_8.webp" alt="Business Consulting">
                  <div class="funfact_block capsule_layout">
                    <div class="funfact_icon">
                      <img src="assets/images/icons/icon_wallet.svg" alt="Techco - SVG Icon Wallet">
                    </div>
                    <div class="funfact_content">
                      <h3 class="funfact_title mb-0">Company Value</h3>
                      <div class="counter_value">
                        <span>$</span>
                        <span class="odometer" data-count="500000">0</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Review & About Section - End
        ================================================== -->
      <!-- Blog Section - Start
        ================================================== -->
      <section class="blog_section_2 section_space" style="background-image: url('assets/images/backgrounds/bg_image_4.webp');">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="heading_block text-center">
                <h2 class="heading_text">
                  Explore Our Latest Perspectives and Expertise
                </h2>
                <p class="heading_description text-dark mb-0">
                  Stay Informed, Stay Ahead: Discover Fresh Ideas and Strategies
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="blog_post_block_2">
                <div class="blog_post_image">
                  <a href="blog_details.html">
                    <img src="assets/images/blog/blog_post_image_15.webp" alt="Techco Blog Post Image">
                  </a>
                </div>
                <div class="blog_post_content">
                  <ul class="category_list unordered_list">
                    <li><a href="portfolio.html">Live Well</a></li>
                  </ul>
                  <h3 class="post_title">
                    <a href="blog_details.html">
                      5 ways to relieve stress during the holidays
                    </a>
                  </h3>
                  <ul class="post_meta unordered_list">
                    <li>
                      <a href="#!">
                        By <b>Riley Steinmetz</b>
                      </a>
                    </li>
                    <li>
                      <a href="#!">
                        April 20, 2024
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog_post_block_2">
                <div class="blog_post_image">
                  <a href="blog_details.html">
                    <img src="assets/images/blog/blog_post_image_16.webp" alt="Techco Blog Post Image">
                  </a>
                </div>
                <div class="blog_post_content">
                  <ul class="category_list unordered_list">
                    <li><a href="portfolio.html">Get Well</a></li>
                  </ul>
                  <h3 class="post_title">
                    <a href="blog_details.html">
                      Baby flat head pillow - why it's important
                    </a>
                  </h3>
                  <ul class="post_meta unordered_list">
                    <li>
                      <a href="#!">
                        By <b>Riley Steinmetz</b>
                      </a>
                    </li>
                    <li>
                      <a href="#!">
                        April 20, 2024
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog Section - End
        ================================================== -->
      <!-- Call To Action Section - Start
        ================================================== -->
      <section class="calltoaction_section parallaxie" style="background-image: url('assets/images/backgrounds/bg_image_5.webp');">
        <div class="container">
          <div class="row justify-content-lg-end">
            <div class="col-lg-7">
              <div class="instant_contact_form bg-primary shadow-none">
                <div class="small_title text-white">
                  <i class="fa-solid fa-envelope-open-text text-white"></i>
                  Let's Connect!
                </div>
                <h3 class="form_title text-white">
                  Send us a message, and we'll promptly discuss your project with you.
                </h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="input_title" for="input_name">
                        <i class="fa-regular fa-user"></i>
                      </label>
                      <input id="input_name" class="form-control" type="text" name="name" placeholder="Your Name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="input_title" for="input_email">
                        <i class="fa-regular fa-envelope"></i>
                      </label>
                      <input id="input_email" class="form-control" type="email" name="email" placeholder="Your Enter" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="input_title" for="input_phone">
                        <i class="fa-regular fa-phone-volume"></i>
                      </label>
                      <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="Your Phone No." required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="input_title" for="input_company">
                        <i class="fa-regular fa-globe"></i>
                      </label>
                      <input id="input_company" class="form-control" type="text" name="companyname" placeholder="Your Company Name">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label class="input_title" for="input_textarea">
                        <i class="fa-regular fa-comments"></i>
                      </label>
                      <textarea id="input_textarea" class="form-control" name="message" placeholder="How can we help you?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">
                      <span class="btn_label" data-text="Send Request">Send Request</span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
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