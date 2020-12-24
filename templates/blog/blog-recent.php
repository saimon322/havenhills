<?php

$args = array(
    'numberposts' => 3,
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);

$posts = new WP_Query( $args );

if($posts->found_posts >= 1):
?>
    <div class="blog-post__others">
        <h3 class="blog-post__others-title">Recent posts</h3>
        <ul class="blog__items">
            <?while ($posts->have_posts()): $posts->the_post();?>
                <? get_template_part( 'templates/blog/blog', 'list-item');?>
            <?endwhile;?>
        </ul><!-- /.blog__items -->
    </div>
<?endif;?>