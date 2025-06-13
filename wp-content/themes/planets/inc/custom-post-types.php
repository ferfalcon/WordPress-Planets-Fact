<?php
// Register custom post type: Planet
function register_planet_post_type() {
    $labels = array(
        'name' => 'Planets',
        'singular_name' => 'Planet',
        'add_new' => 'Add New Planet',
        'add_new_item' => 'Add New Planet',
        'edit_item' => 'Edit Planet',
        'new_item' => 'New Planet',
        'view_item' => 'View Planet',
        'search_items' => 'Search Planets',
        'not_found' => 'No planets found',
        'not_found_in_trash' => 'No planets found in Trash',
        'menu_name' => 'Planets',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-site',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'planets'),
    );

    register_post_type('planet', $args);
}
add_action('init', 'register_planet_post_type');
