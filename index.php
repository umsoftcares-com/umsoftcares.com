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
  <link rel="shortcut icon" href="assets/images/site_logo/favicon-black.png">
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
    <?php include 'layouts/header.php'; ?>
    <!-- Main Body - Start
      ================================================== -->
    <main class="page_content">
      <!-- IT Solution Hero Section - Start
        ================================================== -->
      <section class="it_solution_hero_section">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="it_solution_hero_content" style="background-image: url('assets/images/shapes/it_solution_hero_bg_1.svg');">
                <div class="heading_focus_text mb-0 d-inline-flex align-items-center">👋 Hi We <span class="badge bg-secondary text-white">Are <?= $company_name ?></span></div>
                <h1>
                  Grow your Business Organic & IT Solution Technology
                </h1>
                <p>
                  In today's competitive business, the demand for efficient and cost-effective IT solutions has never been more critical.
                </p>
                <ul class="btns_group unordered_list p-0 justify-content-start">
                  <li>
                    <a class="btn" href="pricing.html">
                      <span class="btn_label" data-text="Get Started">Get Started</span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="review_short_info">
                      <div class="d-flex">
                        <img src="assets/images/icons/icon_stars_trustpilot.svg" alt="Techco - Trustpilot Review">
                        <span>4.8</span>
                      </div>
                      <div class="review_counter">From <b>200+</b> reviews</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-5">
              <ul class="it_solution_hero_images unordered_list">
                <li>
                  <img src="assets/images/hero/it_solution_hero_image_1.webp" alt="Techco - IT Solution - Hero Image 1">
                </li>
                <li>
                  <div class="worldwide_clients">
                    <div class="counter_value">150+</div>
                    <p>
                      Worldwide Country has lots of clients
                    </p>
                    <ul class="avatar_group unordered_list">
                      <li>
                        <img src="assets/images/avatar/avatar_1.webp" alt="Techco - Avatar Image">
                      </li>
                      <li>
                        <img src="assets/images/avatar/avatar_2.webp" alt="Techco - Avatar Image">
                      </li>
                      <li>
                        <img src="assets/images/avatar/avatar_3.webp" alt="Techco - Avatar Image">
                      </li>
                      <li>
                        5k+
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <ul class="categories unordered_list_block">
                    <li>
                      <a href="#!">
                        <span>Data Security</span>
                        <i class="fa-solid fa-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#!">
                        <i class="fa-solid fa-plus"></i>
                        <span>Web Development</span>
                      </a>
                    </li>
                    <li>
                      <a href="#!">
                        <span>Analytics & Optimization</span>
                        <i class="fa-solid fa-plus"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="business_growth_content" style="background-image: url('assets/images/hero/it_solution_hero_image_2.webp');">
                    <div class="progress_content">
                      <div class="business_growth" data-pie='{ "percent": 88 }'></div>
                      <p>
                        get 88% of the best services and growth business
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- IT Solution Hero Section - End
        ================================================== -->
      <!-- Client Logo Section - Start
        ================================================== -->
      <section class="client_logo_section section_space" style="background-image: url('assets/images/shapes/bg_pattern_1.svg');">
        <div class="container">
          <div class="section_space pt-0">
            <div class="heading_block text-center">
              <div class="heading_focus_text mb-0">
                <span class="badge bg-secondary text-white">Brand We</span>
                Work With
              </div>
            </div>
            <div class="client_logo_carousel swiper">
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
          <div class="row funfact_wrapper">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-md-6">
                  <div class="funfact_block">
                    <div class="funfact_icon">
                      <img src="assets/images/icons/icon_head.svg" alt="Techco - SVG Icon Head">
                    </div>
                    <div class="funfact_content">
                      <div class="counter_value">
                        <span class="odometer" data-count="25">0</span>
                        <span>+</span>
                      </div>
                      <h3 class="funfact_title mb-0">Years of experience</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="funfact_block">
                    <div class="funfact_icon">
                      <img src="assets/images/icons/icon_check.svg" alt="Techco - SVG Icon Check">
                    </div>
                    <div class="funfact_content">
                      <div class="counter_value">
                        <span class="odometer" data-count="280">0</span>
                        <span>+</span>
                      </div>
                      <h3 class="funfact_title mb-0">Success Stories</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="funfact_block">
                    <div class="funfact_icon">
                      <img src="assets/images/icons/icon_like.svg" alt="Techco - SVG Icon Like">
                    </div>
                    <div class="funfact_content">
                      <div class="counter_value">
                        <span class="odometer" data-count="5.6">0</span>
                        <span>K+</span>
                      </div>
                      <h3 class="funfact_title mb-0">Companies Trust Us</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="funfact_block">
                    <div class="funfact_icon">
                      <img src="assets/images/icons/icon_dart_board.svg" alt="Techco - SVG Icon Head">
                    </div>
                    <div class="funfact_content">
                      <div class="counter_value">
                        <span class="odometer" data-count="100">0</span>
                        <span>%</span>
                      </div>
                      <h3 class="funfact_title mb-0">Results Guaranteed</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="our_world_employees">
                <div class="image_wrap">
                  <img src="assets/images/about/about_image_1.webp" alt="Techco - Employees Guoup Image">
                </div>
                <div class="content_wrap">
                  <h3 class="title_text mb-0">
                    <b class="d-block">12000+</b> employees in 30 countries in Europe
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Client Logo Section - End
        ================================================== -->
      <!-- About Section - Start
        ================================================== -->
      <section class="about_section section_space">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
              <div class="about_image_1">
                <img src="assets/images/about/about_image_9.webp" alt="Techco - About Image">
                <img src="assets/images/about/about_image_11.webp" data-parallax='{"y" : 80, "smoothness": 6}' alt="Techco - About Image">
                <img src="assets/images/about/about_image_10.webp" data-parallax='{"y" : -80, "smoothness": 6}' alt="Techco - About Image">
              </div>
            </div>
            <div class="col-lg-5">
              <div class="about_content">
                <div class="heading_block">
                  <div class="heading_focus_text">
                    We are 😃
                    <span class="badge bg-secondary text-white">Techco</span>
                  </div>
                  <h2 class="heading_text">
                    Our Commitment to Client Satisfaction
                  </h2>
                  <p class="heading_description mb-0">
                    At Techco, our commitment to client satisfaction is at the core of everything we do. We understand clients' success.
                  </p>
                </div>
                <ul class="icon_list unordered_list_block mb-5">
                  <li>
                    <span class="icon_list_icon">
                      <i class="fa-solid fa-circle fa-fw"></i>
                    </span>
                    <span class="icon_list_text">
                      Grow your business the right way.
                    </span>
                  </li>
                  <li>
                    <span class="icon_list_icon">
                      <i class="fa-solid fa-circle fa-fw"></i>
                    </span>
                    <span class="icon_list_text">
                      Let business growth help your business grow.
                    </span>
                  </li>
                  <li>
                    <span class="icon_list_icon">
                      <i class="fa-solid fa-circle fa-fw"></i>
                    </span>
                    <span class="icon_list_text">
                      Helping you to get better.
                    </span>
                  </li>
                </ul>
                <ul class="btns_group unordered_list p-0 justify-content-start">
                  <li>
                    <a class="btn" href="pricing.html">
                      <span class="btn_label" data-text="Get Started">Get Started</span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a class="video_btn" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                      <span class="btn_icon">
                        <i class="fa-solid fa-play"></i>
                      </span>
                      <span class="btn_label">How We Works</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About Section - End
        ================================================== -->
      <!-- Policy Section - Start
        ================================================== -->
      <section class="policy_section">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="iconbox_block layout_icon_left">
                <div class="iconbox_icon">
                  <img src="assets/images/icons/icon_user_check.svg" alt="User Check SVG Icon">
                </div>
                <div class="iconbox_content">
                  <h3 class="iconbox_title">Expert Team Members</h3>
                  <p class="mb-0">
                    We take pride in assembling a <br> diverse and highly skilled.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="iconbox_block layout_icon_left">
                <div class="iconbox_icon bg-warning-subtle">
                  <img src="assets/images/icons/icon_headphone.svg" alt="Headphone SVG Icon">
                </div>
                <div class="iconbox_content">
                  <h3 class="iconbox_title">Fastest Customer Service</h3>
                  <p class="mb-0">
                    We pride ourselves on providing the fastest customer service industry.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="iconbox_block layout_icon_left">
                <div class="iconbox_icon bg-secondary-subtle">
                  <img src="assets/images/icons/icon_dollar.svg" alt="Dollar SVG Icon">
                </div>
                <div class="iconbox_content">
                  <h3 class="iconbox_title">reasonable Pricing</h3>
                  <p class="mb-0">
                    We believe in providing reasonable pricing that offers exceptional.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Policy Section - End
        ================================================== -->
      <!-- Service Section - Start
        ================================================== -->
      <section class="service_section section_space xb-hidden pb-0">
        <div class="container">
          <div class="heading_block text-center">
            <div class="heading_focus_text">
              Our
              <span class="badge bg-secondary text-white">Specialize</span>
            </div>
            <h2 class="heading_text mb-0">
              Featured Services
            </h2>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="service_block">
                <div class="service_image">
                  <img src="assets/images/services/service_image_1.webp" alt="IT Management Services">
                </div>
                <div class="service_content">
                  <h3 class="service_title">
                    <a href="service_details.html">
                      IT Management Services
                    </a>
                  </h3>
                  <div class="links_wrapper">
                    <ul class="category_btns_group unordered_list">
                      <li><a href="#!">Strategy</a></li>
                      <li><a href="#!">Consultation</a></li>
                    </ul>
                    <a class="icon_block" href="service_details.html">
                      <i class="fa-regular fa-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="service_block">
                <div class="service_image">
                  <img src="assets/images/services/service_image_2.webp" alt="IT Management Services">
                </div>
                <div class="service_content">
                  <h3 class="service_title">
                    <a href="service_details.html">
                      Data Tracking and Security
                    </a>
                  </h3>
                  <div class="links_wrapper">
                    <ul class="category_btns_group unordered_list">
                      <li><a href="#!">Management</a></li>
                      <li><a href="#!">Transfer</a></li>
                    </ul>
                    <a class="icon_block" href="service_details.html">
                      <i class="fa-regular fa-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service_block">
                <div class="service_image">
                  <img src="assets/images/services/service_image_3.webp" alt="IT Management Services">
                </div>
                <div class="service_content">
                  <h3 class="service_title">
                    <a href="service_details.html">
                      Website Development
                    </a>
                  </h3>
                  <div class="links_wrapper">
                    <ul class="category_btns_group unordered_list">
                      <li><a href="#!">Landing Page</a></li>
                      <li><a href="#!">Plugins</a></li>
                    </ul>
                    <a class="icon_block" href="service_details.html">
                      <i class="fa-regular fa-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service_block">
                <div class="service_image">
                  <img src="assets/images/services/service_image_4.webp" alt="IT Management Services">
                </div>
                <div class="service_content">
                  <h3 class="service_title">
                    <a href="service_details.html">
                      Modern Technology Solution
                    </a>
                  </h3>
                  <div class="links_wrapper">
                    <ul class="category_btns_group unordered_list">
                      <li><a href="#!">Consultation</a></li>
                      <li><a href="#!">solution</a></li>
                    </ul>
                    <a class="icon_block" href="service_details.html">
                      <i class="fa-regular fa-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service_block">
                <div class="service_image">
                  <img src="assets/images/services/service_image_5.webp" alt="IT Management Services">
                </div>
                <div class="service_content">
                  <h3 class="service_title">
                    <a href="service_details.html">
                      UI/UX Design Services
                    </a>
                  </h3>
                  <div class="links_wrapper">
                    <ul class="category_btns_group unordered_list">
                      <li><a href="#!">Website</a></li>
                      <li><a href="#!">Mobile App</a></li>
                    </ul>
                    <a class="icon_block" href="service_details.html">
                      <i class="fa-regular fa-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="btns_group pb-0">
            <a class="btn btn-outline-light" href="service.html">
              <span class="btn_label" data-text="More Services">More Services</span>
              <span class="btn_icon">
                <i class="fa-solid fa-arrow-up-right"></i>
              </span>
            </a>
          </div>
        </div>
      </section>
      <!-- Service Section - End
        ================================================== -->
      <!-- Portfolio Section - Start
        ================================================== -->
      <section class="portfolio_section xb-hidden section_space pb-0">
        <div class="container">
          <div class="heading_block">
            <div class="row align-items-end">
              <div class="col-lg-7">
                <div class="heading_focus_text">
                  <span class="badge bg-secondary text-white">Crafting</span>
                  Success With 😍 Project
                </div>
                <h2 class="heading_text">
                  Our Recent Best Works
                </h2>
                <p class="heading_description mb-0">
                  Our recent projects highlight our expertise in delivering tailored solutions that meet the unique needs and objectives of our clients,custom software.
                </p>
              </div>
              <div class="col-lg-5 d-none d-lg-flex justify-content-end">
                <a class="btn btn-primary" href="pricing.html">
                  <span class="btn_label" data-text="All Works">All Works</span>
                  <span class="btn_icon">
                    <i class="fa-solid fa-arrow-up-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="portfolio_carousel">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="portfolio_block">
                <div class="portfolio_image">
                  <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                    <img src="assets/images/portfolio/portfolio_item_image_1.webp" alt="Mobile App Design">
                  </a>
                </div>
                <div class="portfolio_content">
                  <h3 class="portfolio_title">
                    <a href="portfolio_details.html">
                      Mobile App Design
                    </a>
                  </h3>
                  <ul class="category_list unordered_list">
                    <li><a href="portfolio.html">App Design</a></li>
                  </ul>
                  <a class="btn btn-outline-light" href="portfolio_details.html">
                    <span class="btn_label" data-text="Explore">Explore</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="portfolio_block">
                <div class="portfolio_image">
                  <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                    <img src="assets/images/portfolio/portfolio_item_image_2.webp" alt="Dashboard Design">
                  </a>
                </div>
                <div class="portfolio_content">
                  <h3 class="portfolio_title">
                    <a href="portfolio_details.html">
                      Dashboard Design
                    </a>
                  </h3>
                  <ul class="category_list unordered_list">
                    <li><a href="portfolio.html">Web Design</a></li>
                  </ul>
                  <a class="btn btn-outline-light" href="portfolio_details.html">
                    <span class="btn_label" data-text="Explore">Explore</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="portfolio_block">
                <div class="portfolio_image">
                  <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                    <img src="assets/images/portfolio/portfolio_item_image_3.webp" alt="Technology Solution">
                  </a>
                </div>
                <div class="portfolio_content">
                  <h3 class="portfolio_title">
                    <a href="portfolio_details.html">
                      Technology Solution
                    </a>
                  </h3>
                  <ul class="category_list unordered_list">
                    <li><a href="portfolio.html">3D Design</a></li>
                  </ul>
                  <a class="btn btn-outline-light" href="portfolio_details.html">
                    <span class="btn_label" data-text="Explore">Explore</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="portfolio_block">
                <div class="portfolio_image">
                  <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                    <img src="assets/images/portfolio/portfolio_item_image_1.webp" alt="Mobile App Design">
                  </a>
                </div>
                <div class="portfolio_content">
                  <h3 class="portfolio_title">
                    <a href="portfolio_details.html">
                      Mobile App Design
                    </a>
                  </h3>
                  <ul class="category_list unordered_list">
                    <li><a href="portfolio.html">App Design</a></li>
                  </ul>
                  <a class="btn btn-outline-light" href="portfolio_details.html">
                    <span class="btn_label" data-text="Explore">Explore</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="portfolio_block">
                <div class="portfolio_image">
                  <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                    <img src="assets/images/portfolio/portfolio_item_image_2.webp" alt="Dashboard Design">
                  </a>
                </div>
                <div class="portfolio_content">
                  <h3 class="portfolio_title">
                    <a href="portfolio_details.html">
                      Dashboard Design
                    </a>
                  </h3>
                  <ul class="category_list unordered_list">
                    <li><a href="portfolio.html">Web Design</a></li>
                  </ul>
                  <a class="btn btn-outline-light" href="portfolio_details.html">
                    <span class="btn_label" data-text="Explore">Explore</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="portfolio_block">
                <div class="portfolio_image">
                  <a class="portfolio_image_wrap bg-light" href="portfolio_details.html">
                    <img src="assets/images/portfolio/portfolio_item_image_3.webp" alt="Technology Solution">
                  </a>
                </div>
                <div class="portfolio_content">
                  <h3 class="portfolio_title">
                    <a href="portfolio_details.html">
                      Technology Solution
                    </a>
                  </h3>
                  <ul class="category_list unordered_list">
                    <li><a href="portfolio.html">3D Design</a></li>
                  </ul>
                  <a class="btn btn-outline-light" href="portfolio_details.html">
                    <span class="btn_label" data-text="Explore">Explore</span>
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="portfolio-swiper-pagination"></div>
        </div>
        <div class="container text-center d-block d-lg-none">
          <div class="btns_group pb-0">
            <a class="btn btn-primary" href="pricing.html">
              <span class="btn_label" data-text="All Works">All Works</span>
              <span class="btn_icon">
                <i class="fa-solid fa-arrow-up-right"></i>
              </span>
            </a>
          </div>
        </div>
      </section>
      <!-- Portfolio Section - End
        ================================================== -->
      <!-- Review Section - Start
        ================================================== -->
      <section class="review_section section_space bg-light" style="background-image: url('assets/images/shapes/bg_pattern_2.svg');">
        <div class="container">
          <div class="heading_block text-center">
            <div class="heading_focus_text">
              <span class="badge bg-secondary text-white">Client</span>
              Testimonial 🙂
            </div>
            <h2 class="heading_text mb-0">
              What clients say
            </h2>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="review_block pb-0">
                <h3 class="review_title">“Amazing services”</h3>
                <p class="review_commtent">
                  As a startup, we needed a technology partner who could help us bring our vision to life. Itsafe exceeded our expectations with their innovative solutions and proactive approach. They guided us through every step of the process, our journey together.
                </p>
                <div class="review_admin">
                  <div class="review_admin_image">
                    <img src="assets/images/avatar/avatar_4.webp" alt="Roman Dymtro">
                  </div>
                  <div class="review_admin_info">
                    <h4 class="review_admin_name">Roman Dymtro</h4>
                    <span class="review_admin_designation">Director of Marketing</span>
                  </div>
                </div>
              </div>
              <div class="review_block pb-0">
                <h3 class="review_title">“Fast Respond”</h3>
                <p class="review_commtent">
                  Working with Techco was a seamless experience from start to finish. Their team took the time to understand our business goals and challenges, and they delivered a solution that addressed our needs perfectly. Their professionalism, expertise, and dedication to customer satisfaction were evident throughout the project. We look forward to working with Techco on future initiatives.
                </p>
                <div class="review_admin">
                  <div class="review_admin_image">
                    <img src="assets/images/avatar/avatar_6.webp" alt="Bohdan Maksym">
                  </div>
                  <div class="review_admin_info">
                    <h4 class="review_admin_name">Bohdan Maksym</h4>
                    <span class="review_admin_designation">Monprofit Director</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="review_block pb-0">
                <h3 class="review_title">“We Are Satisfied’’</h3>
                <p class="review_commtent">
                  We've been partnering with Techco for several years, and they have consistently delivered exceptional results. From custom software development to cloud services integration, their solutions have helped us stay ahead of the competition and adapt to evolving market demands. Their team's expertise, reliability, and commitment to customer satisfaction make them our go-to IT partner.
                </p>
                <div class="review_admin">
                  <div class="review_admin_image">
                    <img src="assets/images/avatar/avatar_5.webp" alt="Michel johnson">
                  </div>
                  <div class="review_admin_info">
                    <h4 class="review_admin_name">Michel johnson</h4>
                    <span class="review_admin_designation">Tech Startup Founder</span>
                  </div>
                </div>
              </div>
              <div class="review_block pb-0">
                <h3 class="review_title">“Amazing services”</h3>
                <p class="review_commtent">
                  The team at Techco surpassed our expectations. Their meticulous project management and technical prowess were exceptional. They closely collaborated with us, ensuring a that not only met but exceeded our needs. We are thrilled with the outcome.
                </p>
                <div class="review_admin">
                  <div class="review_admin_image">
                    <img src="assets/images/avatar/avatar_7.webp" alt="Anatoliy Vasyl">
                  </div>
                  <div class="review_admin_info">
                    <h4 class="review_admin_name">Anatoliy Vasyl</h4>
                    <span class="review_admin_designation">Director of Marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Review Section - End
        ================================================== -->
      <!-- Team Section - Start
        ================================================== -->
      <section class="team_section xb-hidden section_space">
        <div class="container">
          <div class="heading_block text-center">
            <div class="heading_focus_text">
              <span class="badge bg-secondary text-white">Our Expert</span>
              Team Members 😍
            </div>
            <h2 class="heading_text mb-0">
              Top Skilled Experts
            </h2>
          </div>
          <div class="team_carousel">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="team_block">
                  <div class="team_member_image">
                    <a class="image_wrap" aria-label="Team Details Button" href="team_details.html">
                      <img src="assets/images/team/team_member_image_1.webp" alt="Team Member Image">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                  </div>
                  <div class="team_member_info">
                    <h3 class="team_member_name">
                      <a href="team_details.html">Atticus Sterling</a>
                    </h3>
                    <h4 class="team_member_designation">Systems Engineer</h4>
                    <ul class="social_icons_block unordered_list justify-content-center">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_facebook.svg" alt="Icon Facebook">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_twitter_x.svg" alt="Icon Twitter X">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_linkedin.svg" alt="Icon Linkedin">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_instagram.svg" alt="Icon Instagram">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team_block">
                  <div class="team_member_image">
                    <a class="image_wrap" aria-label="Team Details Button" href="team_details.html">
                      <img src="assets/images/team/team_member_image_2.webp" alt="Team Member Image">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                  </div>
                  <div class="team_member_info">
                    <h3 class="team_member_name">
                      <a href="team_details.html">Orion Jasper</a>
                    </h3>
                    <h4 class="team_member_designation">IT Consultant</h4>
                    <ul class="social_icons_block unordered_list justify-content-center">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_facebook.svg" alt="Icon Facebook">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_twitter_x.svg" alt="Icon Twitter X">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_linkedin.svg" alt="Icon Linkedin">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_instagram.svg" alt="Icon Instagram">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team_block">
                  <div class="team_member_image">
                    <a class="image_wrap" aria-label="Team Details Button" href="team_details.html">
                      <img src="assets/images/team/team_member_image_3.webp" alt="Team Member Image">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                  </div>
                  <div class="team_member_info">
                    <h3 class="team_member_name">
                      <a href="team_details.html">August Everest</a>
                    </h3>
                    <h4 class="team_member_designation">systems engineer</h4>
                    <ul class="social_icons_block unordered_list justify-content-center">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_facebook.svg" alt="Icon Facebook">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_twitter_x.svg" alt="Icon Twitter X">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_linkedin.svg" alt="Icon Linkedin">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_instagram.svg" alt="Icon Instagram">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team_block">
                  <div class="team_member_image">
                    <a class="image_wrap" aria-label="Team Details Button" href="team_details.html">
                      <img src="assets/images/team/team_member_image_4.webp" alt="Team Member Image">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                  </div>
                  <div class="team_member_info">
                    <h3 class="team_member_name">
                      <a href="team_details.html">Maverick Phoenix</a>
                    </h3>
                    <h4 class="team_member_designation">data analyst</h4>
                    <ul class="social_icons_block unordered_list justify-content-center">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_facebook.svg" alt="Icon Facebook">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_twitter_x.svg" alt="Icon Twitter X">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_linkedin.svg" alt="Icon Linkedin">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_instagram.svg" alt="Icon Instagram">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team_block">
                  <div class="team_member_image">
                    <a class="image_wrap" aria-label="Team Details Button" href="team_details.html">
                      <img src="assets/images/team/team_member_image_5.webp" alt="Team Member Image">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                  </div>
                  <div class="team_member_info">
                    <h3 class="team_member_name">
                      <a href="team_details.html">Daxton Atlas</a>
                    </h3>
                    <h4 class="team_member_designation">Project Manager</h4>
                    <ul class="social_icons_block unordered_list justify-content-center">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_facebook.svg" alt="Icon Facebook">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_twitter_x.svg" alt="Icon Twitter X">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_linkedin.svg" alt="Icon Linkedin">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_instagram.svg" alt="Icon Instagram">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team_block">
                  <div class="team_member_image">
                    <a class="image_wrap" aria-label="Team Details Button" href="team_details.html">
                      <img src="assets/images/team/team_member_image_1.webp" alt="Team Member Image">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                  </div>
                  <div class="team_member_info">
                    <h3 class="team_member_name">
                      <a href="team_details.html">Atticus Sterling</a>
                    </h3>
                    <h4 class="team_member_designation">Systems Engineer</h4>
                    <ul class="social_icons_block unordered_list justify-content-center">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_facebook.svg" alt="Icon Facebook">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_twitter_x.svg" alt="Icon Twitter X">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_linkedin.svg" alt="Icon Linkedin">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_instagram.svg" alt="Icon Instagram">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team_block">
                  <div class="team_member_image">
                    <a class="image_wrap" aria-label="Team Details Button" href="team_details.html">
                      <img src="assets/images/team/team_member_image_2.webp" alt="Team Member Image">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                  </div>
                  <div class="team_member_info">
                    <h3 class="team_member_name">
                      <a href="team_details.html">Orion Jasper</a>
                    </h3>
                    <h4 class="team_member_designation">IT Consultant</h4>
                    <ul class="social_icons_block unordered_list justify-content-center">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_facebook.svg" alt="Icon Facebook">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_twitter_x.svg" alt="Icon Twitter X">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_linkedin.svg" alt="Icon Linkedin">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_instagram.svg" alt="Icon Instagram">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team_block">
                  <div class="team_member_image">
                    <a class="image_wrap" aria-label="Team Details Button" href="team_details.html">
                      <img src="assets/images/team/team_member_image_3.webp" alt="Team Member Image">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                  </div>
                  <div class="team_member_info">
                    <h3 class="team_member_name">
                      <a href="team_details.html">August Everest</a>
                    </h3>
                    <h4 class="team_member_designation">systems engineer</h4>
                    <ul class="social_icons_block unordered_list justify-content-center">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_facebook.svg" alt="Icon Facebook">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_twitter_x.svg" alt="Icon Twitter X">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_linkedin.svg" alt="Icon Linkedin">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_instagram.svg" alt="Icon Instagram">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team_block">
                  <div class="team_member_image">
                    <a class="image_wrap" aria-label="Team Details Button" href="team_details.html">
                      <img src="assets/images/team/team_member_image_4.webp" alt="Team Member Image">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                  </div>
                  <div class="team_member_info">
                    <h3 class="team_member_name">
                      <a href="team_details.html">Maverick Phoenix</a>
                    </h3>
                    <h4 class="team_member_designation">data analyst</h4>
                    <ul class="social_icons_block unordered_list justify-content-center">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_facebook.svg" alt="Icon Facebook">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_twitter_x.svg" alt="Icon Twitter X">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_linkedin.svg" alt="Icon Linkedin">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_instagram.svg" alt="Icon Instagram">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team_block">
                  <div class="team_member_image">
                    <a class="image_wrap" aria-label="Team Details Button" href="team_details.html">
                      <img src="assets/images/team/team_member_image_5.webp" alt="Team Member Image">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                  </div>
                  <div class="team_member_info">
                    <h3 class="team_member_name">
                      <a href="team_details.html">Daxton Atlas</a>
                    </h3>
                    <h4 class="team_member_designation">Project Manager</h4>
                    <ul class="social_icons_block unordered_list justify-content-center">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_facebook.svg" alt="Icon Facebook">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_twitter_x.svg" alt="Icon Twitter X">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_linkedin.svg" alt="Icon Linkedin">
                        </a>
                      </li>
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_instagram.svg" alt="Icon Instagram">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="btns_group pb-0">
              <a class="btn btn-outline-light" href="service.html">
                <span class="btn_label" data-text="Our All Experts">Our All Experts</span>
                <span class="btn_icon">
                  <i class="fa-solid fa-arrow-up-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- Team Section - End
        ================================================== -->
      <!-- Blog Section - Start
        ================================================== -->
      <section class="blog_section section_space bg-light" style="background-image: url('assets/images/shapes/bg_pattern_1.svg');">
        <div class="container">
          <div class="heading_block text-center">
            <div class="heading_focus_text">
              <span class="badge bg-secondary text-white">Blog</span>
              Updates
            </div>
            <h2 class="heading_text mb-0">
              Latest Articles Posts
            </h2>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="blog_post_block">
                <div class="blog_post_image">
                  <a class="image_wrap" href="blog_details.html">
                    <img src="assets/images/blog/blog_post_image_1.webp" alt="Blog Post Image 1">
                  </a>
                </div>
                <div class="blog_post_content">
                  <div class="post_meta_wrap">
                    <ul class="category_btns_group unordered_list">
                      <li><a href="#!">Branding</a></li>
                      <li><a href="#!">UI/UX</a></li>
                    </ul>
                    <ul class="post_meta unordered_list">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_calendar.svg" alt="Icon Calendar"> 11/12/2024
                        </a>
                      </li>
                      <li>
                        <a href="#!"><i class="fa-regular fa-comment-lines"></i> 24</a>
                      </li>
                    </ul>
                  </div>
                  <h3 class="blog_post_title">
                    <a href="blog_details.html">
                      Leveraging Analytics for Business Growth Modernizing...
                    </a>
                  </h3>
                  <a class="btn_unfill" href="blog_details.html">
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                    <span class="btn_label">Read More</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="blog_post_block">
                <div class="blog_post_image">
                  <a class="image_wrap" href="blog_details.html">
                    <img src="assets/images/blog/blog_post_image_2.webp" alt="Blog Post Image 2">
                  </a>
                </div>
                <div class="blog_post_content">
                  <div class="post_meta_wrap">
                    <ul class="category_btns_group unordered_list">
                      <li><a href="#!">Mobile App</a></li>
                    </ul>
                    <ul class="post_meta unordered_list">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_calendar.svg" alt="Icon Calendar"> 11/12/2024
                        </a>
                      </li>
                      <li>
                        <a href="#!"><i class="fa-regular fa-comment-lines"></i> 24</a>
                      </li>
                    </ul>
                  </div>
                  <h3 class="blog_post_title">
                    <a href="blog_details.html">
                      How Emerging Technologies are Shaping the Future...
                    </a>
                  </h3>
                  <a class="btn_unfill" href="blog_details.html">
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                    <span class="btn_label">Read More</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="blog_post_block">
                <div class="blog_post_image">
                  <a class="image_wrap" href="blog_details.html">
                    <img src="assets/images/blog/blog_post_image_3.webp" alt="Blog Post Image 3">
                  </a>
                </div>
                <div class="blog_post_content">
                  <div class="post_meta_wrap">
                    <ul class="category_btns_group unordered_list">
                      <li><a href="#!">Technology</a></li>
                    </ul>
                    <ul class="post_meta unordered_list">
                      <li>
                        <a href="#!">
                          <img src="assets/images/icons/icon_calendar.svg" alt="Icon Calendar"> 11/12/2024
                        </a>
                      </li>
                      <li>
                        <a href="#!"><i class="fa-regular fa-comment-lines"></i> 24</a>
                      </li>
                    </ul>
                  </div>
                  <h3 class="blog_post_title">
                    <a href="blog_details.html">
                      Creating Engaging Digital for Your Audience Software...
                    </a>
                  </h3>
                  <a class="btn_unfill" href="blog_details.html">
                    <span class="btn_icon">
                      <i class="fa-solid fa-arrow-up-right"></i>
                    </span>
                    <span class="btn_label">Read More</span>
                  </a>
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