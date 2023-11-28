<?php
// Setup
define('SMS_DEV_MODE', true);

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/setup.php'));
include(get_theme_file_path('/includes/customizer/theme-customizer.php'));
include(get_theme_file_path('/includes/customizer/contact.php'));

// Hooks
add_action('wp_enqueue_scripts', 'sms_enqueue');
add_action('wp_enqueue_setup', 'sms_setup');
add_action('customize_register', 'sms_customize_register');
