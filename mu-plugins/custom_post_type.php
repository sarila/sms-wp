<?php

add_action('init', 'sms_team_post_type', 0);
add_action('init', 'sms_sponsors_post_type', 0);
add_action('init', 'sms_beneficiaries_post_type', 0);
add_action('init', 'sms_budget_data_post_type', 0);
add_action('init', 'sms_how_work_post_type', 0);
add_action('init', 'sms_request_status_post_type', 0);

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
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'comments', 'author'),
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


function sms_how_work_post_type()
{
    // Labels for the Post Type
    $labels = array(
        'name' => _x('How it Works', 'Post Type General Name', 'sms'),
        'singular_name' => _x('How it Works', 'Post Type Singular Name', 'sms'),
        'menu_name' => __('How it Works', 'sms'),
        'parent_item_colon' => __('Parent How it Works', 'sms'),
        'all_items' => __('All How it Works', 'sms'),
        'view_item' => __('View How it Works', 'sms'),
        'add_new_item' => __('Add New How it Works', 'sms'),
        'add_new' => __('Add New How it Works', 'sms'),
        'edit_item' => __('Edit How it Works', 'sms'),
        'update_item' => __('Update How it Works', 'sms'),
        'search_items' => __('Search How it Works', 'sms'),
        'not_found' => __('No How it Works found', 'sms'),
        'not_found_in_trash' => __('Not found in trash', 'sms'),
    );
    // Another Customizations
    $args = array(
        'label' => __('How it Works', 'sms'),
        'description' => __('How it Works of Support My School', 'sms'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 14,
        'menu_icon' => 'dashicons-editor-help',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type('how_it_works', $args);
}

function sms_beneficiaries_post_type()
{
    // Labels for the Post Type
    $labels = array(
        'name' => _x('Beneficiaries', 'Post Type General Name', 'sms'),
        'singular_name' => _x('Beneficiary', 'Post Type Singular Name', 'sms'),
        'menu_name' => __('Beneficiaries', 'sms'),
        'parent_item_colon' => __('Parent Beneficiary', 'sms'),
        'all_items' => __('All Beneficiaries', 'sms'),
        'view_item' => __('View Beneficiary', 'sms'),
        'add_new_item' => __('Add New Beneficiary', 'sms'),
        'add_new' => __('Add New Beneficiary', 'sms'),
        'edit_item' => __('Edit Beneficiary', 'sms'),
        'update_item' => __('Update Beneficiary', 'sms'),
        'search_items' => __('Search Beneficiary', 'sms'),
        'not_found' => __('No Beneficiaries found', 'sms'),
        'not_found_in_trash' => __('Not found in trash', 'sms'),
    );
    // Another Customizations
    $args = array(
        'label' => __('Beneficiaries', 'sms'),
        'description' => __('Beneficiaries of Support My School', 'sms'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-buddicons-groups',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type('beneficiaries', $args);
}


function sms_sponsors_post_type()
{
    // Labels for the Post Type
    $labels = array(
        'name' => _x('Supporters', 'Post Type General Name', 'sms'),
        'singular_name' => _x('Supporters', 'Post Type Singular Name', 'sms'),
        'menu_name' => __('Supporters', 'sms'),
        'parent_item_colon' => __('Parent Supporters', 'sms'),
        'all_items' => __('All Supporters', 'sms'),
        'view_item' => __('View Supporters', 'sms'),
        'add_new_item' => __('Add New Supporters', 'sms'),
        'add_new' => __('Add New Supporters', 'sms'),
        'edit_item' => __('Edit Supporters', 'sms'),
        'update_item' => __('Update Supporters', 'sms'),
        'search_items' => __('Search Supporters', 'sms'),
        'not_found' => __('No Supporters found', 'sms'),
        'not_found_in_trash' => __('Not found in trash', 'sms'),
    );
    // Another Customizations
    $args = array(
        'label' => __('Supporters', 'sms'),
        'description' => __('Supporters of Support My School', 'sms'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-networking',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type('supporters', $args);
}

function sms_request_status_post_type()
{
    // Labels for the Post Type
    $labels = array(
        'name' => _x('Request Status', 'Post Type General Name', 'sms'),
        'singular_name' => _x('Request Status', 'Post Type Singular Name', 'sms'),
        'menu_name' => __('Request Status', 'sms'),
        'parent_item_colon' => __('Parent Request Status', 'sms'),
        'all_items' => __('All Request Status', 'sms'),
        'view_item' => __('View Request Status', 'sms'),
        'add_new_item' => __('Add New Request Status', 'sms'),
        'add_new' => __('Add New Request Status', 'sms'),
        'edit_item' => __('Edit Request Status', 'sms'),
        'update_item' => __('Update Request Status', 'sms'),
        'search_items' => __('Search Request Status', 'sms'),
        'not_found' => __('No Request Status found', 'sms'),
        'not_found_in_trash' => __('Not found in trash', 'sms'),
    );
    // Another Customizations
    $args = array(
        'label' => __('Request Status', 'sms'),
        'description' => __('Request Status of Support My School', 'sms'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-format-aside',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type('request_status', $args);
}



