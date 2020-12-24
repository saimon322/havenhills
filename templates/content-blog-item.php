<?php
/*
Template Name: Blog item
Template Post Type: post
*/
wpb_set_post_views($post->ID);
get_header();
$term = array_pop(wp_get_post_terms( $post->ID, 'category'));

if($term == null){
    $term->name = "All";
}

$nextPost = get_next_post();
?>
    <main class="site-main">
        <div class="site-container">
            <section class="blog blog-post">
                <div class="blog__content">
                    <div class="blog__main">
                        <article class="blog-post__content wow fadeIn">
                            <div class="container">
                                <h1 class="blog-post__title" style="color: #443776;">
                                    <?=get_the_title()?>
                                </h1>
                                <div class="blog-post__info">
                                    <?=date("M j, Y", strtotime($post->post_date));?> | <?=$term->name?>
                                </div>
                                <div class="blog-post__logo">
                                    <img src="<?=get_the_post_thumbnail_url()?>" alt="">
                                </div>
                                <div class="blog-post__text">
                                    <?php the_content();?>
                                </div>
                            </div>
                        </article>
                        <?if(!empty($nextPost)):?>
                            <div class="blog-post__nav">
                                <a href="<?=get_permalink( $nextPost->ID )?>" class="wow bounceInUp blog-post__nav-link">
                                    <span>Next:</span>
                                    <?=$nextPost->post_title?>
                                </a>
                            </div>
                        <?endif;?>

                        <? get_template_part( 'templates/blog/blog', 'recent');?>
                    </div><!-- /.blog__content -->
                    <? get_template_part( 'templates/blog/blog', 'aside', ['current' => $term->term_id]);?>

                </div><!-- /.blog__content -->
            </section>
        </div>
    </main><!-- / .site-main -->
<?php
get_footer();
