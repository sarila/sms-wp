<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">FAQs & Help</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <?php if (get_theme_mod('sms_address_handle')) { ?>
                <a href="">
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                        <?php echo get_theme_mod('sms_address_handle'); ?>
                    </p>
                </a>
                <?php } ?>
                <?php if (get_theme_mod('sms_phone_handle')) { ?>
                <a href="tel:<?php echo get_theme_mod('sms_phone_handle'); ?>">
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>
                        <?php echo get_theme_mod('sms_phone_handle'); ?>
                    </p>
                </a>
                <?php } ?>
                <?php if (get_theme_mod('sms_email_handle')) { ?>
                <a href="mailto:<?php echo get_theme_mod('sms_email_handle'); ?>">
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>
                        <?php echo get_theme_mod('sms_email_handle'); ?>
                    </p>
                </a>
                <?php } ?>
                <div class="d-flex pt-2">
                    <?php if (get_theme_mod('sms_twitter_handle')) { ?>
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="<?php echo get_theme_mod('sms_twitter_handle'); ?>">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <?php } ?>
                    <?php if (get_theme_mod('sms_facebook_handle')) { ?>
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="<?php echo get_theme_mod('sms_facebook_handle'); ?>">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <?php } ?>

                    <?php if (get_theme_mod('sms_youtube_handle')) { ?>
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="<?php echo get_theme_mod('sms_youtube_handle'); ?>">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <?php } ?>

                    <?php if (get_theme_mod('sms_instagram_handle')) { ?>
                    <a class="btn btn-outline-light btn-social" target="_blank"
                        href="<?php echo get_theme_mod('sms_instagram_handle'); ?>">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Newsletter</h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button"
                        class="btn btn-danger py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Support My School</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Powered By <a class="border-bottom" href="#">Support My School</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php wp_footer(); ?>
</body>

</html>