<?php
$term = array_pop(wp_get_post_terms( $post->ID, 'category'));

if($term == null){
    $term->name = "All";
}
$color = get_field('color', $term);

?>
<li class="blog__item blog-item">
    <article>
        <a href="<?=get_post_permalink()?>" class="blog-item__hovers">
            <div class="blog-item__logo" style="background-image:url(<?=get_the_post_thumbnail_url()?>)">
                <img src="<?=get_the_post_thumbnail_url()?>" alt="">
            </div>
            <div class="blog-item__title" style="color: <?=$color?>">
                <?=$post->post_title?>
            </div>
        </a>
        <div class="blog-item__text">
            <?php the_content();?>
        </div>
        <div class="blog-item__footer" style="color: <?=$color?>">
            <?=date("M j, Y", strtotime($post->post_date));?> | <?=$term->name?>
        </div>
    </article>
</li>