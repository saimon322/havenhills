<?php
/**
 * Functions
 */

/******************************************************************************
                        Included Files
******************************************************************************/


/******************************************************************************
                        Structure Functions
******************************************************************************/

// ACF Options Pages
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
      'page_title'  => 'Main settings',
      'menu_title'  => 'Main settings',
      'menu_slug'   => 'theme-general-settings',
      'capability'  => 'edit_posts',
      'redirect'  => true
    ));

    acf_add_options_sub_page(array(
      'page_title'  => 'Header settings',
      'menu_title'  => 'Header',
      'parent_slug' => 'theme-general-settings'
    ));

    acf_add_options_sub_page(array(
      'page_title'  => 'Footer settings',
      'menu_title'  => 'Footer',
      'parent_slug' => 'theme-general-settings'
    ));
  }


/******************************************************************************
                         Style Functions
 ******************************************************************************/

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


// Login Screen Customization
  function wordpress_login_styling() { ?>
    <style>
      .login #login h1 a {
        background-image: url('<?php echo get_header_image(); ?>');
        background-size: contain;
        width: auto;
        height: 220px;
      }
      body.login{
        background-color: #<?php echo get_background_color(); ?>;
        background-image: url('<?php echo get_background_image(); ?>') !important;
        background-repeat: repeat;
        background-position: center center;
      };

    </style>
  <?php }
  add_action( 'login_enqueue_scripts', 'wordpress_login_styling' );

  function admin_logo_custom_url(){
    $site_url = home_url();
    return ($site_url);
  }
  add_filter('login_headerurl', 'admin_logo_custom_url');

/********************************************************************************
                         Enqueue Scripts and Styles for Front-End
*********************************************************************************/

function foundation_scripts_and_styles() {
  if (!is_admin()) {

// Load Stylesheets
  // Core

  // System
  wp_enqueue_style( 'style', get_template_directory_uri().'/dist/style.css', null, null );

// Load JavaScripts
  // Сore
  wp_enqueue_script( 'jquery' );

  // Custom javascript
  wp_enqueue_script( 'common-js', get_template_directory_uri() . '/dist/js/app.bundle.js', null, null, true );

  }
}
add_action( 'wp_enqueue_scripts', 'foundation_scripts_and_styles' );




/******************************************************************************
                         Additional Functions
*******************************************************************************/

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
