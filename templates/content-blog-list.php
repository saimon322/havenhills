
<?if($args['posts']->found_posts >= 1):?>
    <?while ($args['posts']->have_posts()):
        $args['posts']->the_post();
        get_template_part( 'templates/blog/blog', 'list-item');
        wp_reset_postdata();
    endwhile;?>
<?endif;?>