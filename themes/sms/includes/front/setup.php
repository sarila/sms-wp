<?php

function sms_setup()
{
  add_theme_support('title-tag'); // for title and tagline
  add_theme_support('custom-logo'); // for logo in nav
  add_theme_support('post-thumbnails'); //for thumbnails in custom theme type
}

add_action('after_setup_theme', 'sms_setup');
?>