<?php /* Template Name: About Us */ ?>

<?php get_header(); ?>
<?php get_template_part('innerheader-special') ?>

<?php while (have_posts()) :
  the_post(); ?>


  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="<?php the_post_thumbnail_url(); ?>" alt="" style="object-fit: cover;">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
          <?php
          the_content();
          ?>

          <!-- <div class="row gy-2 gx-4 mb-4">
                  <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                  </div>
                  <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                  </div>
                  <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                  </div>
                  <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                  </div>
                  <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                  </div>
                  <div class="col-sm-6">
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                  </div>
                    </div> -->
          <a class="btn btn-primary py-3 px-5 mt-2" href="<?php echo site_url('/contact') ?>">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->


  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Our Team</h6>
        <h1 class="mb-5">Founders</h1>
      </div>
      <div class="row g-3">
        <?php
        $args = array(
          'post_type' => 'team',
          'orderby' => 'title',
          'order' => 'ASC',
        );
        $teams = new WP_Query($args);
        while ($teams->have_posts()) :
          $teams->the_post();
        ?>
          <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item bg-light">
              <div class="overflow-hidden">
                <img class="img-fluid" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php the_title();
                                                                                          the_field('designation'); ?>" style="height: 300px; width: 100%; object-fit: cover;border-radius: 2px;">
              </div>
              <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                  <?php if (get_field('linkedin_link')) : ?>
                    <a class="btn btn-sm-square btn-primary mx-1" href="<?php the_field('linkedin_link'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                  <?php endif; ?>
                  <?php if (get_field('facebook_link')) : ?>

                    <a class="btn btn-sm-square btn-primary mx-1" href="<?php the_field('facebook_link'); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                  <?php endif; ?>

                  <?php if (get_field('instagram_link')) : ?>

                    <a class="btn btn-sm-square btn-primary mx-1" href="<?php the_field('instagram_link'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                  <?php endif; ?>

                  <?php if (get_field('twitter_link')) : ?>

                    <a class="btn btn-sm-square btn-primary mx-1" href="<?php the_field('twitter_link'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                  <?php endif; ?>

                </div>
              </div>
              <div class="text-center p-4">
                <h5 class="mb-0"><?php the_title(); ?>
                </h5>
                <small>
                  <?php the_field('designation'); ?>
                </small>
              </div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>

      </div>
    </div>
  </div>
  <!-- Team End -->

  <!-- Our Supporters Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Our Supporters</h6>
        <h1 class="mb-5"></h1>
      </div>
      <div class="row g-4">
        <?php
        $args = array(
          'post_type' => 'supporters',
          'orderby' => 'title',
          'order' => 'ASC',
        );
        $supporters = new WP_Query($args);
        while ($supporters->have_posts()) :
          $supporters->the_post();
        ?>

          <div class="col-lg-3 col-sm-6 wow   " data-wow-delay="0.1s">
            <div class="service-item bg-light text-center pt-3">
              <div class="p-4">
                <img class="img-fluid" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
                <h5 class="mb-3" i>
                  <?php the_title(); ?>
                </h5>
                <p>
                  <!-- <?php the_excerpt(); ?> -->
                </p>
              </div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  <!-- Service End -->


  <!-- <main>
    <section class="section-contact-us">
      <div class="container">
        <h3 class="section-contact-us_title">Contact US</h3>
        <div class="row row-cols-12 row-cols-md-1 row-cols-lg-2 section-contact-us_row">
          <div class="col col-lg-8 g-0">
            <div class="row g-3 section-contact-us_form">
            <?php
            // echo do_shortcode('[contact-form-7 id="25" title="Contact Us"]');
            ?>
          </div>
        </div>
        <div class="col col-lg-4 g-0">
          <div class="row section-contact-us_side g-3">
            <h4>Contact Details</h4>

            <div class="footer_content section-contact-us_side_content">
              <ul class='fa-ul'>
                <?php if (get_theme_mod('sms_phone_handle')) { ?>
                  <li class='dept'>
                    <a href="tel:<?php echo get_theme_mod('sms_phone_handle'); ?>" class="footer_link">
                      <i class='fas fa-phone-alt footer_icons'></i>
                      <span>
                        <?php echo get_theme_mod('sms_phone_handle'); ?>
                      </span>
                    </a>
                  </li>
                <?php } ?>

                <?php if (get_theme_mod('sms_email_handle')) { ?>
                  <li class='dept'>
                    <a href="mailto:<?php echo get_theme_mod('sms_email_handle'); ?>" class="footer_link">
                      <i class='fas fa-envelope footer_icons'></i>
                      <span>
                        <?php echo get_theme_mod('sms_email_handle'); ?>
                      </span></a>
                  </li>
                <?php } ?>

                <?php if (get_theme_mod('sms_address_handle')) { ?>
                  <li class='dept'>
                    <a href="#" class="footer_link">
                      <i class='fas fa-map-marker-alt footer_icons'></i>
                      <span>
                        <?php echo get_theme_mod('sms_address_handle') ?>
                      </span></a>
                  </li>
                <?php } ?>
              </ul>
            </div>

            <div class="col d-flex justify-content-start">
              <?php if (get_theme_mod('sms_facebook_handle')) { ?>
                <a href="<?php echo get_theme_mod('sms_facebook_handle'); ?>" class="text-white me-4">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              <?php } ?>

              <?php if (get_theme_mod('sms_twitter_handle')) { ?>
                <a href="<?php echo get_theme_mod('sms_twitter_handle'); ?>" class="text-white me-4">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              <?php } ?>

              <?php if (get_theme_mod('sms_youtube_handle')) { ?>
                <a href="<?php echo get_theme_mod('sms_youtube_handle'); ?>" class="text-white">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main> -->
<?php endwhile; ?>

<?php get_footer(); ?>