<?php
function sms_customize_register($wp_customize)
{
  $wp_customize->get_section('title_tagline')->title = "General Settings";

  sms_general_customizer_section($wp_customize);
}