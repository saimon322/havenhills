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

add_theme_support('menus');
add_theme_support('post-thumbnails');

// Rename regular Posts to Blog
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blog';
}
add_action( 'admin_menu', 'revcon_change_post_label' );


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
        'page_title'  => 'Header settings',
        'menu_title'  => 'Header',
        'parent_slug' => 'theme-general-settings'
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Footer settings',
        'menu_title'  => 'Footer',
        'parent_slug' => 'theme-general-settings'
    ));

    acf_add_options_sub_page(array(
        'page_title'  => '404 page settings',
        'menu_title'  => '404',
        'parent_slug' => 'theme-general-settings'
    ));
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

function kriesi_pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {


        if($paged > 1){
            echo '<a href="'.get_pagenum_link($paged - 1).'" class="pagination__button button pagination__prev">Prev</a>';
        }else{
            echo '<a href="'.get_pagenum_link($paged - 1).'" class="pagination__button button pagination__prev pagination__button--disabled">Prev</a>';
        }

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? '<a href="'.get_pagenum_link($i).'" class="pagination__page pagination__page--current">'.$i.'</a>' : '<a href="'.get_pagenum_link($i).'" class="pagination__page">'.$i.'</a>';
            }
        }

        if ($paged < $pages){
            echo '<a href="'.get_pagenum_link($paged + 1).'" class="pagination__button button pagination__next">Next</a>';
        }else{
            echo '<a href="'.get_pagenum_link($paged + 1).'" class="pagination__button button pagination__next pagination__button--disabled">Next</a>';
        }
    }
}

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

// CF7 remove span wrappers
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
});

// Donate table shortcode
add_shortcode( 'donate_table', 'donate_table_func' );

function donate_table_func(){
    $table = '';
	if( have_rows('donate_table') ):
    $table += '<div class="donate-table">';
    $table += '<ul class="donate-table__list">';
    while( have_rows('donate_table') ): the_row();
        $table += '<li class="donate-table__item">';
        $table += '<b>' . get_sub_field('amount') . '</b> ';
        $table += get_sub_field('description');
        $table += '</li>';
    endwhile;
    $table += '</ul>';
    $table += '<div class="donate-table__text">';
    $table += the_field('donate_table_text');
    $table += '</div>';
    $table += '</div>';
    endif; 

    return $table;
}

?>