<?php

add_action('init', 'sms_team_post_type', 0);
add_action('init', 'sms_budget_data_post_type', 0);

//custom post type for FAQ
function sms_team_post_type()
{
    // Labels for the Post Type
    $labels = array(
        'name' => _x('Teams', 'Post Type General Name', 'sms'),
        'singular_name' => _x('Team', 'Post Type Singular Name', 'sms'),
        'menu_name' => __('Teams', 'sms'),
        'parent_item_colon' => __('Parent Team', 'sms'),
        'all_items' => __('All Teams', 'sms'),
        'view_item' => __('View Team', 'sms'),
        'add_new_item' => __('Add New Team', 'sms'),
        'add_new' => __('Add New Team', 'sms'),
        'edit_item' => __('Edit Team', 'sms'),
        'update_item' => __('Update Team', 'sms'),
        'search_items' => __('Search Team', 'sms'),
        'not_found' => __('No Teams found', 'sms'),
        'not_found_in_trash' => __('Not found in trash', 'sms'),
    );
    // Another Customizations
    $args = array(
        'label' => __('Teams', 'sms'),
        'description' => __('Teams of Support My School', 'sms'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-groups',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type('team', $args);
}


function sms_budget_data_post_type()
{
    // Labels for the Post Type
    $labels = array(
        'name' => _x('Budget Data', 'Post Type General Name', 'sms'),
        'singular_name' => _x('Budget Data', 'Post Type Singular Name', 'sms'),
        'menu_name' => __('Budget Data', 'sms'),
        'parent_item_colon' => __('Parent Budget Data', 'sms'),
        'all_items' => __('All Budget Data', 'sms'),
        'view_item' => __('View Budget Data', 'sms'),
        'add_new_item' => __('Add New Budget Data', 'sms'),
        'add_new' => __('Add New Budget Data', 'sms'),
        'edit_item' => __('Edit Budget Data', 'sms'),
        'update_item' => __('Update Budget Data', 'sms'),
        'search_items' => __('Search Budget Data', 'sms'),
        'not_found' => __('No Budget Data found', 'sms'),
        'not_found_in_trash' => __('Not found in trash', 'sms'),
    );
    // Another Customizations
    $args = array(
        'label' => __('Budget Data', 'sms'),
        'description' => __('Budget Data of Support My School', 'sms'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'excerpt', 'comments', 'author'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 14,
        'menu_icon' => 'dashicons-money',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type('budget_data', $args);
}




