<footer class="site_footer footer_layout_1">
    <div class="content_box" style="background-image: url('assets/images/shapes/bg_pattern_3.svg');">
        <div class="container">
            <div class="diract_contact_links text-white">
                <div class="iconbox_block layout_icon_left">
                    <div class="iconbox_icon">
                        <img src="assets/images/icons/icon_mail.svg" alt="Mail SVG Icon">
                    </div>
                    <div class="iconbox_content">
                        <h3 class="iconbox_title">Write to us</h3>
                        <p class="mb-0">
                            <?= $company_mail; ?>
                        </p>
                    </div>
                </div>
                <div class="iconbox_block layout_icon_left">
                    <div class="iconbox_icon">
                        <img src="assets/images/icons/icon_calling.svg" alt="Calling Check SVG Icon">
                    </div>
                    <div class="iconbox_content">
                        <h3 class="iconbox_title"> Call Us (IND)</h3>
                        <p class="mb-0">
                            <?= $company_phone; ?>
                        </p>
                    </div>
                </div>
                <div class="iconbox_block layout_icon_left">
                    <div class="iconbox_icon">
                        <img src="assets/images/icons/icon_map_mark.svg" alt="Map Mark Check SVG Icon">
                    </div>
                    <div class="iconbox_content">
                        <h3 class="iconbox_title">Our Office</h3>
                        <p class="mb-0">
                            <?= $company_address; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer_main_content">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_widget pe-md-3">
                            <h2 class="footer_info_title">Newsletter</h2>
                            <p>
                                Sign up to Techco weekly newsletter to get the latest updates.
                            </p>
                            <form class="footer_newslatter" action="#">
                                <label for="footer_mail_input">
                                    <img src="assets/images/icons/icon_mail_2.svg" alt="Mail SVG Icon">
                                </label>
                                <input id="footer_mail_input" type="email" name="email" placeholder="Enter your email">
                                <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                            </form>
                            <ul class="social_links_block unordered_list">
                                <li><a href="#!">Facebook</a></li>
                                <li><a href="#!">Twitter</a></li>
                                <li><a href="#!">Linkdin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3 class="footer_info_title">Services</h3>
                            <ul class="icon_list unordered_list_block">
                                <li>
                                    <a href="<?=$domain;?>our-services.php">
                                        <span class="icon_list_text">
                                            Website Development
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$domain;?>our-services.php">
                                        <span class="icon_list_text">
                                            Mobile App Development
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$domain;?>our-services.php">
                                        <span class="icon_list_text">
                                            Ecommerce Solutions
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$domain;?>our-services.php">
                                        <span class="icon_list_text">
                                            Graphic Design
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$domain;?>our-services.php">
                                        <span class="icon_list_text">
                                            Digital Marketing
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$domain;?>our-services.php">
                                        <span class="icon_list_text">
                                            UI/UX Design
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3 class="footer_info_title">Information</h3>
                            <ul class="icon_list unordered_list_block">
                                <li>
                                    <a href="<?=$domain;?>about.php">
                                        <span class="icon_list_text">
                                            About
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$domain;?>our-works.php">
                                        <span class="icon_list_text">
                                            Our Works
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$domain;?>our-services.php">
                                        <span class="icon_list_text">
                                            Our Services
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$domain;?>contact.php">
                                        <span class="icon_list_text">
                                            Contact
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$domain;?>blog.php">
                                        <span class="icon_list_text">
                                            Blogs
                                        </span>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="#!">
                                        <span class="icon_list_text">
                                            Pricing Plan
                                        </span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer_widget">
                            <h3 class="footer_info_title">Product</h3>
                            <ul class="icon_list unordered_list_block">
                                <li>
                                    <a href="#!">
                                        <span class="icon_list_text">
                                            Case Studies
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <span class="icon_list_text">
                                            Our Pricing
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <span class="icon_list_text">
                                            Features
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <span class="icon_list_text">
                                            Overview
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <span class="icon_list_text">
                                            New Releases
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <span class="icon_list_text">
                                            Solutions
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container d-md-flex align-items-md-center justify-content-md-between">
            <p class="copyright_text m-0">
                <?= $copyright_text; ?>
            </p>
            <p class="copyright_text m-0">
                Developed by <a href="<?= $domain; ?>" target="_blank"><?= $company_name; ?></a>
            </p>
        </div>
    </div>
</footer>