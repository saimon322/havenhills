<?php
/**
 * Index
 *
 * Standard loop for the front-page
 */

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$curFilter = 'Popular';

$tax = array();

$url = '/blog/?';

if(isset($_GET['cat'])){
    $tax = array(
        array(
            'taxonomy' => 'category',
            'field'    => 'term_id',
            'terms'    => array($_GET['cat']),
        ),
    );
    $url = '/blog/?cat='.$_GET['cat'].'&';
}

$args = array(
    'numberposts' => -1,
    'post_type'   => 'post',
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => get_option( 'posts_per_page' ),
    'tax_query' => $tax
);
if(isset($_GET['filter'])){
    if($_GET['filter'] == 'date'){
        $args['orderby'] = 'date';
        $args['order'] = 'ASC';
        $curFilter = 'Date';
    }

    if($_GET['filter'] == 'pop'){
        $args['meta_key'] = 'wpb_post_views_count';
        $args['orderby'] = 'meta_value_num';
        $args['order'] = 'DESC';
        $curFilter = 'Popular';
    }

    if($_GET['filter'] == 'cat'){
        $args['orderby'] = 'taxonomy, name';
        $args['order'] = 'ASC';
        $curFilter = 'Category';
    }



}



$posts = new WP_Query( $args );
$GLOBALS['wp_query'] = $posts;



get_header();
?>

    <main class="site-main blog">
        <div class="site-container">
            <section class="blog">
                <div class="blog__header">
                    <h1 class="blog__title">Blog</h1>
                    <div class="blog__filter">
                        <div class="filter">
                            Sort by:
                            <a href="#" class="filter__current"><?=$curFilter?></a>
                            <ul class="filter__items">
                                <li>
                                    <a href="#" onclick="location.href='<?=$url?>filter=pop'" class="filter__item">Popular</a>
                                </li>
                                <li>
                                    <a href="#" onclick="location.href='<?=$url?>filter=cat'" class="filter__item">Category</a>
                                </li>
                                <li>
                                    <a href="#" onclick="location.href='<?=$url?>filter=date'" class="filter__item">Date</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.blog__header -->

                <div class="blog__content">

                    <div class="blog__main">
                        <ul class="blog__items j-blog-list">
                            <? get_template_part( 'templates/content', 'blog-list', ['posts' => $posts]);?>
                        </ul><!-- /.blog__items -->

                        <div class="blog__pagination">
                            <nav class="pagination">
                                <?php kriesi_pagination() ?>
                        </div>
                    </div><!-- /.blog__content -->
                    <? get_template_part( 'templates/blog/blog', 'aside');?>
                </div><!-- /.blog__content -->
            </section>
        </div>
    </main><!-- / .site-main -->

<?php
get_footer();
