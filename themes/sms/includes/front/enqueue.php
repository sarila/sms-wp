<?php
function sms_enqueue()
{
  $uri = get_theme_file_uri();
  $ver = SMS_DEV_MODE ? time() : false;

  // echo $uri;
  // CSS
  wp_register_style('sms_custom_css', $uri . '/includes/assets/css/style.css', [], $ver);
  wp_register_style('sms_bootstrap_css', $uri . '/includes/assets/css/bootstrap.min.css', [], $ver);
  wp_register_style('sms_carasoule_css', $uri . '/includes/assets/lib/owlcarousel/assets/owl.carousel.min.css', [], $ver);
  wp_register_style('sms_animate_css', $uri . '/includes/assets/lib/animate/animate.min.css', [], $ver);
  wp_register_style('sms_bootstrap_icon_css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
  wp_register_style('sms_fa_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.css');
  // wp_register_style('sms_gstatic', 'https://fonts.gstatic.com');
  // wp_register_style('sms_font', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap');
  wp_enqueue_style('sms_custom_css');
  wp_enqueue_style('sms_bootstrap_css');
  wp_enqueue_style('sms_carasoule_css');
  wp_enqueue_style('sms_animate_css');
  wp_enqueue_style('sms_bootstrap_icon_css');
  wp_enqueue_style('sms_fa_css');

  // JS
  wp_register_script('sms_bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js');
  wp_register_script('sms_wow_js', $uri . '/includes/assets/lib/wow/wow.min.js', [], $ver, true);
  wp_register_script('sms_easing_js', $uri . '/includes/assets/lib/easing/easing.min.js', [], $ver, true);
  wp_register_script('sms_waypoint_js', $uri . '/includes/assets/lib/waypoints/waypoints.min.js', [], $ver, true);
  wp_register_script('sms_owl_js', $uri . '/includes/assets/lib/owlcarousel/owl.carousel.min.js', [], $ver, true);
  wp_register_script('sms_custom_js', $uri . '/includes/assets/js/main.js', [], $ver, true);


  wp_enqueue_script('jquery');
  wp_enqueue_script('sms_custom_js');
  wp_enqueue_script('sms_wow_js');
  wp_enqueue_script('sms_bootstrap_js');
  wp_enqueue_script('sms_easing_js');
  wp_enqueue_script('sms_waypoint_js');
  wp_enqueue_script('sms_owl_js');
}
