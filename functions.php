<?php

if (!is_admin()) {
    // Register CSS
    wp_register_style( 'main_style', get_template_directory_uri() . '/dist/style.css', array(), '1.0', 'all');
    // Connect CSS
    wp_enqueue_style( 'main_style');
    // Register JS
    wp_register_script( 'main_script', get_template_directory_uri() . '/dist/js/app.bundle.js', array(), '1.0', true);
    // Connect JS
    wp_enqueue_script( 'main_script');
}



// ACF Options Pages
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'  => 'Site settings',
        'menu_title'  => 'Site settings',
        'menu_slug'   => 'theme-general-settings',
        'capability'  => 'edit_posts',
        'redirect'  => true
    ));
    
    acf_add_options_sub_page(array(
        'page_title'  => 'Contacts settings',
        'menu_title'  => 'Contacts',
        'parent_slug' => 'theme-general-settings'
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Footer settings',
        'menu_title'  => 'Footer',
        'parent_slug' => 'theme-general-settings'
    ));
}


// Stick Admin Bar To The Top
if (!is_admin()) {
    function my_filter_head() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'my_filter_head');

    function stick_admin_bar() { ?>
      <style>
        body.admin-bar {margin-top:32px !important}
        @media screen and (max-width: 782px) {body.admin-bar { margin-top:46px !important }}
        @media screen and (max-width: 600px) {body.admin-bar { margin-top:46px !important } html #wpadminbar{ margin-top: -46px; }}
      </style>
    <?php }
    add_action('admin_head', 'stick_admin_bar');
    add_action('wp_head', 'stick_admin_bar');

  }



function limit_words($words, $limit, $append = ' &hellip;') {
  // Add 1 to the specified limit becuase arrays start at 0
  $limit = $limit+1;
  // Store each individual word as an array element
  // Up to the limit
  $words = explode(' ', $words, $limit);
  // Shorten the array by 1 because that final element will be the sum of all the words after the limit
  array_pop($words);
  // Implode the array for output, and append an ellipse
  $words = implode(' ', $words) . $append;
  // Return the result
  return $words;
}



function my_get_the_excerpt( $post_id ){
    global $post;  
    $save_post = $post;
    $post = get_post($post_id);
    setup_postdata( $post );
    $output = get_the_excerpt();
    $post = $save_post;
    return $output;
}

?>