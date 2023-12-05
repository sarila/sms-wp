<?php
function sms_general_customizer_section($wp_customize)
{
  $wp_customize->add_setting(
    'sms_phone_handle',
    array(
      'default' => ''
    )
  );
  $wp_customize->add_setting(
    'sms_email_handle',
    array(
      'default' => ''
    )
  );
  $wp_customize->add_setting(
    'sms_address_handle',
    array(
      'default' => ''
    )
  );
  $wp_customize->add_setting(
    'sms_facebook_handle',
    array(
      'default' => ''
    )
  );

  $wp_customize->add_setting(
    'sms_twitter_handle',
    array(
      'default' => ''
    )
  );
  $wp_customize->add_setting(
    'sms_youtube_handle',
    array(
      'default' => ''
    )
  );
  $wp_customize->add_setting(
    'sms_instagram_handle',
    array(
      'default' => ''
    )
  );


  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'sms_phone_text',
      array(
        'label' => __('Phone Number', 'sms'),
        'section' => 'title_tagline',
        'settings' => 'sms_phone_handle',
        'description' => __('Enter Your Phone Number', 'sms'),
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'sms_email_text',
      array(
        'label' => __('E-Mail Address', 'sms'),
        'section' => 'title_tagline',
        'settings' => 'sms_email_handle',
        'description' => __('Enter Your E-Mail Address', 'sms'),
        'type' => 'text'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'sms_address_text',
      array(
        'label' => __('Address', 'sms'),
        'section' => 'title_tagline',
        'settings' => 'sms_address_handle',
        'description' => __('Enter Your Address', 'sms'),
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'sms_footer_image',
      array(
        'label' => __('Footer Image', 'sms'),
        'section' => 'title_tagline',
        'settings' => 'sms_footer_image_handle',
      )
    )
  );

  $wp_customize->add_section(
    'sms_social_section',
    array(
      'title' => __('Social Settings', 'sms'),
      'priority' => 20
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'sms_facebook_text',
      array(
        'label' => __('Facebook URL', 'sms'),
        'section' => 'sms_social_section',
        'settings' => 'sms_facebook_handle',
        'description' => __('Enter Facebook link', 'sms'),
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'sms_twitter_text',
      array(
        'label' => __('Twitter URL', 'sms'),
        'section' => 'sms_social_section',
        'settings' => 'sms_twitter_handle',
        'description' => __('Enter twitter link', 'sms'),
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'sms_youtube_text',
      array(
        'label' => __('Youtube URL', 'sms'),
        'section' => 'sms_social_section',
        'settings' => 'sms_youtube_handle',
        'description' => __('Enter Youtube link', 'sms'),
        'type' => 'text'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'sms_instagram_text',
      array(
        'label' => __('Instagram URL', 'sms'),
        'section' => 'sms_social_section',
        'settings' => 'sms_instagram_handle',
        'description' => __('Enter instagram link', 'sms'),
        'type' => 'text'
      )
    )
  );
}